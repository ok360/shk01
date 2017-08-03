@extends('layout.master')

@section('body')

    <h1>Create Student</h1>

    <form action="/store" method="post">
        {{csrf_field ()}}
        Name: <input type="text" name="name"><br>
        Class: <input type="text" name="class"><br>
        <input type="submit">
    </form>

@endsection