<section class="mb-2" style="background:#fff">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="widget widget-featured-products widget-border">
                <h3 class="widget-title"> محصولات پربازدید تاپ کالا</h3>
                <!-- Entry-->
                @foreach($mostViewed as $item)
                    <div class="entry">
                        <div class="entry-thumb"><a href="{{ route('products.single',[$item->tablo_id]) }}"><img
                                        src="{{ asset('/storage/tablo/'.$item->tablo_img) }}" alt="Product"></a></div>
                        <div class="entry-content">
                            <h4 class="entry-title"><a
                                        href="{{ route('products.single',[$item->tablo_id]) }}">{{ $item->tablo_caption }}</a>
                            </h4>
                            <span class="entry-meta"> {{ $item->tablo_price }} تومان </span>
                        </div>
                    </div>
            @endforeach
            <!-- Entry-->
            </div>
        </div>
    </div>
</section>

