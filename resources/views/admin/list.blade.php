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
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->user_id }}</th>
                        <td>{{ $user->user_fullName }}</td>
                        <td>{{ $user->user_email }}</td>
                        <td>{{ $user->role->role_name  }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ number_format($user->user_wallet) }} تومان</td>
                        <td>
                            <a href="{{ route('admin.users.delete',[$user->user_id]) }}">
                                حذف&nbsp;
                            </a>
                            <a href="{{ route('admin.users.edit',[$user->user_id]) }}">
                                ویرایش </a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection