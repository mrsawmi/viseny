<?php

namespace App\Http\Controllers\admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class rolesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::check()) {
            $checker = new User();
            $result = $checker->checkRole(Auth::user()->user_group);
            if ($result == 1) {
                $userRoles = Role::get();
                return view('roles.list', compact('userRoles'));
            }
            return back()->with('status', 'اجازه دسترسی به این صفحه را ندارید...!');
        }
        return redirect()->route('login');
    }

    public function store(Request $request)
    {
        $role = Role::create([
            'role_name' => $request->input('roleName'),
        ]);
        $role->save();
        return back()->with('status', 'نقش کاربری با موفقیت ایجاد گردید!');
    }

    public function delete(Request $request, $role_id)
    {
        $role = Role::find($role_id);
        $roleDeleteResult = $role->delete();
        if ($roleDeleteResult) {
            return back()->with('status', 'نقش کاربری با موفقیت حذف گردید');
        }
    }
}
