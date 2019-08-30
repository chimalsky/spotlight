@extends('_layouts.master')

@section('body')
    @foreach ($posts->where('featured', true) as $featuredPost)
        <header class="">
            <h1 class="text-sm font-normal">
                Current Feature: 
                <span class="font-semibold">
                    Rosie Odsey
                </span>
            </h1>

        </header>

        <div class="w-full mb-24">
            @if ($featuredPost->cover_image)
                <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image" class="mb-6">
            @endif

            <p class="mt-0 mb-4">{!! $featuredPost !!}</p>

            <p class="text-gray-300 text-xs my-2 text-right">
                {{ $featuredPost->getDate()->format('F j, Y') }}
            </p>

            <p class="mt-32 italic bg-gray-800 pt-4 pb-4 px-2">
                You can discuss this post here:
                <a href="{{ $featuredPost->postLink }}" title="Read {{ $featuredPost->title }}" 
                class="text-gray-200">
                    {{ $featuredPost->title }}
                </a>
            </p>

            @if ($featuredPost->authorBio)
                <p class="text-sm text-gray-400">
                    {{ $featuredPost->authorBio }}
                </p>
            @endif
        </div>

        @if ($loop->last)
            <hr class="border-b border-teal-700 my-6">
        @endif
    @endforeach


    <footer class="text-center mt-24">
        Nextup is
        <a href="https://200wordsaday.com/writers/dandelion">
            @Dandelion
        </a>

        in your inbox September 6
    </footer>

    <section class="mt-24">

        <header class="mb-8 text-sm">
            Past Features
        </header>

        <div class="w-full flex flex-wrap mt-4">
            @foreach ($posts->where('featured', false) as $post)
                <div class="w-full md:w-1/2 px-4">
                    @include('_components.post-preview-inline')
                </div>
            @endforeach
        </div>
    </section>
@stop
