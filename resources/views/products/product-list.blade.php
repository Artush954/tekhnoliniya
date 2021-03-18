@extends('app.layouts.app')

@section('title', $subCategory->title)

@section('content')
    <main class="main">
        <div class="page-header text-center"
             style="background-image: url({{asset('assets/images/page-header-bg.jpg')}})">
            <div class="container">
                <h1 class="page-title">{{ $subCategory->title }}</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Главная</a></li>
                    <li class="breadcrumb-item"><a
                            href="{{ route('subcategories',['slug'=> $subCategory->category->slug]) }}">{{ $subCategory->category->title }}</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $subCategory->title }}</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">

                        <div class="products mb-3">
                            <div class="row justify-content-center">
                                @each('parts.products',$products,'products')
                            </div><!-- End .row -->
                        </div><!-- End .products -->

                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                {{ $products->onEachSide(4)->links() }}
                            </ul>
                        </nav>
                    </div><!-- End .col-lg-9 -->
                    <aside class="col-lg-3 order-lg-first">
                        <div class="sidebar sidebar-shop">
                            <div class="widget widget-collapsible">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#subcategory" role="button" aria-expanded="true"
                                       aria-controls="subcategory">
                                        КАТАЛОГ
                                    </a>
                                </h3><!-- End .widget-title -->

                                <div class="collapse show" id="subcategory">
                                    <div class="widget-body">
                                        <div class="filter-items filter-items-count">
                                            @foreach($category as $item)
                                                <div class="filter-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="item-{{ $item->id }}" {{ $item->id == $subCategory->id?'checked':'' }}>
                                                        <label class="custom-control-label"
                                                               for="item-{{ $item->id }}">
                                                            <a href="{{ route('productList',['subCategory' => $item->slug]) }}" style="color: #333">
                                                            {{ $item->title }}</a></label>
                                                    </div><!-- End .custom-checkbox -->
                                                </div><!-- End .filter-item -->
                                            @endforeach

                                        </div><!-- End .filter-items -->
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->

                        </div><!-- End .sidebar sidebar-shop -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection
