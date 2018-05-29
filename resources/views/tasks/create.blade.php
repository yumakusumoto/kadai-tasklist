@extends('layouts.app')

@section('content')
    
    
    
  
   <div class="row">
   <div class="col-xs-12">
   <div class="col-sm-offset-2 col-sm-8">
   <div class="col-md-offset-2 col-md-8">
   <div class="col-lg-offset-3 col-md-6">
       
   <h1>task新規作成ページ</h1>

    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('title', 'task:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}

        {!! Form::label('content', 'status:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
        
        <!--{!! Form::label('status', 'status:') !!}
        {!! Form::text('status', null, ['class' => 'form-control']) !!}-->

        {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
    
    </div>
    </div>
    </div>
    </div>
    </div>



@endsection