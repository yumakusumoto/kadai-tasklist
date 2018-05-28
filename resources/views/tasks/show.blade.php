@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のtask詳細ページ</h1>

    <p>タイトル: {{ $task->title }}</p>
    <p>task: {{ $task->content }}</p>

    {!! link_to_route('tasks.edit', 'このメッセージ編集', ['id' => $task->id]) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection