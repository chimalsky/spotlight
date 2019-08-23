<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->meta_description ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->siteDescription }}" />

        <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        @stack('meta')

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-gray-900 text-gray-200 leading-normal font-sans">
        <header class="text-right container mt-2">
            <a href="/" class="pr-4 lg:pr-0 font-thin">
                200 wad 

                <span class="font-semibold">
                    Writers'
                </span>

                spotlight
            </a>
        </header>

        <main role="main" class="flex-auto w-full container max-w-4xl mx-auto py-16 px-6">
            @yield('body')
        </main>

        <footer class="text-center text-sm mt-12 py-4" role="contentinfo">
            <div class="w-full mb-2">
                Powered by the writers at 
                <a href="https://200wordsaday.com">
                    200wad
                </a>
            </div>

            <div class="w-full mb-4">
                Contact me at 
                <a href="mailto:ich.bin.abe@gmail.com">
                    ich.bin.abe@gmail.com 
                </a>
            </div>

            <div class="w-full">
                Built with 
                    <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">
                        Jigsaw
                    </a>
                and <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">
                    Tailwind CSS
                    </a>
            </div>
        </footer>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')
    </body>
</html>
