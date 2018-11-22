<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\UserCreateRequest;
use App\Models\Role;
use App\Models\ticket;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Psr\Log\NullLogger;

class UsersController extends Controller
{
    public function __contruct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::check()) {
            $checker = new User();
            $result = $checker->checkRole(Auth::user()->user_group);
            if ($result == 1) {
                $users = User::where('user_group', '=', 1)->get();
                return view('admin.list', compact('users', 'userGroups'));
            }
            return back()->with('status', 'اجازه دسترسی به این صفحه را ندارید...!');
        }
        return redirect()->route('login');
    }

    public function listOfAdmins()
    {
        if (Auth::check()) {
            $admins = User::where('user_group', '!=', 1)->get();
            return view('admin.listadmin', compact('admins'));
        } else {
            return redirect()->route('login');
        }
    }

    public function create()
    {
        $checker = new User();
        $result = $checker->checkRole(Auth::user()->user_group);
        if ($result == 1) {
            $userRoles = User::getUserRoles();
            $userGender = User::getUserGender();
            $userPlan = User::getUserPlans();
            $userGroups = Role::get();
            return view('admin.create', compact('userRoles', 'userGender', 'userPlan', 'userGroups'));
        }
        return back()->with('status', 'اجازه دسترسی به این صفحه را ندارید...!');
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            $checker = new User();
            $result = $checker->checkRole(Auth::user()->user_group);
            if ($result == 1) {
                $user = User::create([
                    'user_fullName' => $request->input('userFullName'),
                    'email' => $request->input('userEmail'),
                    'password' => $request->input('userPassword'),
                    'user_role' => $request->input('userRole'),
                    'user_plan' => $request->input('userPlan'),
                    'user_gender' => $request->input('userGender'),
                    'user_group' => $request->input('userGroup')
                ]);
                if ($user && $user instanceof User) {
                    return back()->with('status', 'کاربر جدید با موفقیت ایجاد گردید!');
                }
            } else {
                return back()->with('status', 'اجازه دسترسی به این صفحه را ندارید...!');
            }
        }
    }

    public function delete(Request $request, $user_id)
    {
        if (Auth::check()) {
            $checker = new User();
            $result = $checker->checkRole(Auth::user()->user_group);
            if ($result == 1) {
                $user = User::find($user_id);
                $userDeleteResult = $user->delete();
                if ($userDeleteResult) {
                    return back()->with('status', 'کاربر با موفقیت حذف گردید');
                }
            } else {
                return back()->with('status', 'اجازه دسترسی به این صفحه را ندارید...!');
            }
        }
    }

    public function edit(Request $request, $user_id)
    {
        if (Auth::check()) {
            $checker = new User();
            $result = $checker->checkRole(Auth::user()->user_group);
            if ($result == 1) {
                $user = User::find($user_id);
                $userRoles = User::getUserRoles();
                $userPlan = User::getUserPlans();
                $userGender = User::getUserGender();
                $userGroups = Role::get();
                return view('admin.edit', compact('user', 'userRoles', 'userPlan', 'userGender', 'userGroups'));
            }
        } else {
            return back()->with('status', 'اجازه دسترسی به این صفحه را ندارید...!');
        }
    }

    public function update(Request $request, $user_id)
    {
        if (Auth::check()) {
            $checker = new User();
            $result = $checker->checkRole(Auth::user()->user_group);
            if ($result == 1) {
                $user = User::find($user_id);
                if ($user && $user instanceof User) {
                    $userData = [
                        'user_fullName' => $request->input('userFullName'),
                        'email' => $request->input('userEmail'),
                        'user_wallet' => $request->input('userWallet'),
                        'user_group' => $request->input('userGroup')
                    ];
                    if ($request->filled('userPassword')) {
                        $userData['password'] = $request->input('userPassword');
                    }
                    $updateResult = $user->update($userData);
                    if ($updateResult) {
                        return redirect()->route('admin.users')->with('status', 'کاربر با موفقیت به روز رسانی گردید!');
                    }
                } else {
                    return back()->with('status', 'اجازه دسترسی به این صفحه را ندارید...!');
                }
            }
        }
    }

    public function profile(Request $request, $user_id)
    {
        $user = User::find($user_id);
        return view('viseny.user.profile.profilepages.account', compact('user'));
    }

    public function profileOrders(Request $request, $user_id)
    {
        $user = User::find($user_id);
        if (Auth::check())
            return view('viseny.user.profile.profilepages.order', compact('user'));
        else
            return $this->middleware('login');
    }

    public function profileAddresses(Request $request, $user_id)
    {
        $user = User::find($user_id);
        return view('viseny.user.profile.profilepages.address', compact('user'));
    }

    public function profileFavorites(Request $request, $user_id)
    {
        $user = User::find($user_id);
        return view('viseny.user.profile.profilepages.favorite', compact('user'));
    }

    public function profileTickets(Request $request, $user_id)
    {
        $user = User::find($user_id);
        $tickets = ticket::where('ticket_user_id', '=', Auth::user()->user_id)->get();
        return view('viseny.user.profile.profilepages.ticket', compact('user', 'tickets'));
    }

    public function updateProfile(Request $request, $user_id)
    {
        $user = User::find($user_id);
        if ($user && $user instanceof User) {
            $userData = [
                'user_fullName' => $request->input('fullName'),
                'user_phoneNumber' => $request->input('phoneNumber'),
                'user_birthday' => $request->input('birthday')
            ];
            if (($request->filled('password') && ($request->filled('ConfirmPassword')))) {
                if ($request->filled('password') == $request->filled('ConfirmPassword')) {
                    $userData['password'] = bcrypt($request->input('password'));
                }
            }
            $updateResult = $user->update($userData);
            if ($updateResult) {
                return back()->with('status', 'اطلاعات شما موفقیت به روز رسانی گردید!');
            }
        }

    }

    public function updateAddress(Request $request, $user_id)
    {
        $user = User::find($user_id);
        if ($user && $user instanceof User) {
            $userData = [
                'user_state' => $request->input('state') . ' / ' . $request->input('city'),
                'user_address' => $request->input('address1'),
                'user_postalCode' => $request->input('postalCode'),
            ];
            if ($request->filled('company')) {
                $userData['user_company'] = $request->input('company');
            }
            $updateResult = $user->update($userData);
            if ($updateResult) {
                return back()->with('status', 'اطلاعات شما موفقیت به روز رسانی گردید!');
            }
        }
    }
}