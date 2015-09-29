
@extends('blog')

@section('content')
    <h1>edit : {{ $article->title }}</h1>
    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
    @include('pages/form', ['submitButtonText' => 'Update Article'])
    {!! Form::close() !!}

    @include('errors/error')
@endsection


