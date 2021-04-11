<header class="header header-4">
    <div class="header-middle sticky-header">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>

                <a href="{{route('index')}}" class="logo">
                    <img src="{{asset('logo.png')}}" alt="Технолиния" width="82"
                         height="25">
                </a>
            </div><!-- End .header-left -->

            <div class="header-right">

                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li class="megamenu-container active">
                            <a href="{{route('index')}}">Главная</a>
                        </li>
                        <li>
                            <a href="{{route('categories')}}" class="sf-with-ul">Каталог</a>
                            <div class="megamenu megamenu-md">
                                <div class="row no-gutters">
                                    <div class="col-md-8">
                                        <div class="menu-col">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="menu-title">Каталог</div>
                                                    <!-- End .menu-title -->
                                                    <ul>
                                                        @foreach($category as $item)
                                                        <li><a href="{{ route('subcategories',['slug' => $item->slug]) }}">{{$item->title}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div><!-- End .col-md-6 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .menu-col -->
                                    </div><!-- End .col-md-8 -->

                                    <div class="col-md-4">
                                        <div class="banner banner-overlay">
                                            <a href="#" class="banner banner-menu">
                                                <img src="{{asset('assets/images/menu/banner-1.jpg')}}" alt="Banner">

                                                <div class="banner-content banner-content-top">
                                                    <div class="banner-title text-white">Last
                                                        <br>Chance<br><span><strong>Sale</strong></span></div>
                                                    <!-- End .banner-title -->
                                                </div><!-- End .banner-content -->
                                            </a>
                                        </div><!-- End .banner banner-overlay -->
                                    </div><!-- End .col-md-4 -->
                                </div><!-- End .row -->
                            </div><!-- End .megamenu megamenu-md -->
                        </li>
                        <li>
                            <a href="{{route('services')}}" class="sf-with-ul">Услуги</a>

                            <div class="megamenu megamenu-sm">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="menu-col">
                                            <div class="menu-title">Услуги</div><!-- End .menu-title -->
                                            <ul>
                                                @foreach($services as $item)

                                                <li><a href="{{route('services-page',['slug' => $item->slug,])}}">{{$item->title}}</a></li>
                                                @endforeach
                                                <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                                            </ul>
                                        </div><!-- End .menu-col -->
                                    </div><!-- End .col-md-6 -->

                                    <div class="col-md-6">
                                        <div class="banner banner-overlay">
                                            <a href="category.html">
                                                <img src="{{asset('assets/images/menu/banner-2.jpg')}}" alt="Banner">

                                                <div class="banner-content banner-content-bottom">
                                                    <div class="banner-title text-white">New
                                                        Trends<br><span><strong>spring 2019</strong></span></div>
                                                    <!-- End .banner-title -->
                                                </div><!-- End .banner-content -->
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .megamenu megamenu-sm -->
                        </li>

                        <li>
                            <a href="{{route('ourwork')}}">Наши работы</a>

                        </li>
                        <li>
                            <a href="{{route('deliver')}}">Доставка</a>

                        </li>

                        <li>
                            <a href="{{route('about')}}">О компании</a>

                        </li>
                        <li>
                            <a href="{{route('contact')}}">Контакты</a>


                        </li>


                    </ul><!-- End .menu -->
                </nav><!-- End .main-nav -->

                <div class="dropdown cart-dropdown">
                    <a href="{{ route('cart') }}" class="dropdown-toggle">
                        <i class="icon-shopping-cart"></i>
                        <span class="cart-count"></span>
                    </a>
                </div><!-- End .cart-dropdown -->


<!--                <div class="dropdown cart-dropdown">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false" data-display="static">
                        <i class="icon-shopping-cart"></i>
                        <span class="cart-count">2</span>

                    </a>
                    @auth

                        <li><a href="#" onclick="logout.submit()">
                                Logout</a></li>


                    @else
                        <li><a href="{{route('login')}}">Login</a>
                        </li>
                        <li><a href="{{route('register')}}">Register</a></li>
                    @endauth
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-cart-products">
                            <div class="product">
                                <div class="product-cart-details">
                                    <h4 class="product-title">
                                        <a href="product.html">Beige knitted elastic runner shoes</a>
                                    </h4>

                                    <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $84.00
                                            </span>
                                </div>&lt;!&ndash; End .product-cart-details &ndash;&gt;

                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="{{asset('assets/images/products/cart/product-1.jpg')}}" alt="product">
                                    </a>
                                </figure>
                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                            </div>&lt;!&ndash; End .product &ndash;&gt;

                            <div class="product">
                                <div class="product-cart-details">
                                    <h4 class="product-title">
                                        <a href="product.html">Blue utility pinafore denim dress</a>
                                    </h4>

                                    <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $76.00
                                            </span>
                                </div>&lt;!&ndash; End .product-cart-details &ndash;&gt;

                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="{{asset('assets/images/products/cart/product-2.jpg')}}" alt="product">
                                    </a>
                                </figure>
                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                            </div>&lt;!&ndash; End .product &ndash;&gt;
                        </div>&lt;!&ndash; End .cart-product &ndash;&gt;

                        <div class="dropdown-cart-total">
                            <span>Total</span>

                            <span class="cart-total-price">$160.00</span>
                        </div>&lt;!&ndash; End .dropdown-cart-total &ndash;&gt;

                        <div class="dropdown-cart-action">
                            <a href="cart.html" class="btn btn-primary">View Cart</a>
                            <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i
                                    class="icon-long-arrow-right"></i></a>
                        </div>&lt;!&ndash; End .dropdown-cart-total &ndash;&gt;
                    </div>&lt;!&ndash; End .dropdown-menu &ndash;&gt;
                </div>&lt;!&ndash; End .cart-dropdown &ndash;&gt;-->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->
</header><!-- End .header -->
<form method="post" action="{{ route('logout') }}" id="logout">
    @method('POST')
    @csrf
</form>
