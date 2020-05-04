@extends('layouts.app')

@section('content')

<div class="container mx-auto h-screen">
    <h1 class="text-5xl">Create Post</h1>


    {!! Form::open(['action' =>'postController@store','method'=>'POST','class'=>'bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 mt-8','enctype'=>'multipart/form-data']) !!}
    

       {{Form::label('title','Title', ['class'=>'block text-gray-700 text-sm font-bold mb-2'])}}
       {{Form::text('title','',['class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline', 'placeholder'=>'Title'])}}


       {{Form::label('body','Body', ['class'=>'block text-gray-700 text-sm font-bold mb-2'])}}
       {{Form::textarea('body',"",['id'=>'editors','class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline', 'placeholder'=>'Body'])}}

       {{Form::file('cover_image')}}


       {{Form::submit('submit',['class'=>'shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded mt-8'])}}


    {!! Form::close() !!}
 
             
</div>
    
@endsection