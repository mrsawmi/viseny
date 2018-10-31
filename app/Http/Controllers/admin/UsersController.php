<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\UserCreateRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        $userGroups = User::with('role')->get();
        return view('admin.list', compact('users', 'userGroups'));
    }

    public function create()
    {
        $userRoles = User::getUserRoles();
        $userGender = User::getUserGender();
        $userPlan = User::getUserPlans();
        $userGroups = Role::get();
        return view('admin.create', compact('userRoles', 'userGender', 'userPlan', 'userGroups'));
    }

    public function store(Request $request)
    {
        $user = User::create([
            'user_fullName' => $request->input('userFullName'),
            'user_email' => $request->input('userEmail'),
            'user_password' => $request->input('userPassword'),
            'user_role' => $request->input('userRole'),
            'user_plan' => $request->input('userPlan'),
            'user_gender' => $request->input('userGender'),
            'user_group' => $request->input('userGroup')
        ]);
        if ($user && $user instanceof User) {
            return back()->with('status', 'کاربر جدید با موفقیت ایجاد گردید!');
        }
    }

    public function delete(Request $request, $user_id)
    {
        $user = User::find($user_id);
        $userDeleteResult = $user->delete();
        if ($userDeleteResult) {
            return back()->with('status', 'کاربر با موفقیت حذف گردید');
        }
    }

    public function edit(Request $request, $user_id)
    {
        $user = User::find($user_id);
        $userRoles = User::getUserRoles();
        $userPlan = User::getUserPlans();
        $userGender = User::getUserGender();
        $userGroups = Role::get();
        return view('admin.edit', compact('user', 'userRoles', 'userPlan', 'userGender', 'userGroups'));
    }

    public function update(Request $request, $user_id)
    {
        $user = User::find($user_id);
        if ($user && $user instanceof User) {
            $userData = [
                'user_fullName' => $request->input('userFullName'),
                'user_email' => $request->input('userEmail'),
                'user_wallet' => $request->input('userWallet'),
                'user_group' => $request->input('userGroup')
            ];
            if ($request->filled('userPassword')) {
                $userData['user_password'] = $request->input('userPassword');
            }
            $updateResult = $user->update($userData);
            if ($updateResult) {
                return redirect()->route('admin.users')->with('status', 'کاربر با موفقیت به روز رسانی گردید!');
            }
        }
    }

    public function profile(Request $request, $user_id)
    {
        $user = User::find($user_id);
        return view('viseny.profile.profile', compact('user'));
    }

    public function log()
    {
        return view('auth.log');
    }
}