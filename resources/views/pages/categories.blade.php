{{--
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container mx-auto px-4 py-8">

        @if ($posts->isEmpty())
            <p class="text-center text-gray-500">Belum ada postingan.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
                @foreach ($posts as $post)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 transform hover:scale-105">
                        <a href="/project/{{ $post->slug }}" class="block">
                            <img src="https://picsum.photos/800/400" alt="{{ $post->name }}" class="w-full h-32 object-cover">
                            <div class="p-4 text-center">
                                <h2 class="text-lg font-semibold text-blue-950 mb-1">{{ $post->title }}</h2>
                                <p class="text-gray-500 mb-2">{{ Str::limit($post->body, 200) }}</p>
                                <a href="/project/{{ $post->slug }}" class="inline-flex items-center px-3 py-1 bg-blue-950 text-white rounded hover:bg-blue-900 transition duration-300 text-sm">
                                    View Project
                                </a>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-layout> --}}

<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container mx-auto px-4 py-8">

        @if ($posts->isEmpty())
            <p class="text-center text-gray-500">Belum ada postingan.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-4">
                @foreach ($posts as $post)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 transform hover:scale-105">
                        <a href="/project/{{ $post->slug }}" class="block">
                            <img src="https://picsum.photos/800/400" alt="{{ $post->name }}" class="w-full h-32 object-cover">
                            <div class="p-4 text-center">
                                <h2 class="text-lg font-semibold text-blue-950 mb-1">{{ $post->title }}</h2>
                                <p class="text-gray-500 mb-2">{{ Str::limit($post->body, 200) }}</p>
                                <a href="/project/{{ $post->slug }}" class="inline-flex items-center px-3 py-1 bg-blue-950 text-white rounded hover:bg-blue-900 transition duration-300 text-sm">
                                    View Project
                                </a>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <!-- Pagination Links -->
            <div class="mt-6">
                {{ $posts->links() }} <!-- Menampilkan kontrol pagination -->
            </div>
        @endif
    </div>
</x-layout>
