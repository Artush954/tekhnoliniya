@extends('adminlte::page')

@section('title', 'О компании')

@section('content_header')
    <h1>О компании</h1>
@stop

@section('content')
    @include('admin.about.form')
@stop
