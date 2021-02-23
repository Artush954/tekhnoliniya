@extends('app.layouts.app')

@section('title','Доставка')

@section('content')
    <main class="main">
        <div class="page-header text-center"
             style="background-image: url('{{asset('assets/images/page-header-bg.jpg')}}')">
            <div class="container">
                <h1 class="page-title">Доставка</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About us</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="about-text text-center mt-3">
                            <h2 class="title text-center mb-2">Доставка</h2><!-- End .title text-center mb-2 -->
                            <p>Доставка:

                                Доставка тротуарной плитки производится по Клину, Солнечногорску, Зеленограду,
                                Высоковску, Конаково, Твери и в другие города Подмосковья.

                                Доставка тротуарной плитки может производится с помощью автомобилей: ГАЗель,
                                Манипулятор-вездеход, Фура-длиномер.

                                Стоимость доставки рассчитывается индивидуально по каждому заказу.

                                Уточнить стоимость доставки вы можете по т.+7 495 201-15-35, +7 963 771-45-74

                                Погрузка тротуарной плитки - БЕСПЛАТНО!

                                Оплата:

                                Оплата товаров и услуг может производится:

                                - Наличными,

                                - Банковскими картами,

                                - Банковским переводом.

                                Предоставляются скидка 10% для пенсионеров.

                                При покупке тротуарной плитки от 100 м2 - скидка 10%!</p>

                            <img src="{{asset('assets/images/about/about-2/signature.png')}}" alt="signature"
                                 class="mx-auto mb-5">

                            <img src="{{asset('assets/images/about/about-2/a1.png')}}" alt="image" class="mx-auto mb-6">
                        </div><!-- End .about-text -->
                    </div><!-- End .col-lg-10 offset-1 -->
                </div><!-- End .row -->
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="icon-box icon-box-sm text-center">
                                <span class="icon-box-icon">
                                    <i class="icon-puzzle-piece"></i>
                                </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Гарантированное качество</h3><!-- End .icon-box-title -->
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-4 col-sm-6 -->

                    <div class="col-lg-4 col-sm-6">
                        <div class="icon-box icon-box-sm text-center">
                                <span class="icon-box-icon">
                                    <i class="icon-life-ring"></i>
                                </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Профессиональная поддержка:</h3><!-- End .icon-box-title -->
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-4 col-sm-6 -->

                    <div class="col-lg-4 col-sm-6">
                        <div class="icon-box icon-box-sm text-center">
                                <span class="icon-box-icon">
                                    <i class="icon-heart-o"></i>
                                </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Низкие цены</h3><!-- End .icon-box-title -->
                                {{--                                <p>Pellentesque a diam sit amet mi ullamcorper <br>vehicula. Nullam quis massa sit amet <br>nibh viverra malesuada.</p>--}}
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-4 col-sm-6 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-2"></div><!-- End .mb-2 -->

            <div class="bg-image bg-overlay pt-5 pb-4"
                 style="background-image: url(assets/images/backgrounds/bg-5.jpg)">
                <div class="container">
                    <h2 class="title text-center text-white mb-3">Доставка</h2><!-- End .title text-center -->

                    <div class="owl-carousel owl-theme owl-testimonials owl-light" data-toggle="owl"
                         data-owl-options='{
                            "nav": false,
                            "dots": true,
                            "margin": 20,
                            "loop": true,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "768": {
                                    "items":2
                                },
                                "992": {
                                    "items":2
                                },
                                "1200": {
                                    "items":3,
                                    "nav": true
                                }
                            }
                        }'>
                        <div class="thanks-images">
                            <img src="{{ asset('assets/images/backgrounds/g1.png') }}" style="width:100%;" alt="">
                        </div>
                        <div class="thanks-images">
                            <img src="{{ asset('assets/images/backgrounds/g2.png') }}" style="width:100%;" alt="">
                        </div>
                        <div class="thanks-images">
                            <img src="{{ asset('assets/images/backgrounds/g3.png') }}" style="width:100%;" alt="">
                        </div>


                    </div><!-- End .testimonials-slider owl-carousel -->
                </div><!-- End .container -->
            </div><!-- End .bg-image pt-6 pb-6 -->
            <!-- Flickity HTML init -->


        </div><!-- End .page-content -->
    </main><!-- End .main -->


@endsection
