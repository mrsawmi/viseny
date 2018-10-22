@extends('layout.admin')
@section('content')
    <div class="card-title">
        <h4>ویرایش مطلب</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="basic-form p-10">
                    @include('partials.errors')
                    @include('partials.success')
                    <form method="post" action="{{ route('admin.product.update',[$tablo->tablo_id]) }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="tabloTitle">عنوان</label>
                            <input id="tabloTitle" name="tabloTitle" type="text"
                                   class="form-control input-default hasPersianPlaceHolder"
                                   value="{{ old('postTitle',$tablo->tablo_title) }}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="tabloDiscription">توضیحات :</label>
                            <textarea
                                    rows="10"
                                    id="tabloDiscription"
                                    name="tabloDiscription"
                                    class="form-control input-default"
                            >{{ old('tabloDiscription',$tablo->tablo_caption) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="tabloPainter">نام نقاش :</label>
                            <input
                                    type="text"
                                    id="tabloPainter"
                                    name="tabloPainter"
                                    class="form-control input-default"
                                    value="{{ old('tabloPainter',$tablo->tablo_painter ) }}">
                        </div>
                        <div class="form-group">
                            <label for="tabloPrice">قیمت محصول :</label>
                            <input
                                    type="text"
                                    id="tabloPrice"
                                    name="tabloPrice"
                                    class="form-control input-default"
                                    value="{{ old('tabloPrice',$tablo->tabalo_price ) }}">
                        </div>
                        {{--<div class="form-group">--}}
                        {{--<label for="postCategories">دسته بندی ها :</label>--}}
                        {{--<div class="postCategories">--}}
                        {{--<ul>--}}
                        {{--@foreach($categories as $category)--}}
                        {{--<li>--}}
                        {{--<input--}}
                        {{--type="checkbox"--}}
                        {{--name="categories[]"--}}
                        {{--value="{{ $category->id }}"--}}
                        {{--{{ in_array($category->id,$postCategories) ? 'checked' : '' }}--}}
                        {{-->--}}
                        {{--{{ $category->title }}--}}
                        {{--</li>--}}
                        {{--@endforeach--}}
                        {{--</ul>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                        {{--<label for="postTags">برچسب ها:</label>--}}
                        {{--<select multiple style="min-width: 300px;" name="postTags[]" id="postTags">--}}
                        {{--@foreach($allTags as $tag)--}}
                        {{--<option--}}
                        {{--value="{{ $tag->id }}"--}}
                        {{--{{ in_array($tag->id,$postTags) ? 'selected' : '' }}--}}

                        {{-->{{ $tag->name }}</option>--}}
                        {{--@endforeach--}}
                        {{--</select>--}}
                        {{--</div>--}}
                        <div class="form-group">
                            <label for="tabloImage">تصویر محصول :</label>
                            <input type="file" name="tabloImage" id="tabloImage" value="{{ $tablo->tablo_img }}">
                            @if(!empty($tablo->tablo_img))
                                <img src="{{ asset('/storage/tablo/'. $tablo->tablo_img) }}" alt="Img" width="100px"
                                     height="100px">
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="tabloStatus">وضعیت :</label>
                            <select name="tabloStatus" id="tabloStatus" class="form-control">
                                @foreach($tabloStatuses as $tabloStatus => $tabloStatusTitle)
                                    <option
                                            value="{{ $tabloStatus }}"
                                            {{ $tablo->tablo_status == $tabloStatus ? 'selected' : '' }}
                                    >{{ $tabloStatusTitle }}</option>
                                @endforeach
                            </select>
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