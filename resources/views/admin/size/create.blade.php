@extends('adminlte::page')

@section('title', 'Размер')

@section('content_header')
    <h1>Размер</h1>
@stop

@section('content')
    @include('admin.size.form')
@stop
