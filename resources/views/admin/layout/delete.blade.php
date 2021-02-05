@extends('adminlte::page')

@section('title', 'Подтверждение удаления')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Подтверждение удаления</h3>
                </div>
                <div class="card-body">
                    Вы действительно хотите удалить выбранный элемент?
                </div>
                <div class="card-footer">
                    <div class="box-footer clearfix">
                        <form method="POST" action="{{ route('admin.'.$page.'.destroy',[$page=>$id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Да, удалить</button>
                            или
                            <a class="btn btn-success" href="{{ route('admin.'.$page.'.edit',[$page=>$id]) }}">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                Редактировать</a>
                        </form>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@stop


