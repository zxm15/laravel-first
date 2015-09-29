@extends('blog')
@section('content')
    <h1>List of Articles</h1>
    {{--<ul>--}}
        {{--@foreach ($articles as $article)--}}
            {{--<li><a href="http://gavin.dev/article/{{$article['id']}}">{{$article['title']}}</a></li>--}}
        {{--@endforeach--}}
    {{--</ul>--}}
    @foreach ($articles as $article)

        {{--<h2 style="color:red"><a href="/articles/{{$article['id']}}">{{$article->title}}</a></h2>--}}
        <h2 style="color:red"><a href="{{url('/articles', $article->id)}}">{{$article->title}}</a></h2>
        <h3 style="color:green">{{$article->body}}</h3>
    @endforeach
@endsection
