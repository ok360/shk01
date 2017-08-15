@extends('layout.master')

@section('body')
<h1>Image Upload</h1>
<form action="{{url ('image')}}" method="post" enctype="multipart/form-data">
    {{csrf_field ()}}
    <input type="file" name="image">
    <input type="submit">
</form>

    @foreach($images as $image)
        <img src="{{asset ('images/'.$image->name)}}" alt="image">
    @endforeach

    @endsection