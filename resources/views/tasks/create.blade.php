@extends('layouts.app')

@section('content')

    <h1>メッセージ新規作成ページ</h1>
    <div class="row">
        <div class="col-sm-offset-2 col-sm-4 col-lg-offset-3 col-lg-3">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
                <div class="form-group">
                        <div>{!! Form::label('status', 'ステータス:') !!}</div>
                        <div>{!! Form::text('status', null, ['class' => 'form-control']) !!}</div>
                </div>
                <div class="form-group">
                    <div>{!! Form::label('content', 'メッセージ:') !!}</div>
                    <div>{!! Form::text('content', null, ['class' => 'form-control']) !!}</div>
                </div>
                <div>{!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}</div>
            
            {!! Form::close() !!}
        </div>    
    </div>
@endsection