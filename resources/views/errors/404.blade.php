<x-layout>
    <x-slot:title>{{ $title  ?? " "}}</x-slot:title>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="max-w-4xl mx-auto px-4 py-8">
            <div class="text-center">
                <!-- Angka 404 yang besar -->
                <h1 class="text-9xl font-bold text-blue-600 animate-bounce">
                    404
                </h1>

                <!-- Pesan Error -->
                <div class="mt-4">
                    <h2 class="text-3xl font-semibold text-gray-800 mb-4">
                        Oops! Halaman Tidak Ditemukan
                    </h2>
                    <p class="text-gray-600 text-lg mb-8">
                        Maaf, halaman yang Anda cari tidak dapat ditemukan atau telah dipindahkan.
                    </p>
                </div>

                <!-- Ilustrasi -->
                <div class="my-8 animate-pulse">
                    <svg class="w-64 h-64 mx-auto text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M12 12h.01M12 12h.01M12 12h.01M12 12h.01M12 12h.01M12 12h.01M12 12h.01M12 12h.01M12 12h.01M12 12h.01M12 12h.01M12 12h.01M12 12h.01M12 12h.01">
                        </path>
                        <circle cx="12" cy="12" r="10" stroke-width="1"></circle>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 9h.01M9 9h.01">
                        </path>
                    </svg>
                </div>

                <!-- Tombol Kembali -->
                <div class="space-x-4">
                    <a href="/"
                        class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-200 transform hover:scale-105">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Kembali ke Beranda
                    </a>

                    <button onclick="window.history.back()"
                        class="inline-flex items-center px-6 py-3 bg-gray-200 text-gray-700 font-semibold rounded-lg hover:bg-gray-300 transition-colors duration-200 transform hover:scale-105">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 17l-5-5m0 0l5-5m-5 5h12"></path>
                        </svg>
                        Halaman Sebelumnya
                    </button>
                </div>

                <!-- Tips -->
                <div class="mt-12 text-gray-600">
                    <p class="text-sm">Tips: Pastikan URL yang Anda masukkan sudah benar</p>
                    <p class="text-sm">atau hubungi administrator jika masalah berlanjut.</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
