@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

 

  <h1>id: {{ $task->id }} のtask編集ページ</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('title', 'タイトル:') !!}
        {!! Form::text('title') !!}

        {!! Form::label('content', 'task:') !!}
        {!! Form::text('content') !!}
        
         {!! Form::label('status', 'status:') !!}
        {!! Form::text('status') !!}
        

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}
@endsection