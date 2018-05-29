@extends('layouts.app')

@section('content')

<div class="row">
   <div class="col-xs-12">
   
   <div class="col-sm-offset-2 col-sm-8">
   <div class="col-md-offset-2 col-md-8">
   <div class="col-lg-offset-3 col-md-6">
      

    <h1>task一覧</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>task</th>
                    <th>status</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->content }}</td>
                       
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
   {!! link_to_route('tasks.create', '新規taskの投稿', null, ['class' => 'btn btn-primary']) !!}
   
   </div>
    </div>
    </div>
    </div>
    </div>
@endsection

 