@extends('layouts.app')

@section('title','Add post')

@section('content')
    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-5xl">
                Create Post
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
        <form action="/blog" method="post" enctype="multipart/form-data">
            @csrf

            <input type="text" name="title" placeholder="Title" class="bg-transparent block border-b-2 w-full h-20 text-5xl outline-none">

            <textarea name="description" placeholder="Description" class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

            <div class="bg-gray-lighter pt-15">
                <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border-blue cursor-pointer">
                    <span class="mt-2 text-base leading-normal">
                        Select Image
                    </span>
                    <input name="image" type="file" class="hidden">
                </label>
            </div>

            <button type="submit" class="uppercase mt-15 bg-gray-500 text-white-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Submit Post
            </button>
        </form>
    </div>
@endsection