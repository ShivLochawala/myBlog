@extends('layouts.app')

@section('title','Edit post')

@section('content')
    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-5xl">
                Edit Post
            </h1>
        </div>
    </div>
    @if($errors->any())
        <div class="w-4/5 m-auto">
             <ul>
                @foreach($errors->all() as $error)
                    <li class="w-1/5 mb-4 px-2 py-2 text-gray-50 bg-red-700 rounded-2xl">
                        {{$error}}
                    </li>
                @endforeach
             </ul>
        </div>
    @endif
    <div class="w-4/5 m-auto pt-20">
        <form action="/blog/{{$post->slug}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input type="text" name="title" class="bg-transparent block border-b-2 w-full h-20 text-5xl outline-none" value="{{$post->title}}">

            <textarea name="description" placeholder="Description" class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none">{{$post->description}}</textarea>

            <button type="submit" class="uppercase mt-15 bg-gray-500 text-white-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Edit Post
            </button>
        </form>
    </div>
@endsection