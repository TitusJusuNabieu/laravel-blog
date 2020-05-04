@extends('layouts.app')


@section('content')
<div class=" min-h-screen flex items-center justify-center">
    <div class="flex flex-col justify-around h-full">
        <h1 class="text-gray-600 text-center font-light tracking-wider text-5xl mb-6">{{$title}}</h1>
        <div class="flex justify-center ">
            <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                Login
              </button>
    
              <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded ml-3">
                Register
              </button>
        </div>
        
    </div>
    
</div>
@endsection