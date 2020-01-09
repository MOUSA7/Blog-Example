@extends('layouts._layout')

@section('page title')
    تعديل المنشور
@stop

@section('content')
    <div class="row">
        <div class="col-sm-3">
            <img src="{{$post->photo ?$post->photo->file : 'Not Found img'}}" class="img-responsive" alt="">
        </div>
        <div class="col-sm-9">
        {!! Form::model($post,['method'=>'PATCH', 'action'=> ['AdminPostsController@update',$post->id],'files'=>true]) !!}


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
            {!! Form::submit('تعديل المنشور', ['class'=>'btn btn-primary col-sm-6']) !!}
        </div>

        {!! Form::close() !!}


        {!! Form::open(['method'=>'DELETE','action'=>['AdminPostsController@destroy',$post->id]]) !!}

        {!! Form::submit('حذف المنشور',['class'=>'btn btn-danger col-sm-6']) !!}

        {!! Form::close() !!}

        </div>
    </div>

    <div class="row">

        @include('includes.error')

    </div>

@stop