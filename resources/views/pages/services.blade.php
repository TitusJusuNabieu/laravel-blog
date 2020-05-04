@extends('layouts.app')


@section('content')

<div class=" min-h-screen flex items-center justify-center">
    <div class="flex flex-col justify-around h-full">
        <h1 class="text-gray-600 text-center font-light tracking-wider text-5xl mb-6">{{$title}}</h1>
        <p class="text-center">This is the Services page from My Laravel Project</p>
        <hr>
        <br>
        <br>
        <ul class="list-reset">
            @if(count($services) >0)
                @foreach ($services as $service)

                <div class="border rounded">
                    <div class="bg-white bg-gray-200 border rounded mb-20 pa-10">
                        <li class="inline pr-8 text-center ">{{$service}}</li>
                    </div>
                  </div>
        
                
                    
                @endforeach
        
            @endif
        </ul>
        
    </div>
    
</div>





@endsection