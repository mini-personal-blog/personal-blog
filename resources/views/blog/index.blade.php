@extends('layouts.app')
@section ('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Posts Blog
        </h1>
    </div>
</div>

@if(session()->has('message'))
<div class="w-4/5 m-auto mt-10 pl-2">
    <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">{{session()->get('message')}}</p>
</div>
@endif

@if(Auth::check())
<button class=" m-10 bg-blue-800 hover:bg-blue-600 text-white font-bold py-5 px-10 rounded-full">
    <a href="/blog/create">Create new post</a>
</button>

@endif

@foreach($posts as $post)
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2021/03/25/17/42/teapot-6123746_960_720.jpg" width="700" alt="">
    </div>
    <div class="m-auto sm:m-auto text-center w-4/5 block">
        <h2 class="text-gray-700 font-bold text-5xl pb-4">
            {{ $post->title}}
        </h2>
        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">{{ $post->user->name}}</span>, created
            on{{ date('js M Y',strtotime($post->updated_at))}}
        </span>

        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light ">
            {{ $post->description}}
        </p>
        <a href="/blog/{{ $post->slug}}"
            class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            keep reading
        </a>

        @if(isset(Auth::user()->id) && Auth::user()->id==$post->user_id)
        <span class="float-right">
            <a href="/blog/{{$post->slug}}/edit"
                class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">Edit</a>
        </span>

        <span class="float-right">
            <form action="/blog/{{$post->slug}}" method="POST">
                @csrf
                @method('delete')
                <button class="text-red-500 pr-3" type="submit">Delete</button>
            </form>
        </span>
        @endif
    </div>

</div>
@endforeach

@endsection