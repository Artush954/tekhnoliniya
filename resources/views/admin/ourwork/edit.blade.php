@extends('adminlte::page')

@section('title', 'Наши работы')

@section('content_header')
    <h1>Наши работы</h1>
@stop

@section('content')
    @include('admin.ourwork.form',['result'=>$result,'page'=>'ourwork'])
@stop
