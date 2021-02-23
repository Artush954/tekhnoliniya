@extends('adminlte::page')

@section('title', 'Каталог')

@section('content_header')
    <h1>Каталог</h1>
@stop

@section('content')
    @include('admin.categorys.form')
@stop
