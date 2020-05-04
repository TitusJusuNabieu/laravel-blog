@extends('layouts.app')

@section('content')

<div class="container mx-auto h-screen">
    <button class="bg-transparent mt-5 mb-20 hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" onclick="window.location.href = '/posts';">
                Posts
              </button>
<h1 class="text-5xl text-center mb-5">{{$post->title}}</h1>
<img src="/storage/cover_images/{{$post->cover_image}}" alt="Post Image" class="w-full h-64">

                <div class=" rounded mb-10 ">
                    <div class="   rounded mb-2 pa-10 ">
                        <p class="justify  text-justify mx-5 my-6 text-2xl ">{!!$post->body!!}</p>
                    </div>
                    <hr>
                    <p class="text-center mt-5">writen on {{$post->created_at}} : by {{$post->user->name}}</p>
                </div>
                @if(!Auth::guest())
                @if(Auth::user()->id == $post->user_id)
                <div class="flex ">
                    <div class="w-1/5">
                        <a href="/posts/{{$post->id}}/edit" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded mb-5 "> Edits</a>
                    </div>
                    
                    <div class="w-3/5">
                        <span ></span>
                    </div>

                    <div class="w-1/5">
                        {!!Form::open(['action'=>['postController@destroy', $post->id],'method'=>'POST' ])!!}
                    
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete',['class'=>'shadow bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded mb-5'])}}

                    
                    {!!Form::close()!!}
                    </div>
                    
                </div>
                @endif
                @endif
                


                
             
</div>
    
@endsection