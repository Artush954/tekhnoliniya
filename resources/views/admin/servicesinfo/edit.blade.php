@extends('adminlte::page')

@section('title', 'Услуги-инфо')

@section('content_header')
    <h1>Услуги-инфо</h1>
@stop

@section('content')
    @include('admin.servicesInfo.form',['result'=>$result,'page'=>'servicesInfo'])
@stop
