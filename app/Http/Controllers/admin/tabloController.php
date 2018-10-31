<?php

namespace App\Http\Controllers\admin;

use App\Models\comment;
use App\Models\tablo;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class tabloController extends Controller
{
//
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

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
            'tablo_category' => $request->input('tabloCategoryType'),
            'tablo_color_tag' => $request->input('tabloCategoryColor'),
            'tablo_size' => $request->input('tabloSize'),
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
                'tablo_size' => $request->input('tabloSize')
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

    public function customer()
    {
        $products = tablo::get();
        $user = User::get();
        return view('viseny.index', compact('products', 'user'));
    }

    public function singleProduct(Request $request, $tablo_id)
    {
        $product = tablo::find($tablo_id);
        if ($product && $product instanceof tablo) {
            $tabloData = [
                'tablo_view_count' => ($product->tablo_view_count + 1)
            ];
            $product->update($tabloData);
        }
        $comments = comment::with('users')->get();
        return view('viseny.singleproduct', compact('product', 'comments'));
    }
}



