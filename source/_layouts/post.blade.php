@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->description }}" />
@endpush

@section('body')

    <header class="flex-auto w-full max-w-4xl mx-auto ">

        @if ($page->cover_image)
            <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2">
        @endif

        <h1 class="leading-none mb-2 text-xs font-hairline">
            {{ $page->title }}
        </h1>

        <p class="md:mt-0 text-xs font-hairline">
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

    <div class="mb-12 flex-auto w-full max-w-4xl mx-auto" v-pre>
        @yield('content')

        @if ($page->authorBio)
            <section class="flex">
                <main class="mt-12 border-l-4 border-teal-700 pl-4">
                    <p class="text-sm text-gray-400">
                        {{ $page->authorBio }}
                    </p>

                    @if ($page->authorBio2)
                        <p class="text-sm text-gray-400">
                            {{ $page->authorBio2 }}
                        </p>
                    @endif
                    @if ($page->authorBio3)
                        <p class="text-sm text-gray-400">
                            {{ $page->authorBio3 }}
                        </p>
                    @endif
                </main>
            </section>
        @endif
    </div>

    @if ($page->postLink)
        <footer class="my-8 py-4 px-2 flex-auto w-full max-w-4xl mx-auto">
            <p class="mt-16 italic bg-gray-800 pt-4 pb-4 px-2">
                Discuss {{ $page->title }} 
                <a href="{{ $page->postLink }}" title="Read {{ $page->title }}" 
                class="text-gray-200">
                    at 200WordsADay.com
                </a>
            </p>
        </footer>
    @endif

    

    <nav class="flex justify-between text-sm md:text-base flex-auto w-full max-w-4xl mx-auto ">
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
