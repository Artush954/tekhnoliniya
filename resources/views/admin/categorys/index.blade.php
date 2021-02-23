@extends('adminlte::page')

@section('title', 'КАТАЛОГ')

@section('content_header')
    <h1>КАТАЛОГ</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Bordered Table</h3>
                    <div class="float-right">
                        <a href="{{ route('admin.category.create') }}" class="btn btn-primary btn-sm">Добавить Каталог</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Title</th>
                            <th>Updated Date</th>

                        </tr>
                        </thead>
                        <tbody>
                        @forelse($results as $result)
                            <tr>
                                <td>{{ $result->id }}</td>
                                <td>{{ $result->title }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.category.edit',['category'=>$result->id]) }}"
                                           class="btn btn-sm btn-default edit_link" title="Редактировать">
                                            <i class="fas fa-pencil-alt"></i>
                                            Редактировать
                                        </a>

                                        <a href="{{ route('admin.destroy',['page'=>'category','id'=>$result->id]) }}"
                                           class="btn btn-sm btn-default delete_link" title="Удалить">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                            Удалить
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No results</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@stop
