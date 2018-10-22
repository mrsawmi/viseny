@extends('layout.admin')
@section('content')
    {{ $id = Auth::id() }}
    <form method="post" action="{{ route('admin.order.store') }}">
        @foreach($tablos as $tablo)
            <table class="table-bordered">
                <div class="form-group">
                    <label for="orderTitle" name="orderID"># {{ $tablo->tablo_id }} </label>
                    <input type="text" name="orderTitle" id="paymentTitle"
                           value="{{ $tablo->tablo_title }}" readonly
                           class="form-control input-default hasPersianPlaceHolder"
                    />
                </div>
                <div class="form-group">
                    <img src="{{ asset('storage/tablo/'.$tablo->tablo_img) }}" name="paymentTablo" id="paymentTablo"
                         width="500px" height="500px"
                         alt="{{ $tablo->tablo_title }}"/>
                </div>
                <div class="form-group">
                    <label for="ticketTitle">توضیحات :</label>
                    <input type="text" name="ticketTitle" id="ticketTitle"
                           value="{{ $tablo->tablo_caption }}" readonly
                           class="form-control input-default hasPersianPlaceHolder"
                    />
                </div>
                <div class="form-group">
                    <label for="ticketTitle">نام نقاش :</label>
                    <input type="text" name="ticketTitle" id="ticketTitle"
                           value="{{ $tablo->tablo_painter }}" readonly
                           class="form-control input-default hasPersianPlaceHolder"
                    />
                </div>
                <div class="form-group">
                    <label for="ticketTitle">قیمت :</label>
                    <input type="text" name="ticketTitle" id="ticketTitle"
                           value="{{ $tablo->tablo_price }}" readonly
                           class="form-control input-default hasPersianPlaceHolder"
                    />
                </div>
                <button type="submit" class="btn btn-primary m-b-10 m-l-5">ثبت سفارش
                </button>
            </table>
        @endforeach
    </form>
@endsection