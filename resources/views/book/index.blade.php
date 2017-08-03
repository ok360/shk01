@extends('layout.master')

@section('body')
<div class="panel panel-success">
    <div class="panel-heading">
        <div class="panel-title">
            <h1>Books Record</h1>
        </div>
    </div>
        <div class="panel-body">

            @if(session ('message'))
                <div class="alert alert-warning col-md-6 col-md-offset-2">
                    {{session ('message')}}
                </div>
            @endif

            <a href="{{url('book/create')}}" class="btn btn-info">Create Book</a>
                @if(session('success'))
                    <div class="alert alert-success">
                        <h5>{{session('success')}}</h5>
                    </div>
                @endif
            <table class="table table-bordered">
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Action</th>
                </tr>

                @foreach($books as $book)
                <tr>
                    <td>{{$book->title}}</td>
                    <td>{{$book->author}}</td>
                    <td>

                        {!! Form::open(['url'=>['book',$book->id],'method'=>'delete']) !!}
                        {!! Form::submit('delete') !!}
                        <a href="{{url ('book/'.$book->id.'/edit')}}">Edit</a>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection