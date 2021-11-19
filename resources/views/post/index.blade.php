@extends('layouts.app')

@section('title','Post page')

    @section('content')
    <h3>Welcome to posts page</h3>
    
    @foreach($posts as $post)
        {{$post->title}} <br>
    @endforeach



    @forelse($posts as $post)
        {{$post->title}} <br>
        @empty
        <h5>No Post</h5>
    @endforelse



 @endsection