@extends('layouts.app')

@section('title',$post->title)

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-5xl">
                {{$post->title}}
            </h1>
        </div>
    </div>
    <div class="sm:grid gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <center>
            <img src="{{ URL::to('/') }}/images/{{$post->image_path}}" class="" width="800" alt="">
            </center>
        </div>
        <span class="text-grey-500">
            By <span class="font-bold italic text-gray-800">
            {{$post->user->name}}
            </span>, Created on {{ date('jS M Y', strtotime($post->updated_at))}}
        </span>
        <div>
            <p class="text-xl text-gray-700 pb-10 leading-8 font-light text-justify">
                {{$post->description}}
            </p>
        </div>
    </div>
@endsection