@extends('layouts._layout')
@section('page title')
    تعديل المستخدم
@stop

@section('content')
    <div class="row">
    <div class="col-sm-3">
        <img  src="{{$user->photo ?$user->photo->file :'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">
    </div>

    <div class="col-sm-9">

        {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('name','الاسم:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','البريد الالكتروني:') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('is_active','الحالة:') !!}
        {!! Form::select('is_active',array(1=>'فعال',0=>'غير فعال'),null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id','الملكية:') !!}
        {!! Form::select('role_id',[''=>'اختر من الخيارات']+$roles,null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id','رفع صورة:') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password','كلمة المرور:') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('تعديل مستخدم',['class'=>'btn btn-primary col-sm-6']) !!}
    </div>

    {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy',$user->id]]) !!}
        <div class="form-group">
            {!! Form::submit('حذف المستخدم',['class'=>'btn btn-danger col-sm-6']) !!}
        </div>

        {!! Form::close() !!}

    </div>
    </div>
    <div class="row">
    @include('includes.error')
    </div>
@stop