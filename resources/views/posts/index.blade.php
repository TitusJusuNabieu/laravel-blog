@extends('layouts.app')

@section('content')

<div class="container mx-auto h-screen">
    <h1 class="text-5xl text-center mt-8 mb-8">Posts</h1>

    @if(count($posts)> 0)
        @foreach ($posts as $post)
<a href="/posts/{{$post->id}}">

                <div class=" flex bordered rounded px-4 py-4 bg-gray-300 mb-6">
                    <div class="md:w-2/5 sm:w-2/5 lg:w-2/5 ">
                    <img src="/storage/cover_images/{{$post->cover_image}}" alt="Post Image" class="w-full h-40">
                    </div>

                    <div class="w-3/5">
                         <div class="  mb-2 pa-10">
                            <h3 class=" text-center mb-5 text-3xl ">{{$post->title}}</h3>
                        </div>
                            <p class="text-center ">writen on {{$post->created_at}} by {{$post->user->name}}</p>
                      </div>
                </div>
                    
            </a>
        @endforeach

        {{$posts->links()}}

    @else
    <h1>No Post Found please Add one</h1>

    @endif
</div>


@endsection