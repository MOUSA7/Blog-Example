@extends('layouts._layout')

@section('page title')
    المنشورات
    @stop

@section('content')
    @if(Session::has('delete_post'))
        <p class="bg bg-danger">{{session('delete_post')}}</p>
        @endif

    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>المستخدم</th>
            <th>الصورة</th>
            <th>التصنيف</th>
            <th>العنوان</th>
            <th>المحتوى</th>
            <th>وقت الانشاء</th>
            <th>وقت التعديل</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td><a href="{{route('admin.posts.edit',$post->id)}}">{{$post->user->name}}</a></td>
                <td><img height="50" src="{{$post->photo ?$post->photo->file:'http://placehold.it/400x400'}}" alt=""></td>
                <td>{{$post->category ? $post->category->name : 'UnCategories'}}</td>
                <td>{{$post->title}}</td>
                <td>{{str_limit($post->content,15)}}</td>
                <td>{{$post->created_at->diffForHumans()}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
            </tr>

        @endforeach
        </tbody>
    </table>

    @stop