@extends('template')

@section('content')
   
    <div class="bg-gray-600 px-20 py-16 rounded-lg mb-8 relative overflow-hidden">
        <span class="text-xs uppercase text-gray-600 bg-gray-400 rounded-full px-2 py-1">Programación</span>
        <h1 class="text-3xl text-white mt-4">Blog</h1>
        <p class="text-sm text-gray-400 mt-2">Proyecto de Desarrollo Web para profesionales</p>

        <img src="{{ asset('images/dev.png') }}" class="absolute -right-20 -bottom-20 opacity-60">
    </div>

    <div class="px-4">
        <h1 class="text-2xl mb-8 text-gray-500">Contenido técnico</h1>

        <div class="grid grid-cols-1 gap-4 mb-4">
            @foreach($posts as $post)
                <a href="{{ route('post', $post->slug) }}" class="hover:bg-gray-600 transition ease-in-out duration-700 bg-gray-400 rounded-lg px-6 py-4">
                    <p class="text-xs flex items-center gap-2">
                        <span class="uppercase text-gray bg-gray-200 rounded-full  px-2 py-1">Tutorial</span>
                        <span>{{ $post->created_at->format('d-m-Y') }}</span>
                    </p>
                    <h2 class="text-lg text-gray-800 mt-2">{{ $post->title }}</h2>

                    <div class="text-xs text-gray-900 opacity-75 flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                          </svg>
                          
                        {{ $post['user']['name'] }}
                    </div>
                </a>

                
            @endforeach

        </div>

        {{ $posts->links() }}

    </div>

@endsection