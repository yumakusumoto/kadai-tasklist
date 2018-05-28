@extends('layouts.app')

@section('content')


    <h1>tasklist</h1>

    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
            <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->content }}</li>
            @endforeach
        </ul>
    @endif
<!-- ここにページ毎のコンテンツを書く -->

 {!! link_to_route('tasks.create', 'taskの投稿') !!}

@endsection