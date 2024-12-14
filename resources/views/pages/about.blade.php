<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto">
            <div
                class="flex flex-col md:flex-row bg-white rounded-lg shadow-md p-6 transition-transform transform hover:scale-105 hover:shadow-lg">
                <div class="md:w-1/2 flex justify-center">
                    <img src="/images/index12.jpg" alt="Your Image" class="max-w-sm h-auto rounded-lg shadow-lg">
                </div>
                <div class="md:w-1/2 flex flex-col justify-start items-start md:pl-2">
                    <!-- Teks di sebelah kanan -->
                    <h2 class="text-2xl font-bold text-gray-800 mb-2 underline">Introduce Myself</h2>
                    <p class="mt-1 text-gray-700 text-lg leading-relaxed mb-4">{{ $body }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 bg-gray-200 transition-transform transform hover:scale-105 hover:shadow-lg rounded-lg">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold text-center mb-6">My Projects</h2>
            <div class="relative">
                <div class="carousel">
                    @foreach ($projects as $p)
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/1000/200" alt="{{ $p->title }}"
                                class="w-full h-auto rounded-lg shadow-lg">
                            <h3 class="text-xl font-bold my-2 text-center">{{ $p->title }}</h3>

                            <p class="text-gray-700 text-lg text-center leading-relaxed mb-4 px-4">
                                {{ Str::limit($p->body, 400) }}</p>
                            <div class="text-center">
                                <a href="/project/{{ $p->slug }}"
                                    class="inline-block text-center bg-blue-900 text-white py-1 px-3 rounded hover:bg-blue-950 transition">
                                    Read More →
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Kontrol Carousel -->
                <button
                    class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full"
                    onclick="prevSlide()">❮</button>
                <button
                    class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full"
                    onclick="nextSlide()">❯</button>
            </div>
        </div>
    </section>

    <section class="py-12 bg-gray-100 rounded-lg transition-transform hover:scale-105">
        <div class="container mx-auto">
            <div class="bg-white rounded-lg shadow-md p-6 mb-6"> <!-- Card untuk My Skills -->
                <h2 class="text-2xl font-bold text-center mb-4">My Skills</h2>
                <p class="text-gray-700 text-lg text-center leading-relaxed mb-4">Here are some of the technologies I
                    work with:</p>
                <div class="flex justify-center space-x-4"> <!-- Flexbox untuk logo -->
                    <img src="/images/laravel.png" alt="Laravel"
                        class="w-12 h-12 rounded-full shadow-lg hover:scale-110 transition-transform mx-2">
                    <!-- Logo Laravel -->
                    <img src="/images/tailwind.png" alt="Tailwind"
                        class="w-12 h-12 rounded-full shadow-lg hover:scale-110 transition-transform mx-2">
                    <!-- Logo Tailwind -->
                    <img src="/images/boots.png" alt="Bootstrap"
                        class="w-12 h-12 rounded-full shadow-lg hover:scale-110 transition-transform mx-2">
                    <!-- Logo Bootstrap -->
                    <img src="/images/py.jpeg" alt="Python"
                        class="w-12 h-12 rounded-full shadow-lg hover:scale-110 transition-transform mx-2">
                    <!-- Logo Python -->
                    <img src="/images/skets.png" alt="SketchUp"
                        class="w-12 h-12 rounded-full shadow-lg hover:scale-110 transition-transform mx-2">
                    <!-- Logo SketchUp -->
                </div>
            </div>
        </div>
    </section>

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-item');

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.style.display = (i === index) ? 'block' : 'none';
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        // Initialize the carousel
        showSlide(currentSlide);

        // Set interval for automatic slide change
        setInterval(nextSlide, 5000); // Ganti slide setiap 5 detik
    </script>

</x-layout>
