@extends('layout.admin')
@section('content')
    <div class="card-title">
        <h4>لیست فاکتور ها </h4>
    </div>
    <div class="card-body">
        @include('partials.success')
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>شماره سفارش</th>
                    <th>نام و نام خانوادگی</th>
                    <th>فرستنده سفارش</th>
                    <th>سفارش مربوطه</th>
                    <th>مبلغ</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($factors as $factor)
                    <tr>
                        <th scope="row">{{ $factor->factor_id }}</th>
                        <td>{{ $factor->factor_order_id }}</td>
                        <td>{{ $factor->factor_user_fullName }}</td>
                        <td>{{ $factor->factor_company_name }}</td>
                        <td>{{ $factor->factor_product_id }}</td>
                        <td>{{ $factor->factor_price }}</td>
                        <td>
                            <label class="switch">
                                <form method="post"
                                      action="{{ route('admin.factor.confirm',[$factor->factor_id]) }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="confirmValue" value="1">
                                    @if($factor->factor_order_product_status == 0)
                                        <input type="submit" value="تایید نشده">
                                    @else
                                        تایید شده
                                    @endif
                                    <span class="slider"></span>
                                </form>
                            </label>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection