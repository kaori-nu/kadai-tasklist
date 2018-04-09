@extends('layouts.app')

@section('content')

　  <h1>タスク新規作成ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('status', '状態:') !!}
        {!! Form::select('status', ['D' => '完了', 'N' => '未完了']) !!}
        
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection