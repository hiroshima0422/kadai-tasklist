@extends('layouts.app')

@section('content')

    <h1>メッセージ新規作成ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
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
            <div class="col-sm-offset-2 col-lg-offset-3">{!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}</div>
    </div>

    {!! Form::close() !!}

@endsection