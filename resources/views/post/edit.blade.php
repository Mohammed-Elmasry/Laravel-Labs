@extends('layouts.app')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<a href="{{route('posts.index')}}" class="btn btn-danger">Back</a>

   <form action="{{route('posts.update',[$post->id])}}" method="POST">
       @csrf
       @method('PUT')
       <div class="form-group">
           <label for="exampleInputEmail1">Title</label>
           <input name="title" value="{{$post->title}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
       </div>
       <div class="form-group">
           <label for="exampleInputPassword1">Description</label>
           <textarea name="description" value="{{$post->description}}" class="form-control"></textarea>
       </div>

        <div class="form-group">
           <label for="exampleInputPassword1">Post Creator</label>
           <select class="form-control" name="user_id">
               @foreach($users as $user)
                   <option value="{{$user->id}}">{{$user->name}}</option>
               @endforeach
           </select>
       </div>

   <button type="submit" class="btn btn-primary">Submit</button>
   </form>

@endsection
