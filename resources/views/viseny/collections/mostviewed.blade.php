<section class=" pr-2 pl-2 pt-2 pb-2 rounded-5 soft-shadow mb-2" style="background:#fff">
    <h6 class="text-right border-title mb-3"> محصولات پربازدید </h6>
    <div class="owl-carousel"
         data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;margin&quot;: 10, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
        <!-- Product-->
        @foreach($mostViewed as $new)
            <div class="grid-item">
                <div class="product-card">
                    <a class="product-thumb mt-3" href="shop-single.html"><img
                                src="{{ asset('/storage/tablo/'.$new->tablo_img) }}" alt="Product"></a>
                    <h3 class="product-title"><a href="shop-single.html">{{ $new->tablo_title }}</a></h3>
                    <h4 class="product-price">
                        <del>{{ $new->tablo_price + ($new->tablo_price * 20 / 100) }}</del>
                        {{ $new->tablo_price }}
                        <span> تومان </span>
                    </h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                                title="علاقه مندی"><i class="icon-heart"></i></button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"
                                data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">
                            افزودن به سبد
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>