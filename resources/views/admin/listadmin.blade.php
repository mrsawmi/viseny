@extends('layout.admin')
@section('content')
    <div class="card-title">
        <h4>لیست کاربران </h4>
    </div>
    <div class="card-body">
        @include('partials.success')
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>نام و نام خانوادگی</th>
                    <th>ایمیل</th>
                    <th>نوع کاربر</th>
                    <th>تاریخ ثبت نام</th>
                    <th>موجودی</th>
                    <th> عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($admins as $admin)
                    <tr>
                        <th scope="row">{{ $admin->user_id }}</th>
                        <td>{{ $admin->user_fullName }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>{{ $admin->role->role_name  }}</td>
                        <td>{{ $admin->created_at }}</td>
                        <td>{{ number_format($admin->user_wallet) }} تومان</td>
                        <td>
                            <a href="{{ route('admin.users.delete',[$admin->user_id]) }}">
                                حذف&nbsp;
                            </a>
                            <a href="{{ route('admin.users.edit',[$admin->user_id]) }}">
                                ویرایش </a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection