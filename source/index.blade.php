@extends('_layouts.master')

@section('body')
    @foreach ($posts->where('featured', true) as $featuredPost)
        <header class="featured-header">
            <main class="flex-auto w-full max-w-4xl mx-auto flex flex-wrap pt-4 pb-12">
                @if ($featuredPost->cover_image)
                    <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image" class="">
                @endif
                <section class="ml-4">
                    <h1 class="font-serif font-hairline">
                        {{ $featuredPost->title }}
                    </h1>

                    <p class="w-full">
                        {{ $featuredPost->author }}
                    </p>
                </section>
            </main>
        </header>

        <main class="flex-auto w-full max-w-4xl mx-auto">
            <p class="mt-0 mb-4">{!! $featuredPost !!}</p>

            @if ($featuredPost->footer_image)
                <section class="flex justify-center">
                    <div class="max-w-sm mt-4">
                        <img src="{{ $featuredPost->footer_image }}" alt="{{ $featuredPost->title }} cover image" class="">
                    </div>
                </section>
            @endif

            <p class="text-gray-300 text-xs my-2 text-right">
                {{ $featuredPost->author }} <br/>
                {{ $featuredPost->getDate()->format('F j, Y') }}
            </p>

            <p class="mt-32 italic bg-gray-800 pt-4 pb-4 px-2">
                Discuss {{ $featuredPost->title }} 
                <a href="{{ $featuredPost->postLink }}" title="Read {{ $featuredPost->title }}" 
                class="text-gray-200">
                    at 200WordsADay.com
                </a>
            </p>

            @if ($featuredPost->authorBio)
                <p class="text-sm text-gray-400">
                    {{ $featuredPost->authorBio }}
                </p>

                @if ($featuredPost->authorBio2)
                    <p class="text-sm text-gray-400">
                        {{ $featuredPost->authorBio2 }}
                    </p>
                @endif
                @if ($featuredPost->authorBio3)
                    <p class="text-sm text-gray-400">
                        {{ $featuredPost->authorBio3 }}
                    </p>
                @endif
            @endif
        </main>

        @if ($loop->last)
            <hr class="border-b border-teal-700 my-6">
        @endif
    @endforeach


    <footer class="text-center mt-24 flex-auto w-full max-w-4xl mx-auto hidden">
        Nextup is
        <a href="">
            
        </a>

        in your inbox September 20
    </footer>

    <section class="mt-24 flex-auto w-full max-w-4xl mx-auto ">

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
