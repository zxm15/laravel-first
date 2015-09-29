@extends('blog')

@section('content')
    <h1>Write a new article</h1>
    <hr/>
    {!! Form::open(['url' => 'articles']) !!}
        @include('pages/form', ['submitButtonText' => 'Add Article'])
    {!! Form::close() !!}

    @include('errors/error')
@endsection
