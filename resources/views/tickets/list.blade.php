@extends('layout.admin')
@section('content')
    <div class="card-title">
        <h4>لیست تیکت ها </h4>
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
                    <th>موضوع</th>
                    <th>سفارش مربوطه</th>
                    <th>اولویت</th>
                    <th>پیام</th>
                    <th>فایل ارسالی</th>
                    <th> عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tickets as $ticket)
                    <tr>
                        <th scope="row">{{ $ticket->ticket_id }}</th>
                        <td>{{ $ticket->user->user_fullName }}</td>
                        <td>{{ $ticket->user->user_email }}</td>
                        <td>{{ $ticket->ticket_title}}</td>
                        <td>    </td>
                        <td>{{ $ticket->ticket_priority }}</td>
                        <td>{{ $ticket->ticket_content }}</td>
                        <td>{{ $ticket->ticket_attach}}</td>
                        <td>
                            <a href="">
                                پاسخ&nbsp;
                            </a>
                            <a href="">
                                بستن </a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection