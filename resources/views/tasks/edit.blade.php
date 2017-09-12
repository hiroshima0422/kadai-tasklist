@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のメッセージ編集ページ</h1>
    <div class="row">
        <div class="col-sm-offset-2 col-sm-4 col-lg-offset-3 col-lg-3">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
                <div class="form-group">
                        <div>{!! Form::label('status', 'ステータス:') !!}</div>
                        <div>{!! Form::text('status', null, ['class' => 'form-control']) !!}</div>
                </div>
                <div class="form-group">
                        <div>{!! Form::label('content', 'メッセージ:') !!}</div>
                        <div>{!! Form::text('content', null, ['class' => 'form-control']) !!}</div>
                </div>
                git remote add origin https://github.com/hiroshima0422/kadai-tasklist-Bootstrap.git<div>{!! Form::submit('更新', ['class' => 'btn btn-default']) !!}</div>
            {!! Form::close() !!}
        </div>    
    </div>
@endsection