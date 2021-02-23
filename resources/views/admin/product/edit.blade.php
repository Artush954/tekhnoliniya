@extends('adminlte::page')

@section('title', 'продукт')

@section('content_header')
    <h1>Продукт</h1>
@stop

@section('content')
    @include('admin.product.form',['result'=>$result,'page'=>'product'])
@stop
