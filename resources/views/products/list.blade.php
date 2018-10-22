@extends('layout.admin')
@section('content')
    <div class="card-title">
        <h4>لیست محصولات </h4>
    </div>
    <div class="card-body">
        @include('partials.success')
        <div class="table-responsive">
            <table class="table">
                <thead>
                @include('products.columns')
                </thead>
                <tbody>
                @foreach($tablos as $tablo)
                    <tr>
                        <th scope="row">{{ $tablo->tablo_id }}</th>
                        <td>{{ $tablo->tablo_title }}</td>
                        <td>{{ $tablo->tablo_painter }}</td>
                        <td><img src="{{ asset('/storage/tablo/'. $tablo->tablo_img) }}" alt="Img" with="100px"
                                 height="100px"></td>
                        <td>{{ $tablo->tablo_caption }}</td>
                        <td>{{ number_format($tablo->tablo_price) }}</td>
                        <td>{{ $tablo->tablo_category }}</td>
                        <td>{{ $tablo->tablo_color_tag }}</td>
                        <td>{{ $tablo->tablo_view_count }}</td>
                        <td>{{ $tablo->tablo_sells_count }}</td>
                        <td>{{ $tablo->created_at }}</td>
                        <td>@if ($tablo->tablo_status == 0)
                                در حال بررسی!
                            @else
                                تایید شده!
                        @endif
                        <td>
                            <a href="{{ route('admin.product.delete',[$tablo->tablo_id]) }}">
                                حذف
                            </a>
                            <a href="{{ route('admin.product.edit',[$tablo->tablo_id]) }}">
                                ویرایش
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection