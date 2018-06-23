@extends('layout') 
@section('content')
<form action="/task/{{$task->id}}/update" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
      <label for="">Title</label>
    <input type="text" class="form-control" name="title" value={{$task->title}}>
    </div>
    <div class="form-group">
      <label for="">Body</label>
      <textarea type="text" class="form-control" name="body" rows="5s">{{$task->body}}</textarea>
    </div>
    <input type="submit" value="Submit">
</form>
@endsection