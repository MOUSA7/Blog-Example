@extends('layouts._layout')
@section('page title')
    إنشاء مستخدم
    @stop

@section('content')

    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}

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
        {!! Form::select('is_active',array(1=>'فعال',0=>'غير فعال'),0,['class'=>'form-control']) !!}
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
        {!! Form::submit('إنشاء مستخدم',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    @include('includes.error')

    @stop