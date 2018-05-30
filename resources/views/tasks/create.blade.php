@extends('layouts.app')

@section('content')
    
    
    
  
   <div class="row col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-md-6">
  
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



@endsection