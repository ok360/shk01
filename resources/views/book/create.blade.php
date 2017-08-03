@extends('layout.master')

@section('body')
<h1>Add Book</h1>
{!! Form::open(['url'=>'book','method'=>'post']) !!}

   Title: <input type="text" name="title">
    Author: <input type="text" name="author">
    <input type="submit">

{!! Form::close() !!}

@if($errors->any())
   <div class="alert alert-danger col-md-6">
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
        @endforeach
</ul>
   </div>


@endif

@endsection