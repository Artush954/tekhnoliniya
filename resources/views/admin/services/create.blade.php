@extends('adminlte::page')

@section('title', 'Услуги')

@section('content_header')
    <h1>Услуги</h1>
@stop

@section('content')
    @include('admin.services.form')
@stop
