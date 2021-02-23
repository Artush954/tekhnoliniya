@extends('adminlte::page')

@section('title', 'суб_КАТАЛОГ')

@section('content_header')
    <h1>суб_КАТАЛОГ</h1>
@stop

@section('content')
    @include('admin.categorys.form',['result'=>$result,'page'=>'category'])
@stop
