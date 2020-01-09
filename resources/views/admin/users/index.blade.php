@extends("layouts._layout")
@section('page title')
    <h1>المستخدمين</h1>
@stop

@section('content')
    @if(Session::has('delete_user'))
        <p class="bg bg-danger">{{session('delete_user')}}</p>
    @endif
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>الصورة</th>
            <th>الاسم الكامل</th>
            <th>البريد الالكتروني</th>
            <th>الحالة</th>
            <th>الملكية</th>
            <th>وقت الانشاء</th>
            <th>وقت التعديل</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td><img height="50" src="{{$user->photo ?$user->photo->file:'http://placehold.it/400x400'}}" alt=""></td>
                <td><a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->is_active ==1?'فعال':'غير فعال'}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
            </tr>

        @endforeach
        </tbody>
    </table>

@stop