<?php

namespace App\Http\Controllers\admin;

use App\comment;
use App\Models\tablo;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class tabloController extends Controller
{
    public function index()
    {
        $tablos = tablo::get();
        $tabloStatus = tablo::getTabloStatus();
        return view('products.list', compact('tablos', 'tabloStatus'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $tablo = tablo::create([
            'tablo_title' => $request->input('tabloTitle'),
            'tablo_caption' => $request->input('tabloDescription'),
            'tablo_painter' => $request->input('tabloPainter'),
            'tablo_price' => $request->input('tabloPrice'),
            'tablo_img' => $request->input('tabloPainter') . '.' . $request->file('tabloImage')->getClientOriginalName(),
        ]);
        if ($request->hasFile('tabloImage')) {
            $request->file('tabloImage')->storeAs(
                'public/tablo',
                $request->input('tabloPainter') . '.' . $request->file('tabloImage')->getClientOriginalName(),
                'local'
            );
        }
        $tablo->save();
        return back()->with('status', 'محصول با موفقیت اصافه شد.');

    }

    public function edit(Request $request, $tablo_id)
    {
        $user = User::get();
        $tablo = tablo::find($tablo_id);
        $tabloStatuses = tablo::getTabloStatus();
        return view('products.edit', compact('tablo', 'tabloStatuses', 'user'));
    }

    public function update(Request $request, $tablo_id)
    {
        $tablo = tablo::find($tablo_id);
        if ($tablo && $tablo instanceof tablo) {
            $tabloData = [
                'tablo_title' => $request->input('tabloTitle'),
                'tablo_caption' => $request->input('tabloDiscription'),
                'tablo_status' => $request->input('tabloStatus'),
            ];
            if ($request->hasFile('tabloImage')) {
                array_push($tabloData, ['tablo_img' => $request->input('tabloPainter') . '.' . $request->file('tabloImage')->getClientOriginalName()]);
                $request->file('tabloImage')->storeAs(
                    'public/tablo',
                    $request->input('tabloPainter') . '.' . $request->file('tabloImage')->getClientOriginalName(),
                    'local'
                );
            }
            $tablo->update($tabloData);
            return redirect()->route('admin.product', compact('tablo'))->with('status', 'محصول با موفقیت به روز رسانی گردید!');
        }
    }

    public function delete(Request $request, $tablo_id)
    {
        $tablo = tablo::find($tablo_id);
        $deleteResult = $tablo->delete();
        if ($deleteResult) {
            return back()->with('status', 'مطلب با موفقیت حذف گردید');
        }
    }

    public function customer(Request $request, $tablo_id)
    {
        $tablo = tablo::find($tablo_id);
        return view('viseny.singleProduct', compact('tablo'));
    }
}
