@extends('layouts.app')

@section('content')
    
    
    
    <h1>task新規作成ページ</h1>


    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('title', 'タイトル:') !!}
        {!! Form::text('title') !!}

        {!! Form::label('content', 'task:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', 'status:') !!}
        {!! Form::text('status') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}



@endsection