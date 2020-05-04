@extends('layouts.app')

@section('content')
   

<div class="flex container mx-auto item-center mt-20 mb-20 h-screen">
    <div class="w-2/5">
    </div>
    <div class="w-1/5 px-12">
        <a href="/posts/create" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded mt-8 '">Create a Post</a>
    </div>

    <div class="w-2/5">
    </div>
    
</div>

   

    <div class="flex flex container mx-auto">

        <div class="w-1/5"></div>

        <div class="w-3/5">


            <table class="table-auto w-full">
                <thead class="bg-gray-800 text-white">
                  <tr>
                    <th class="px-4 py-2">Title</th>
                    <th class="px-4 py-2"></th>
                    <th class="px-4 py-2"></th>
                  </tr>
                </thead>
                <tbody>
                    @if(count($posts)>0)
                        @foreach($posts as $post)
                        <tr>
                        <td class="border px-4 py-2">{{$post->title}}</td>
                        <td class="border px-4 py-2">
                            <a href="/posts/{{$post->id}}/edit" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded mb-5 "> Edit</a></td>
                            <td class="border px-4 py-2">
                                {!!Form::open(['action'=>['postController@destroy', $post->id],'method'=>'POST' ])!!}
            
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete',['class'=>'shadow bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded mb-5'])}}
    
            
            {!!Form::close()!!}
                            </td>
                          </tr>
                        @endforeach
    
                    @else
                    <p>NO Posts Created yet</p>    
                        
                    @endif
                  
    
                </tbody>
              </table>
        
        </div>


        <div class="w-1/5"></div>

      
          
    </div>
@endsection
