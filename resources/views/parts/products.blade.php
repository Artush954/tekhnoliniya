<div class="col-6 col-md-4 col-lg-4 col-xl-3">
    <div class="product">
        <figure class="product-media">
            <a href="{{ route('product-viewpage',['slug'=>$products->slug]) }}">
                <img src="{{asset('images/thumb/'.$products->image)}}" alt="Product image" class="product-image">
            </a>
        </figure><!-- End .product-media -->

        <div class="product-body">
            <h3 class="product-title"><a href="{{ route('product-viewpage',['slug'=>$products->slug]) }}">{{ $products->title }}</a></h3><!-- End .product-title -->
            <div class="product-price">
                {{ $products->price }} &#8381;
            </div><!-- End .product-price -->
            <div class="product-nav product-nav-dots">
                <a  style="background: #b87145;"><span class="sr-only">Color Name</span></a>
                <a  style="background: #f0c04a;"><span class="sr-only">Color Name</span></a>
                <a  style="background: #333333;"><span class="sr-only">Color Name</span></a>
                <a   style="background: #cc3333;"><span class="sr-only">Color Name</span></a>
                <a  style="background: #3399cc;"><span class="sr-only">Color Name</span></a>
                <a  style="background: #669933;"><span class="sr-only">Color Name</span></a>
                <a  style="background: #f2719c;"><span class="sr-only">Color Name</span></a>
                <a  style="background: #ebebeb;"><span class="sr-only">Color Name</span></a>
            </div><!-- End .product-nav -->
        </div><!-- End .product-body -->
    </div><!-- End .product -->
</div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->

