<div class="widget widget-featured-products widget-border">
    <h3 class="widget-title">ویدجت اخبار و اعلامیه</h3>
    <!-- Entry-->
    @foreach($products as $product)
        <div class="entry">
            <div class="entry-thumb"><a href="{{ route('products.single',[$product->tablo_id]) }}"><img
                            src="{{ asset('/storage/tablo/'.$product->tablo_img) }}" alt="Product"></a></div>
            <div class="entry-content">
                <h4 class="entry-title"><a
                            href="{{ route('products.single',[$product->tablo_id]) }}">{{ $product->tablo_title }}‌</a>
                </h4>
                <span class="entry-meta">{{ $product->created_at }}</span>
            </div>
        </div>
    @endforeach
</div>



