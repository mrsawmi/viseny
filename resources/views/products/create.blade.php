@extends('layout.admin')
@section('content')
    <div class="card-title">
        <h4>ایجاد محصول جدید</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="basic-form p-10">
                    @include('partials.errors')
                    @include('partials.success')
                    <form method="post" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="tabloTitle">نام اثر :</label>
                            <input id="tabloTitle" name="tabloTitle" type="text"
                                   class="form-control input-default hasPersianPlaceHolder"
                                   value="{{ old('tabloTitle') }}">
                        </div>
                        <div class="form-group">
                            <label for="tabloPainter">نام نقاش :</label>
                            <input id="tabloPainter" name="tabloPainter" type="text"
                                   class="form-control input-default hasPersianPlaceHolder"
                                   value="{{ old('tabloPainter') }}">
                        </div>
                        <div class="form-group">
                            <label for="tabloPrice">قیمت محصول :</label>
                            <input
                                    type="text"
                                    id="tabloPrice"
                                    name="tabloPrice"
                                    class="form-control input-default"
                                    value="{{ old('tabloPrice') }}">
                        </div>
                        <div class="form-group">
                            <label for="tabloDescription">توضیحات :</label>
                            <textarea
                                    rows="10"
                                    id="tabloDescription"
                                    name="tabloDescription"
                                    class="form-control input-default"
                            >{{ old('tabloDescription') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="tabloCategoryType">دسته بندی ها : (از علامت / برای جدا سازی استفاده کنید)</label>
                            <div class="form-group">
                                <input id="tabloCategoryType" name="tabloCategoryType" type="text"
                                       class="form-control input-default hasPersianPlaceHolder"
                                       value="{{ old('tabloCategoryType') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tabloCategoryColor">دسته بندی رنگی : (از علامت / برای جدا سازی استفاده کنید)</label>
                            <input id="tabloCategoryColor" name="tabloCategoryColor" type="text"
                                   class="form-control input-default hasPersianPlaceHolder"
                                   value="{{ old('tabloCategoryColor') }}">

                        </div>
                        <div class="form-group">
                            <label for="tabloSize">سایز : (از علامت / برای جدا سازی استفاده کنید)</label>
                            <input id="tabloSize" name="tabloSize" type="text"
                                   class="form-control input-default hasPersianPlaceHolder"
                                   value="{{ old('tabloSize') }}">
                        </div>
                        <div class="form-group">
                            <label for="tabloImage">تصویر محصول :</label>
                            <input type="file" name="tabloImage">
                        </div>
                        <div class="form-group m-t-20">
                            <button type="submit" class="btn btn-primary m-b-10 m-l-5">ثبت اطلاعات
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection