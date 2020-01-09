@extends('layouts._layout')

@section('page title')
    إنشاء منشور
@stop

@section('content')

    <div class="row">

    {!! Form::open(['method'=>'POST', 'action'=> 'AdminPostsController@store','files'=>true]) !!}


          <div class="form-group">
                 {!! Form::label('title', 'العنوان:') !!}
                 {!! Form::text('title', null, ['class'=>'form-control'])!!}
           </div>


           <div class="form-group">
            {!! Form::label('category_id', 'التصنيف:') !!}
            {!! Form::select('category_id',[''=>'أختر من الخيارات']+$categories,null, ['class'=>'form-control'])!!}
           </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'الصورة:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
            </div>


            <div class="form-group">
                {!! Form::label('content', 'المحتوى:') !!}
                {!! Form::textarea('content', null , ['class'=>'form-control','rows'=>4])!!}
             </div>


             <div class="form-group">
                {!! Form::submit('إنشاء منشور', ['class'=>'btn btn-primary']) !!}
             </div>

           {!! Form::close() !!}
    </div>

    <div class="row">

    @include('includes.error')

    </div>

@stop