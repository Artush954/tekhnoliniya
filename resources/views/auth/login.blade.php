@extends('app.layouts.app')

@section('title',trans('Login'))

@section('content')
    <div class="page-wrapper">
        <main class="main">
            <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17"
                 style="background-image: url('{{ asset('assets/images/backgrounds/login.jpg') }}')">
                <div class="container">
                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active">Вход</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active">
                                    <form action="{{route('login')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="email">E-почта</label>
                                            <input type="text"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   id="email"
                                                   name="email"
                                                   required>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password-2">Пароль</label>
                                            <input id="password"
                                                   type="password"
                                                   name="password"
                                                   class="form-control @error('password') is-invalid @enderror"
                                                   required>
                                            @error('password')--}}
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>Вход</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="remember"
                                                       id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="custom-control-label"
                                                       for="signin-remember-2">Запомнить мне</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .container -->
            </div><!-- End .login-page section-bg -->
        </main><!-- End .main -->
    </div>
@endsection
