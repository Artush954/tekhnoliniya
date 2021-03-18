@extends('app.layouts.app')

@section('title','Cart')

@section('content')
    <main class="main">
        <div class="page-header text-center"
             style="background-image: url({{asset('assets/images/page-header-bg.jpg')}})">
            <div class="container">
                <h1 class="page-title">Shopping Cart<span>Shop</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="cart">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <table class="table table-cart table-mobile">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody class="cart-content"></tbody>
                            </table><!-- End .table table-wishlist -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="name">Имя</label>
                                            <input type="text" id="name" class="form-control name" required>
                                        </div><!-- End .col-sm-6 -->

                                        <div class="col-sm-6">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" class="form-control email" required>
                                        </div><!-- End .col-sm-6 -->
                                    </div><!-- End .row -->
                                    <label for="desc">Комментарий</label>
                                    <textarea class="form-control description" id="desc" cols="30" rows="4"></textarea>
                                </div><!-- End .col-lg-9 -->
                                <table class="table table-summary">

                                    <tbody>
                                    <tr class="summary-total">
                                        <td>Итого:</td>
                                        <td class="totalCount"></td>
                                    </tr><!-- End .summary-total -->
                                    </tbody>
                                </table><!-- End .table table-summary -->
                                <button class="btn btn-outline-primary-2 btn-order btn-block addOrder">
                                    <span class="btn-text">Оформить заказ</span>
                                    <span class="btn-hover-text">Оформить заказ</span>
                                </button>
                            </div><!-- End .row -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- End .main -->

@endsection
