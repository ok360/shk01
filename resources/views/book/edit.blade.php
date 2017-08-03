@extends('layout.master')

@section('body')
    <h1>Edit Book</h1>
    {!! Form::open(['url'=>['book',$book->id],'method'=>'put']) !!}

    Title: <input type="text" name="title" value="{{$book->title}}">
    Author: <input type="text" name="author" value="{{$book->author}}">
    <input type="submit">

    {!! Form::close() !!}

@endsection


