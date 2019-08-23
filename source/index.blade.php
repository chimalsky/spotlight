@extends('_layouts.master')

@section('body')
    @foreach ($posts->where('featured', true) as $featuredPost)
        <header class="">
            <h1 class="text-sm font-normal">
                Current Feature: 
                <span class="font-semibold">
                    Abhinaya Konduru
                </span>
            </h1>

        </header>

        <div class="w-full mb-24">
            @if ($featuredPost->cover_image)
                <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image" class="mb-6">
            @endif

            <h2 class="text-xl mt-0">
                <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}" 
                class="text-gray-200">
                    {{ $featuredPost->title }}
                </a>
            </h2>

            <p class="mt-0 mb-4">{!! $featuredPost !!}</p>

            <p class="text-gray-300 text-xs my-2 text-right">
                {{ $featuredPost->getDate()->format('F j, Y') }}
            </p>
        </div>

        @if ($loop->last)
            <hr class="border-b border-teal-700 my-6">
        @endif
    @endforeach

    <header class="mt-24 mb-8 text-sm">
        Past Features
    </header>

    @foreach ($posts->where('featured', false)->take(6)->chunk(2) as $row)
        <div class="flex flex-col md:flex-row md:-mx-6 mt-4">
            @foreach ($row as $post)
                <div class="w-full md:w-1/2 md:mx-6">
                    @include('_components.post-preview-inline')
                </div>
            @endforeach
        </div>
    @endforeach
@stop
