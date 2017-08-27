@extends('layout.master')

@section('body')

    <form action="{{url ('login')}}" method="post">
        {{csrf_field ()}}
        Email  <input type="text" name="email"><br>
        Password <input type="password" name="password"><br>

        <input type="submit" value="Login">
    </form>



@endsection