<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container mx-auto px-4 py-8">

        {{-- Categories --}}
        <div class="mb-8">
            <div class="flex justify-center flex-wrap gap-4">
                @foreach ($categories as $category)
                    <div
                        class="bg-blue-950 rounded-lg shadow-lg p-4 transition-transform duration-300 transform hover:scale-105">
                        <a href="/category/{{ $category->slug }}" class="block text-center text-white font-semibold">
                            {{ $category->name }}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- end categories --}}
        {{-- Projects --}}
        <div class="grid gap-8">
            @foreach ($projects as $prj)
                <article
                    class="bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                    <div class="p-6">
                        <!-- Title dan Timestamp tetap di atas -->
                        <div class="flex items-center justify-between mb-4">
                            <a href="/project/{{ $prj->slug }}" class="group">
                                <h2
                                    class="text-2xl font-bold text-gray-800 group-hover:text-blue-600 transition-colors duration-200">
                                    {{ $prj->title }}
                                </h2>
                            </a>
                            <span class="text-sm text-gray-500">{{ $prj->created_at->diffForHumans() }}</span>
                        </div>

                        <!-- Tambahan bagian gambar di bawah title -->
                        <div class="w-full h-56 md:h-72 mb-4 overflow-hidden rounded-lg">
                            <img src="https://picsum.photos/800/400" alt="{{ $prj->category->name }}"
                                class="w-full h-full object-cover object-center hover:scale-105 transition-transform duration-300">
                        </div>

                        <!-- Author info -->
                        <div class="flex items-center mb-4">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($prj->author->name) }}"
                                alt="{{ $prj->author->name }}" class="w-10 h-10 rounded-full mr-3">
                            <p
                                class="text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors duration-200">
                                {{ $prj->author->name }}
                            </p>
                        </div>

                        <p class="text-gray-600 mb-4 line-clamp-3">{{ $prj->body }}</p>

                        <div class="flex justify-end">
                            <a href="/project/{{ $prj->slug }}"
                                class="inline-flex items-center px-4 py-2 bg-blue-950 text-white rounded-lg hover:bg-blue-900 transition-colors duration-200">
                                Baca Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
        {{-- end projects --}}
        <div class="mt-12">
            @if ($projects->hasPages())
                <div
                    class="bg-white rounded-lg shadow-sm px-6 py-4 border border-gray-100 hover:shadow-md transition-shadow duration-300">
                    <div class="flex items-center justify-between">
                        <!-- Showing text di kiri -->
                        <div class="text-sm text-gray-700">
                            Showing
                            <span class="font-medium">{{ $projects->firstItem() }}</span>
                            to
                            <span class="font-medium">{{ $projects->lastItem() }}</span>
                            of
                            <span class="font-medium">{{ $projects->total() }}</span>
                            results
                        </div>

                        <!-- Pagination buttons di kanan -->
                        <div class="pagination-container">
                            {{ $projects->onEachSide(1)->links('pagination::simple-tailwind') }}
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-layout>
