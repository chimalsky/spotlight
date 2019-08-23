@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->description }}" />
@endpush

@section('body')
    @if ($page->cover_image)
        <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2">
    @endif

    <header class="text-gray-500 text-center">
        <h1 class="leading-none mb-2 text-xs font-normal">
            {{ $page->title }}
        </h1>

        <p class="md:mt-0 text-xs">
            {{ $page->author }}  •  {{ date('F j, Y', $page->date) }}
        </p>
    </header>

    @if ($page->categories)
        @foreach ($page->categories as $i => $category)
            <a
                href="{{ '/blog/categories/' . $category }}"
                title="View posts in {{ $category }}"
                class="hidden inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
            >{{ $category }}</a>
        @endforeach
    @endif

    <div class="mb-24" v-pre>
        @yield('content')
    </div>

    @if ($page->postLink)
        <footer class="my-12 border-t border-b border-teal-700 py-4 px-2">
            <a href="{{ $page->postLink }}" class="font-hairline text-sm underline">
                Engage with {{ $page->author }} on 200wad
            </a>
        </footer>
    @endif

    <nav class="flex justify-between text-sm md:text-base">
        <div>
            @if ($next = $page->getNext())
                <a href="{{ $next->getUrl() }}" class="text-gray-300"
                    title="Older Post: {{ $next->title }}">
                    &LeftArrow; {{ $next->title }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a href="{{ $previous->getUrl() }}" class="text-gray-200"
                    title="Newer Post: {{ $previous->title }}">
                    {{ $previous->title }} &RightArrow;
                </a>
            @endif
        </div>
    </nav>
@endsection
