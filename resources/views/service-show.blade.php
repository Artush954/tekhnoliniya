@extends('app.layouts.app')

@section('title','Category')

@section('content')

    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Fullwidth With Sidebar</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container">
                <figure class="entry-media">
                    <div class="owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl">
                        <img src="{{asset('assets/images/blog/single/fullwidth-sidebar/1.jpg')}}" alt="image desc">
                        <img src="{{asset('assets/images/blog/single/fullwidth-sidebar/2.jpg')}}" alt="image desc">
                        <img src="{{asset('assets/images/blog/single/fullwidth-sidebar/3.jpg')}}" alt="image desc">
                    </div><!-- End .owl-carousel -->
                </figure><!-- End .entry-media -->
                <div class="row">
                    <div class="col-lg-9">
                        <article class="entry single-entry">
                            <div class="entry-body">
                                <div class="entry-content editor-content">

                                    <table cellspacing="5" cellpadding="5"
                                           style="border-color: rgb(91, 54, 47); color: rgb(91, 54, 47); font-family: Open Sans;">
                                        <tbody>
                                        <tr>
                                            <td colspan="1"
                                                style="background-color: rgb(246, 142, 84); text-align: center;">
                                                <span style="font-weight: 600;">Технология</span></td>
                                            <td colspan="1"
                                                style="background-color: rgb(246, 142, 84); text-align: center;">
                                                <span style="font-weight: 600;"></span>
                                                <p style="margin-top: 15px; margin-bottom: 15px;"><span
                                                        style="font-weight: 600;">Стоимость</span></p><span
                                                    style="font-weight: 600;"></span></td>
                                            <td colspan="1" style="background-color: rgb(246, 142, 84);"><span
                                                    style="font-weight: 600;"><p
                                                        style="margin-top: 15px; margin-bottom: 15px; text-align: center;">Что входит &nbsp;</p></span>
                                            </td>
                                        </tr>
                                        @foreach( $services->serviceInfo as $item)

                                            <tr>
                                                <td colspan="3"><p
                                                        style="margin-top: 15px; margin-bottom: 15px; text-align: center;">
                                                        <span style="font-weight: 600;">{{$item->title}}</span>
                                                    </p></td>
                                            </tr>
                                            <tr>
                                                <td><img width="307" alt="ukadka_na-gotovoe_osnovanie-min.png"
                                                         src="{{ asset('images/'.$item->image) }}"
                                                         height="195" title="ukadka_na-gotovoe_osnovanie-min.png"
                                                         style="height: auto; margin: 10px 0px;"><br></td>
                                                <td><p style="margin-top: 15px; margin-bottom: 15px;">{{$item->price}} руб/м<span
                                                            style="position: relative; font-size: 12px; line-height: 0; vertical-align: baseline; top: -0.5em;">2</span>
                                                    </p><span
                                                        style="position: relative; font-size: 12px; line-height: 0; vertical-align: baseline; top: -0.5em;"></span><br>
                                                </td>
                                                <td><br>
                                                    <ul>
                                                        {!!$item->description!!}
                                                    </ul>

                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article>
                    </div><!-- End .col-lg-9 -->

                    <aside class="col-lg-3">
                        <div class="sidebar">

                            <div class="widget widget-cats">
                                <h3 class="widget-title">КАТАЛОГ</h3><!-- End .widget-title -->
                                <ul>
                                    @foreach($catalog as $item)
                                    <li><a href="{{route('category-page',['slug' => $item->slug,'id'=>$item->id])}}">{{$item->title}}</a></li>
                                    @endforeach
                                </ul>
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title">Popular Posts</h3><!-- End .widget-title -->

                                <ul class="posts-list">
                                    <li>
                                        <figure>
                                            <a href="#">
                                                <img src="/assets/images/blog/sidebar/post-1.jpg" alt="post">
                                            </a>
                                        </figure>

                                        <div>
                                            <span>Nov 22, 2018</span>
                                            <h4><a href="#">Aliquam tincidunt mauris eurisus.</a></h4>
                                        </div>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="#">
                                                <img src="/assets/images/blog/sidebar/post-2.jpg" alt="post">
                                            </a>
                                        </figure>

                                        <div>
                                            <span>Nov 19, 2018</span>
                                            <h4><a href="#">Cras ornare tristique elit.</a></h4>
                                        </div>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="#">
                                                <img src="/assets/images/blog/sidebar/post-3.jpg" alt="post">
                                            </a>
                                        </figure>

                                        <div>
                                            <span>Nov 12, 2018</span>
                                            <h4><a href="#">Vivamus vestibulum ntulla nec ante.</a></h4>
                                        </div>
                                    </li>
                                    <li>
                                        <figure>
                                            <a href="#">
                                                <img src="/assets/images/blog/sidebar/post-4.jpg" alt="post">
                                            </a>
                                        </figure>

                                        <div>
                                            <span>Nov 25, 2018</span>
                                            <h4><a href="#">Donec quis dui at dolor tempor interdum.</a></h4>
                                        </div>
                                    </li>
                                </ul><!-- End .posts-list -->
                            </div><!-- End .widget -->


                        </div><!-- End .sidebar sidebar-shop -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->

@endsection
