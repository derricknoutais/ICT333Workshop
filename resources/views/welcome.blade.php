@extends('layout')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Completed</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $todo)
                <tr>
                    <td scope="row"><a href="/task/{{$todo->id}}">{{$todo->title}}</a></td>
                    <td>{{$todo->completed? 'Completed':'To-Do'}}</td>
                    <td><a href="/task/{{$todo->id}}/edit">Edit</a></td>
                    <td>
                        <form action="/task/{{$todo->id}}/delete" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection