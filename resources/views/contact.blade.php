@extends('app.layouts.app')

@section('title','Contact')

@section('content')
    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">Контакты</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Контакты</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad5c6584f096b60007fcd502a611b19f2a151161c2963c692296e32c0b0ff3d4a&amp;source=constructor" width="100%" height="505" frameborder="0"></iframe>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-box text-center">
                            <h3>Офис</h3>

                            <a href="https://yandex.ru/maps/geo/derevnya_masyugino/53062290/?ll=36.568443%2C56.335438&z=16.6"><address> Клинский р-н., <br>д.Масюгино д.44</address></a>
                        </div><!-- End .contact-box -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <div class="contact-box text-center">
                            <h3>Начать разговор</h3>

                            <div><a href="mailto:#">texnolinya@mail.ru</a></div>
                            <div><a href="tel:#">+7 495 201-15-35</a>,<br> <a href="tel:#">+7 963 771-45-74</a></div>
                        </div><!-- End .contact-box -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <div class="contact-box text-center">
                            <h3>Время работы:</h3>

                            <address> Пн, Вт, Ср, Чт, Пт, Сб, Вс 08:30 - 20:00</address>
                        </div><!-- End .contact-box -->
                    </div><!-- End .col-md-4 -->
                </div><!-- End .row -->

                <hr class="mt-3 mb-5 mt-md-1">
                <div class="touch-container row justify-content-center">
                    <div class="col-md-9 col-lg-7">
                        <div class="text-center">
                            <h2 class="title mb-1">Обратная связь</h2><!-- End .title mb-2 -->
                            <p class="lead text-primary">
                                Сотрудничаем с амбициозной компанией и людьми; мы хотели бы вместе создать что-то великое.
                            </p><!-- End .lead text-primary -->
                        </div><!-- End .text-center -->

                        <form action="{{route('contact_Mesages')}}" method="post" class="contact-form mb-2">
                            @csrf
                            <div class="row">
                                    <div class="col-sm-4">
                                        <label for="cname" class="sr-only">Name</label>
                                        <input type="text" name="name" class="form-control" id="cname"
                                               placeholder="Имя *" required>
                                    </div><!-- End .col-sm-4 -->
                                    @error('name')
                                    {{$message}}
                                    @enderror

                                    <div class="col-sm-4">
                                        <label for="cemail" class="sr-only">Email</label>
                                        <input type="email" name="email" autocomplete="email" class="form-control"
                                               id="cemail" placeholder="Email *" required>
                                    </div><!-- End .col-sm-4 -->
                                    @error('email')
                                    {{$message}}
                                    @enderror
                                    <div class="col-sm-4">
                                        <label for="cphone" class="sr-only">Phone</label>
                                        <input type="tel" name="number" class="form-control" id="cphone"
                                               placeholder="Телефон">
                                    </div><!-- End .col-sm-4 -->
                                    @error('number')
                                    {{$message}}
                                    @enderror
                                </div><!-- End .row -->

                                <label for="csubject" class="sr-only">Subject</label>
                                <input type="text" name="subject" class="form-control" id="csubject"
                                       placeholder="Предмет">
                                @error('subject')
                                {{$message}}
                                @enderror
                                <label for="description" class="sr-only">Message</label>
                                <textarea class="form-control"
                                          name="description" cols="30" rows="4" id="description" required
                                          placeholder="Сообщения "></textarea>
                                @error('description')
                                {{$message}}
                                @enderror
                            <div class="text-center">
                                <button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                                    <span>SUBMIT</span>
                                    <i class="icon-long-arrow-right"></i>
                                </button>
                            </div><!-- End .text-center -->
                        </form><!-- End .contact-form -->
                    </div><!-- End .col-md-9 col-lg-7 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->

@endsection
