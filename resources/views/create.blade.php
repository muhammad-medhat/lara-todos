@extends('layouts.app')

@section('content')
    <div>
        <h3>create todo</h3>
        <form action="/todos/create" method="POST" class='form-group'>
            @csrf
            <input type="text" class='form-control' name="title" placeholder="title">
            <textarea type="text" rows=5 class='form-control' name="description"
                 placeholder="description">


            </textarea>
            <input type="submit" class='form-control btn btn-block btn-primary' value="create">
        </form>
    </div>
@endsection
