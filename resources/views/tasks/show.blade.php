@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->


     <h1>id = {{ $task->id }} のメッセージ詳細ページ</h1>

    <p>{{ $task->content }}</p>

    {!! link_to_route('tasks.edit', 'このtask編集', ['id' => $task->id]) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}
    
@endsection