@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$post->title}}</h1>
        <p>{{$post->content}}</p>
        <p>Par {{$post->user->name}}</p>
        <hr>
         <h4>Commentaires</h4>

         @foreach ($post->comments as $comment)
             <div class="mb-2">
                <p>
                    {{$comment->content}}
                </p>
                <small>Par {{$comment->user->name}} </small>
             </div>
         @endforeach

    @auth
        <form action="{{route('comments.store',$post->id) }}" method="POST">
        @csrf
        </form>
    @endauth
    </div>
@endsection
