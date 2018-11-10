<section class="pr-2 pl-2 pt-2 pb-2 rounded-5 soft-shadow mb-2" style="background:#fff">
    <h6 class="text-right border-title mb-3"> جدیدترین محصولات </h6>
    <div class="row">
        @foreach($newestProducts as $new)
            <div class="col-md-4 col-sm-6">
                <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html">
                        <div class="inner">
                            <div class="main-img"><img src="{{ asset('/storage/tablo/'.$new->tablo_img) }}"
                                                       alt="Category"></div>
                        </div>
                    </a>
                    <div class="card-body text-center">
                        <h4 class="card-title">{{ $new->tablo_title }}</h4>
                        <p class="text-muted">قیمت {{ $new->tablo_price }} تومان</p><a
                                class="btn btn-outline-primary btn-sm"
                                href="shop-grid-ls.html">نمایش
                            محصولات</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="text-center"><a class="btn btn-secondary margin-top-none" href="shop-categories.html">دیدن
            همه دسته ها</a></div>
</section>