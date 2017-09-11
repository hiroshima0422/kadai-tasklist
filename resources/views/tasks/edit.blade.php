@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のメッセージ編集ページ</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        <div class="form-group">
            <div class="row">
                <div class="col-sm-offset-2 col-sm-4 col-lg-offset-3 col-lg-3">{!! Form::label('status', 'ステータス:') !!}</div>
                <div class="col-sm-4 col-lg-3">{!! Form::text('status', null, ['class' => 'form-control']) !!}</div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-offset-2 col-sm-4 col-lg-offset-3 col-lg-3">{!! Form::label('content', 'メッセージ:') !!}</div>
                <div class="col-sm-4 col-lg-3">{!! Form::text('content', null, ['class' => 'form-control']) !!}</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-offset-2 col-lg-offset-3">{!! Form::submit('更新', ['class' => 'btn btn-default']) !!}</div>
        </div>
    {!! Form::close() !!}
@endsection