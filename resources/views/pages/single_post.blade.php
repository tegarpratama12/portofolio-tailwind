<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container mx-auto px-4 md:px-6 lg:px-8 py-12">
        <article class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Header Section -->
            <div class="w-full h-64 md:h-80 mb-6 overflow-hidden rounded-lg">
                <img src="https://picsum.photos/800/400" alt="{{ $project->title }}"
                    class="w-full h-full object-cover object-center hover:scale-105 transition-transform duration-300">
            </div>
            <div class="p-8">
                <h2 class="mb-4 text-4xl font-bold text-gray-800 hover:text-gray-700 transition-colors">
                    {{ $project->title }}
                </h2>

                <!-- Author & Date -->
                <div class="flex items-center space-x-4 text-gray-600 mb-6">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"></path>
                        </svg>
                        <a href="" class="hover:text-blue-600 transition-colors">{{ $project->author->name }}</a>
                    </div>
                    <span>•</span>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                        {{ $project->created_at->diffForHumans() }}
                    </div>
                </div>

                <!-- Content -->
                <div class="prose max-w-none">
                    <p class="text-gray-700 leading-relaxed text-lg">{{ $project->body }}</p>
                </div>
            </div>

            <!-- Footer -->
            <div class="px-8 py-6 bg-gray-50 border-t border-gray-100">
                <a href="/project" class="inline-flex items-center text-blue-600 hover:text-blue-700 transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Kembali ke Semua Project
                </a>
            </div>
        </article>
    </div>
</x-layout>
