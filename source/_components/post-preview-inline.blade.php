<div class="flex flex-col mb-4">

    <h2 class="text-xl">
        <a
            href="{{ $post->getUrl() }}"
            title="Read more - {{ $post->title }}"
            class="font-normal text-gray-400"
        >{{ $post->title }}</a>
    </h2>

    <p class="mt-1 text-gray-200">{!! $post->getExcerpt(150) !!}</p>

    
    <aside class="w-full text-right text-xs">
        <p class="mb-1">
            {{ $post->getDate()->format('F j, Y') }}
        </p>

        {{ $post->author }}
    </aside>
</div>
