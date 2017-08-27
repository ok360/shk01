@extends('layout.master')

@section('body')

    <form action="{{url ('register')}}" method="post">
        {{csrf_field ()}}
       First Name <input type="text" name="first_name"><br>
        last Name <input type="text" name="last_name"><br>
      Email  <input type="text" name="email"><br>
       Password <input type="password" name="password"><br>
      confirm Password  <input type="password" name="confirm_password"><br>
        <input type="submit" value="Singup">
    </form>



@endsection