@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

 

  <h1>id: {{ $task->id }} のtask編集ページ</h1>
  
  <div class="row">
   <div class="col-xs-12">
   
   <div class="col-sm-offset-2 col-sm-8">
   <div class="col-md-offset-2 col-md-8">
   <div class="col-lg-offset-3 col-md-6">
      
      
      

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        <div class="form-group">
            {!! Form::label('title', 'task:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        
        </div>
        
        <div class="form-group">
            {!! Form::label('content', 'status:') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>
        
         
        
       <!-- <div class="form-group">
            {!! Form::label('status', 'status:') !!}
            {!! Form::text('status', null, ['class' => 'form-control']) !!}
        </div> -->
        

        {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}

    {!! Form::close() !!}
    
    
    
     </div>
    </div>
    </div>
    </div>
    </div>
    
@endsection