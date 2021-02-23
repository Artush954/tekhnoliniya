@extends('adminlte::page')

@section('title', 'суб_КАТАЛОГ')

@section('content_header')
    <h1>суб_КАТАЛОГ</h1>
@stop

@section('content')
    @include('admin.subcategory.form',['result'=>$result,'page'=>'service'])
@stop
