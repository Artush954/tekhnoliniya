@extends('adminlte::page')

@section('title', 'продукт')

@section('content_header')
    <h1>продукт</h1>
@stop

@section('content')
    @include('admin.product.form')
@stop
