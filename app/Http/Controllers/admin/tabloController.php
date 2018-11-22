<?php

namespace App\Http\Controllers\admin;

use App\Models\comment;
use App\Models\tablo;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class tabloController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function index()
    {
        if (Auth::check()) {
            $checker = new User();
            $result = $checker->checkRole(Auth::user()->user_group);
            if ($result == 1 || 3) {
                $tablos = tablo::get();
                $tabloStatus = tablo::getTabloStatus();
                return view('products.list', compact('tablos', 'tabloStatus'));
            }
            return back()->with('status', 'اجازه دسترسی به این صفحه را ندارید...!');
        }
        return redirect()->route('login');
    }

    public function create()
    {
        if (Auth::check()) {
            $checker = new User();
            $result = $checker->checkRole(Auth::user()->user_group);
            if ($result == 1 || 3) {
                return view('products.create');
            } else {
                return back()->with('status', 'اجازه دسترسی به این صفحه را ندارید...!');
            }
        }
    }

    public function store(Request $request)
    {
        $checker = new User();
        $result = $checker->checkRole(Auth::user()->user_group);
        if ($result == 1 || 3) {
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
        } else
            return back()->with('status', 'اجازه دسترسی به این صفحه را ندارید...!');
    }

    public function edit(Request $request, $tablo_id)
    {
        if (Auth::check()) {
            $checker = new User();
            $result = $checker->checkRole(Auth::user()->user_group);
            if ($result == 1 || 3) {
                $user = User::get();
                $tablo = tablo::find($tablo_id);
                $tabloStatuses = tablo::getTabloStatus();
                return view('products.edit', compact('tablo', 'tabloStatuses', 'user'));
            } else
                return back()->with('status', 'اجازه دسترسی به این صفحه را ندارید...!');
        }
    }

    public function update(Request $request, $tablo_id)
    {
        if (Auth::check()) {
            $checker = new User();
            $result = $checker->checkRole(Auth::user()->user_group);
            if ($result == 1 || 3) {
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
            } else
                return back()->with('status', 'اجازه دسترسی به این صفحه را ندارید...!');
        }
    }

    public function delete(Request $request, $tablo_id)
    {
        if (Auth::check()) {
            $checker = new User();
            $result = $checker->checkRole(Auth::user()->user_group);
            if ($result == 1 || 3) {
                $tablo = tablo::find($tablo_id);
                $deleteResult = $tablo->delete();
                if ($deleteResult) {
                    return back()->with('status', 'مطلب با موفقیت حذف گردید');
                }
                return back()->with('status', 'اجازه دسترسی به این صفحه را ندارید...!');
            }
            return back()->with('status', 'اجازه دسترسی به این صفحه را ندارید...!');
        }
    }


    public function customer()
    {
        $newestProducts = DB::table('tablos')->orderBy('created_at', 'desc')
            ->get();
        $newestProducts = array_reverse($newestProducts->toArray());
        $mostViewed = DB::table('tablos')->orderByDesc('tablo_view_count')->get();
        $user = Auth::user();
        $products = tablo::get();
        return view('viseny.index', compact('products', 'user', 'newestProducts', 'mostViewed'));
    }

    public function singleProduct(Request $request, $tablo_id)
    {
        $product = tablo::find($tablo_id);
        if (!empty($product)) {
            if ($product && $product instanceof tablo) {
                $tabloData = [
                    'tablo_view_count' => ($product->tablo_view_count + 1)
                ];
                $product->update($tabloData);
            }
            $comments = comment::where('comment_tablo_id', '=', $product->tablo_id)->get();
            return view('viseny.singleproduct', compact('product', 'comments'));
        }
        return back()->with('status', 'محصول مورد نظر یافت نشد...!');
    }

    public function about()
    {
        $_SESSION['tracker'] = URL::current();
        $teamMembers = User::where('user_group', '!=', 1)->get();
        return view('viseny.about', compact('teamMembers'));
    }

    public function team()
    {
        $teamUsers = User::where('user_group', '!=', 1)->get();
        return view('viseny.user.profile.team.list', compact('teamUsers'));
    }

    public function contactUs()
    {
        return view('viseny.contact');
    }
}



