<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-8 max-w-screen-lg border-b border-gray-300">
        <h2 class="mb-2 text-3xl tracking-tight font-semibold">{{ $post['title'] }} </h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author']}}</a> | 1 januari 2024
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="/project" class="font-medium text-blue-500 hover:underline">&laquo; Back To All Project </a>
    </article>
</x-layout>
