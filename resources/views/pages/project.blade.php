<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-lg border-b border-gray-300">
            <a href="/post/{{ $post['slug'] }}" class="hover:text-blue-600 underline">
                <h2 class="mb-2 text-3xl tracking-tight font-semibold">{{ $post['title'] }} </h2>
            </a>
            <div class="text-base text-gray-500">
                <a href="#">{{ $post['author'] }}</a> | 1 januari 2024
            </div>
            <p class="mt-4 font-light">{{ Str::limit($post['body'], 100) }}</p>
            <a href="/post/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
        </article>
    @endforeach
</x-layout>
