@extends('layouts.app')

@section('content')

  <div class="row col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-md-6">
  

    <h1>id = {{ $task->id }} のtask詳細ページ</h1>


    <p>
        <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        
        <tr>
            <th>task</th>
            <td>{{ $task->content }}</td>
        </tr>
        
        <tr>
            <th>status</th>
            <td>{{ $task->status }}</td>
        </tr>
        
        
        
        
    </table>
    </p>

   

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    
    {!! link_to_route('tasks.edit', 'このtaskを編集', ['id' => $task->id], ['class' => 'btn btn-default']) !!}

    </div>
    
    
@endsection