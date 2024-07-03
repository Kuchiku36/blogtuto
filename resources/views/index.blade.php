@extends('layouts.blog')

@section('content')
    @foreach ($posts as $post)
<img src="{{$post->image}}" alt="">
    {{$post->title}} <br>
    @endforeach

    
@endsection
