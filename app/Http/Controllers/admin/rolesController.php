<?php

namespace App\Http\Controllers\admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class rolesController extends Controller
{
    public function index()
    {
        $userRoles = Role::get();
        return view('roles.list', compact('userRoles'));
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
