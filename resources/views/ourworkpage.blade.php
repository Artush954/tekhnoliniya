@extends('app.layouts.app')

@section('title','Category')

@section('content')

    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">Portfolio<span>Elements</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="elements-list.html">Elements</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container">
                <h2 class="title text-center mb-2">Grid 3 Columns</h2><!-- End .title text-center mb-2 -->
                <nav class="portfolio-nav">
                    <ul class="nav-filter portfolio-filter justify-content-center">
                        <li class="active"><a href="#" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".women">Women</a></li>
                        <li><a href="#" data-filter=".men">Men</a></li>
                        <li><a href="#" data-filter=".accessories">Accessories</a></li>
                    </ul>
                </nav><!-- End .portfolio-nav -->

                <div class="portfolio-container" data-layout="fitRows">
                    <div class="portfolio-item accessories women col-sm-6 col-lg-4">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/item-1.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Accessories</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item men col-sm-6 col-lg-4">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/item-2.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Men</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item women accessories col-sm-6 col-lg-4">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/item-3.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Women</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item men col-sm-6 col-lg-4">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/item-4.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Accessories</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item men women col-sm-6 col-lg-4">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/item-5.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Women</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item men accessories col-sm-6 col-lg-4">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/item-6.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Men</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->
                </div><!-- End .portfolio-container -->

                <hr class="mb-4">

                <h2 class="title text-center mb-2">Grid 4 Columns</h2><!-- End .title text-center mb-2 -->
                <nav class="portfolio-nav">
                    <ul class="nav-filter portfolio-filter justify-content-center">
                        <li class="active"><a href="#" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".women">Women</a></li>
                        <li><a href="#" data-filter=".men">Men</a></li>
                        <li><a href="#" data-filter=".accessories">Accessories</a></li>
                    </ul>
                </nav><!-- End .portfolio-nav -->

                <div class="portfolio-container" data-layout="fitRows" id="portfolio-2">
                    <div class="portfolio-item accessories women col-sm-6 col-md-4 col-lg-3">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/4cols/item-1.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Accessories</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item men col-sm-6 col-md-4 col-lg-3">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/4cols/item-2.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Men</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item women accessories col-sm-6 col-md-4 col-lg-3">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/4cols/item-3.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Women</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item men col-sm-6 col-md-4 col-lg-3">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/4cols/item-4.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Accessories</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item men women col-sm-6 col-md-4 col-lg-3">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/4cols/item-5.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Women</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item men accessories col-sm-6 col-md-4 col-lg-3">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/4cols/item-6.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Men</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item men col-sm-6 col-md-4 col-lg-3">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/4cols/item-7.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Men</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item women accessories col-sm-6 col-md-4 col-lg-3">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/4cols/item-8.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Women</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->
                </div><!-- End .portfolio-container -->

                <hr class="mb-4">

                <h2 class="title text-center mb-2">Masonry 3 Columns</h2><!-- End .title text-center mb-2 -->
                <nav class="portfolio-nav">
                    <ul class="nav-filter portfolio-filter justify-content-center">
                        <li class="active"><a href="#" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".women">Women</a></li>
                        <li><a href="#" data-filter=".men">Men</a></li>
                        <li><a href="#" data-filter=".accessories">Accessories</a></li>
                    </ul>
                </nav><!-- End .portfolio-nav -->

                <div class="portfolio-container">
                    <div class="portfolio-item accessories women col-sm-6 col-lg-4">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/masonry-3cols/item-1.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content portfolio-content-center">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Accessories</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item men col-sm-6 col-lg-4">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/masonry-3cols/item-2.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content portfolio-content-center">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Men</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item women accessories col-sm-6 col-lg-4">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/masonry-3cols/item-3.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content portfolio-content-center">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Women</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item men col-sm-6 col-lg-4">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/masonry-3cols/item-4.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content portfolio-content-center">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Accessories</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item men women col-sm-6 col-lg-4">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/masonry-3cols/item-5.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content portfolio-content-center">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Women</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item men accessories col-sm-6 col-lg-4">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/masonry-3cols/item-6.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content portfolio-content-center">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Men</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->
                </div><!-- End .portfolio-container -->

                <hr class="mb-4">

                <h2 class="title text-center mb-2">Masonry 4 Columns</h2><!-- End .title text-center mb-2 -->
                <nav class="portfolio-nav">
                    <ul class="nav-filter portfolio-filter justify-content-center">
                        <li class="active"><a href="#" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".women">Women</a></li>
                        <li><a href="#" data-filter=".men">Men</a></li>
                        <li><a href="#" data-filter=".accessories">Accessories</a></li>
                    </ul>
                </nav><!-- End .portfolio-nav -->

                <div class="portfolio-container">
                    <div class="portfolio-item accessories women col-sm-6 col-md-4 col-lg-3">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/masonry-4cols/item-1.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content portfolio-content-center">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Accessories</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item men col-sm-6 col-md-4 col-lg-3">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/masonry-4cols/item-2.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content portfolio-content-center">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Men</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item women accessories col-sm-6 col-md-4 col-lg-3">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/masonry-4cols/item-3.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content portfolio-content-center">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Women</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item men col-sm-6 col-md-4 col-lg-3">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/masonry-4cols/item-4.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content portfolio-content-center">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Accessories</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item men women col-sm-6 col-md-4 col-lg-3">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/masonry-4cols/item-5.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content portfolio-content-center">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Women</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item men accessories col-sm-6 col-md-4 col-lg-3">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/masonry-4cols/item-6.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content portfolio-content-center">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Men</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item men col-sm-6 col-md-4 col-lg-3">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/masonry-4cols/item-7.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content portfolio-content-center">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Men</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item women accessories col-sm-6 col-md-4 col-lg-3">
                        <div class="portfolio portfolio-overlay">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/masonry-4cols/item-8.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content portfolio-content-center">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Women</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio portfolio-overlay -->
                    </div><!-- End .portfolio-item -->
                </div><!-- End .portfolio-container -->

                <hr class="mb-4">
            </div><!-- End .container -->

            <div class="container-fluid">
                <h2 class="title text-center mb-2">Fullwidth with Text <span class="title-separator">(No space)</span></h2><!-- End .title text-center mb-2 -->
                <nav class="portfolio-nav">
                    <ul class="nav-filter portfolio-filter justify-content-center">
                        <li class="active"><a href="#" data-filter="*">All</a></li>
                        <li><a href="#" data-filter=".women">Women</a></li>
                        <li><a href="#" data-filter=".men">Men</a></li>
                        <li><a href="#" data-filter=".accessories">Accessories</a></li>
                    </ul>
                </nav><!-- End .portfolio-nav -->

                <div class="portfolio-container portfolio-nogap" data-layout="fitRows">
                    <div class="portfolio-item accessories women col-sm-6 col-md-4 col-lg-3">
                        <div class="portfolio">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/fullwidth/item-1.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Accessories</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item accessories col-sm-6 col-md-4 col-lg-3">
                        <div class="portfolio">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/fullwidth/item-2.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content">
                                <h3 class="portfolio-title"><a href="#">Nunc dignissim risus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Accessories</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item men accessories col-sm-6 col-md-4 col-lg-3">
                        <div class="portfolio">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/fullwidth/item-3.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content">
                                <h3 class="portfolio-title"><a href="#">Cras ornare tristique</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Men</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item men col-sm-6 col-md-4 col-lg-3">
                        <div class="portfolio">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/fullwidth/item-4.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content">
                                <h3 class="portfolio-title"><a href="#">Vivamus vestibulum ntulla</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Men</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item men women col-sm-6 col-md-4 col-lg-3">
                        <div class="portfolio">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/fullwidth/item-5.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content">
                                <h3 class="portfolio-title"><a href="#">Vestibulum auctor dapibus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Women</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item men accessories col-sm-6 col-md-4 col-lg-3">
                        <div class="portfolio">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/fullwidth/item-6.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content">
                                <h3 class="portfolio-title"><a href="#">Nunc dignissim risus</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Accessories</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item women accessories col-sm-6 col-md-4 col-lg-3">
                        <div class="portfolio">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/fullwidth/item-7.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content">
                                <h3 class="portfolio-title"><a href="#">Cras ornare tristique</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Women</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio -->
                    </div><!-- End .portfolio-item -->

                    <div class="portfolio-item men accessories col-sm-6 col-md-4 col-lg-3">
                        <div class="portfolio">
                            <figure class="portfolio-media">
                                <a href="#">
                                    <img src="assets/images/portfolio/fullwidth/item-8.jpg" alt="item">
                                </a>
                            </figure>
                            <div class="portfolio-content">
                                <h3 class="portfolio-title"><a href="#">Vivamus vestibulum ntulla</a></h3><!-- End .portfolio-title -->
                                <div class="portfolio-tags">
                                    <a href="#">Accessories</a>
                                </div><!-- End .portfolio-tags -->
                            </div><!-- End .portfolio-content -->
                        </div><!-- End .portfolio -->
                    </div><!-- End .portfolio-item -->
                </div><!-- End .portfolio-container -->
            </div><!-- End .container-fluid -->
        </div><!-- End .page-content -->

        <!-- Elements list -->

    </main><!-- End .main -->
@endsection
