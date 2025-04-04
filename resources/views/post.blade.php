<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-8 max-w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-2xl tracking-tight font-bold text-gray-700">{{ $post['title'] }}</h2>
        <div>By
            <a href="/authors/{{ $post->author->username }}" class="text-base text-gray-600 hover:underline">
                {{ $post->author->name }}</a>
            | <a href="#" class="text-base text-gray-600 hover:underline">Web Programmming</a> |
            {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light text-justify">
            {{ $post['body'] }}
        </p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to Post</a>
    </article>
</x-layout>
