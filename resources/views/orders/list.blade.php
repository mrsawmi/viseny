@extends('layout.admin')
@section('content')
    <div class="card-title">
        <h4>لیست سفارشات</h4>
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
                    <th>سفارش مربوطه</th>
                    <th>مبلغ</th>
                    <th>فایل سفارش</th>
                    <th> عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <th scope="row">{{ $order->order_id }}</th>
                        <td>{{ $order->user->user_fullName }}</td>
                        <td>{{ $order->user->user_email }}</td>
                        <td>{{ $order->tablo->tablo_title }}</td>
                        <td>{{ $order->tablo->tablo_price }}</td>
                        <td>{{ $order->tablo->tablo_img }}</td>
                        <td>
                            <form method="post"
                                  action="{{ route('admin.order.confirm',[$order->order_id]) }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="confirmValue" value="1">
                                @if($order->order_status == 0)
                                    <input type="submit" value="تایید نشده">
                                @else
                                    تایید شده
                                @endif
                                <span class="slider"></span>
                            </form>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection