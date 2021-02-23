@extends('adminlte::page')

@section('title', 'Слидер')

@section('content_header')
    <h1>Слидер</h1>
@stop

@section('content')
    @include('admin.thanks.form',['result'=>$result,'page'=>'slider'])
@stop
