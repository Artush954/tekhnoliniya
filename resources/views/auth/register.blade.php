@extends('app.layouts.app')

@section('title','Register')

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
                                    <a class="nav-link active">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content">

                                <div class="tab-pane fade show active">
                                    <form method="POST"  action="{{route('register')}}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="register-name-2">Name</label>
                                            <input type="text"
                                                   id="name"
                                                   name="name"
                                                   class="form-control  @error('name') is-invalid @enderror"
                                                   value="{{ old('name') }}"
                                                   required>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                            @enderror
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="register-email-2">E-Mail Address</label>
                                            <input type="email"
                                                   id="email"
                                                   name="email"
                                                   class="form-control  @error('name') is-invalid @enderror"
                                                   value="{{ old('email') }}"
                                                   required>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                              </span>
                                            @enderror
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password-2">Password</label>
                                            <input type="password" id="password" name="password"
                                                   class="form-control  @error('password') is-invalid @enderror "
                                                   required>

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="password-confirm"
                                            >Confirm Password</label>


                                            <input  type="password" name="password_confirmation" id="password-confirm"
                                                    class="form-control" required
                                                    autocomplete="new-password"/>

                                        </div>
                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                       id="register-policy-2" required>
                                                <label class="custom-control-label" for="register-policy-2">I agree to the
                                                    <a href="#">privacy policy</a> *</label>
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

@push('scripts')
    <script type="text/javascript" src="{{asset('assets/js/ajax.js')}}"></script>

@endpush

