@extends('layout.master')

@section('body')
<h1>Image Upload</h1>
<form action="{{url ('image')}}" method="post" enctype="multipart/form-data">
    {{csrf_field ()}}
    <input type="file" name="image">
    <input type="submit">
</form>
<table class="table table-bordered">
    <tr>
        <td>Images</td>
        <td>Action</td>
    </tr>
    @foreach($images as $image)



    <tr>
        <td> <img src="{{asset ('images/'.$image->name)}}" alt="image" style="height: 200px;width: 200px"></td>
        <td>
            {!! Form::open(['url'=>['image/'.$image->id],'method'=>'delete']) !!}
            {!! Form::submit('Delete') !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</table>
    {{$images->links()}}

    @endsection