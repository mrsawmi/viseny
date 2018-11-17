<div class="col-md-6 text-right pl-4">
    <div class="padding-top-2x mt-2 hidden-md-up"></div>
    <span class="text-muted align-middle"> نام طراح : {{ $product->tablo_painter }} </span>
    <h3 class="padding-top-1x text-normal font-orange">{{ $product->tablo_title }}</h3>
    <span class="h4 d-block mb-3">
              <del class="text-muted text-normal">{{ $product->tablo_price + ($product->tablo_price * 20 / 100) }}</del>&nbsp; {{ $product->tablo_price }}
        تومان
			</span>
    <p style="text-align:justify">{{ $product->tablo_caption }}</p>
    <div class="row margin-top-1x pt-3 pb-3 mb-3" style="background-color:#e6e6e6;border: solid 1px #dad9d9;">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="size">سایز :</label>
                <select class="form-control" id="size" onchange="calculate(this.value);">
                    <option>انتخاب سایز</option>
                    @foreach(explode(" / ",$product->tablo_size) as $size)
                        <option value="0">{{ $size }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="form-group">
                <label for="color">انتخاب رنگ</label>
                <select class="form-control" id="color">
                    @foreach(explode(" / ",$product->tablo_color_tag) as $color)
                        <option>{{ $color }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="padding-bottom-1x mb-2">
        <span class="text-medium">دسته های محصول :&nbsp;</span>
        {{--@foreach($product->tablo_category as $category)--}}
        {{--<a class="navi-link" href="#">{{ $category }}</a>--}}
        {{--@endforeach--}}
        {{--</div>--}}
        <hr class="mb-3">
        <div class="d-flex flex-wrap justify-content-between">
            <div class="entry-share mt-2 mb-2">
                <span class="text-muted"> {{ $product->tablo_view_count }} بازدید </span>
                <span class="text-muted"> {{ $product->tablo_sells_count }} فروش </span>
            </div>
            <div class="entry-share mt-2 mb-2"><span class="text-muted">اشتراک گذاری:</span>
                <div class="share-links">
                    <a class="social-button shape-circle sb-facebook" href="#" data-toggle="tooltip"
                       data-placement="top"
                       title="" data-original-title="فیسبوک"><i class="socicon-facebook"></i></a>
                    <a class="social-button shape-circle sb-twitter" href="#" data-toggle="tooltip" data-placement="top"
                       title="" data-original-title="توییتر"><i class="socicon-twitter"></i></a>
                    <a class="social-button shape-circle sb-instagram" href="#" data-toggle="tooltip"
                       data-placement="top"
                       title="" data-original-title="اینستاگرام"><i class="socicon-instagram"></i></a>
                    <a class="social-button shape-circle sb-google-plus" href="#" data-toggle="tooltip"
                       data-placement="top"
                       title="" data-original-title="گوگل +"><i class="socicon-googleplus"></i></a>
                    <a class="social-button shape-circle sb-telegram" href="#" data-toggle="tooltip"
                       data-placement="top"
                       title="" data-original-title=" تلگرام "><i class="socicon-telegram"></i></a>
                </div>
            </div>
            <div class="sp-buttons mt-2 mb-2">
                <form method="post" action="{{ route('basket') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="orderID" value="{{ $product->tablo_id }}">
                    <input type="hidden" name="tabloPrice" value="{{ $product->tablo_price }}">
                    {{--<button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title=""--}}
                    {{--data-original-title="علاقه مندی"><i class="icon-heart"></i></button>--}}
                    <button class="btn btn-primary" data-toast="" data-toast-type="success"
                            type="submit"
                            data-toast-position="topRight"
                            data-toast-icon="icon-circle-check" data-toast-title=" محصول "
                            data-toast-message="به سبد خرید اضافه شد"><i class="icon-bag"></i> افزودن به سبد خرید
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>