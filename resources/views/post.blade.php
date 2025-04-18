<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md mx-3 md:w-2/3">
        <a href="/posts/" class="inline-flex items-center font-medium text-primary-600 hover:underline mb-8">
            <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                    clip-rule="evenodd" />
            </svg>
            Back to Post
        </a>
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <img class="w-7 h-7 rounded-full"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                    alt="/posts/{{ $post->author->name }}" />
                <span class="font-medium text-lg">
                    <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                </span>
            </div>
        </div>
        <div class="ml-10 flex items-center mb-5 text-gray-500 gap-2 my-1">
            <span
                class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
            </span>|<span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
        </div>
        <h2 class="mb-2 text-xl font-bold tracking-tight text-gray-900 hover:underline"><a
                href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p class="mb-5 font-light text-gray-500 ">{{ $post->body }}
        </p>
    </article>
</x-layout>
