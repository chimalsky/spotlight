@extends('_layouts.master')

@section('body')
    @foreach ($posts->where('featured', true) as $featuredPost)
        <header>
            <h1 class="text-xl font-normal">
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

            <p class="text-gray-300 text-xs my-2">
                {{ $featuredPost->getDate()->format('F j, Y') }}
            </p>

            <h2 class="text-3xl mt-0">
                <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}" 
                class="text-gray-200">
                    {{ $featuredPost->title }}
                </a>
            </h2>

            <p class="mt-0 mb-4">{!! $featuredPost->getExcerpt() !!}</p>
        </div>

        @if ($loop->last)
            <hr class="border-b my-6">
        @endif
    @endforeach

    @foreach ($posts->where('featured', false)->take(6)->chunk(2) as $row)
        <div class="flex flex-col md:flex-row md:-mx-6 mt-4">
            @foreach ($row as $post)
                <div class="w-full md:w-1/2 md:mx-6">
                    @include('_components.post-preview-inline')
                </div>

                @if (! $loop->last)
                    <hr class="block md:hidden w-full border-b mt-2 mb-6">
                @endif
            @endforeach
        </div>
    @endforeach
@stop
