@extends('adminlte::page')

@section('title', 'БЛАГОДАРНОСТИ')

@section('content_header')
    <h1>БЛАГОДАРНОСТИ</h1>
@stop

@section('content')
    @include('admin.thanks.form',['result'=>$result,'page'=>'thank'])
@stop
