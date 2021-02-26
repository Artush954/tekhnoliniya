<div class="col-6 col-md-4 col-lg-4 col-xl-3">
    <div class="product">
        <figure class="product-media">
            <a href="{{route('product-viewpage',['id'=>$products->id])}}">
                <img src="{{asset('images/'.$products->image)}}" alt="Product image" class="product-image">
            </a>




        </figure><!-- End .product-media -->

        <div class="product-body">
            <div class="product-cat">

                <a href="#">{{$products->SubCategory->title}}</a>
            </div><!-- End .product-cat -->
            <h3 class="product-title"><a href="product.html">{{ $products->title }}</a></h3><!-- End .product-title -->
            <div class="product-price">
               {{$products->price}} P
            </div><!-- End .product-price -->


            <div class="product-nav product-nav-dots">
                <a href="#" style="background: #b87145;"><span class="sr-only">Color Name</span></a>
                <a href="#" style="background: #f0c04a;"><span class="sr-only">Color Name</span></a>
                <a href="#" style="background: #333333;"><span class="sr-only">Color Name</span></a>
                <a href="#" class="selected" style="background: #cc3333;"><span class="sr-only">Color Name</span></a>
                <a href="#" style="background: #3399cc;"><span class="sr-only">Color Name</span></a>
                <a href="#" style="background: #669933;"><span class="sr-only">Color Name</span></a>
                <a href="#" style="background: #f2719c;"><span class="sr-only">Color Name</span></a>
                <a href="#" style="background: #ebebeb;"><span class="sr-only">Color Name</span></a>
            </div><!-- End .product-nav -->
        </div><!-- End .product-body -->
    </div><!-- End .product -->
</div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->

