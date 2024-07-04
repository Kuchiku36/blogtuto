@extends('layouts.blog')

@section('content')
    @foreach ($posts as $post)
<a href="{{route('show',$post)}}"><img src="{{$post->image}}" alt=""></a>
    {{$post->title}} <br>
    @endforeach

    
@endsection
