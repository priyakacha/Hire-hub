<section
    class="relative h-72 bg-indigo-700 flex flex-col justify-center items-center text-center space-y-6 mb-12
                bg-cover bg-center"
    style="background-image: url('images/laravel-logo.png');">

    <div class="absolute inset-0 bg-white bg-opacity-70 backdrop-blur-sm z-0"></div>

    <div class="relative z-10 p-4">
        <div class="flex items-center">
            <h1
                class="text-5xl md:text-6xl lg:text-7xl font-extrabold uppercase text-dark-black tracking-tight transform-gpu transition-transform duration-500">
                Hire<span class="text-light-black">Hub</span>
            </h1>
            <img class="ml-4 w-20 md:w-30 hover:scale-105 transition-transform duration-300 ease-in-out"
                src="{{ asset('images/web-logo.png') }}" alt="Hire-Hub" />
        </div>
        </h1>
        <p class="text-lg md:text-xl lg:text-2xl text-light-black font-medium my-4 animate-fade-in">
            Find or post a developer 💡
        </p>
        <div>
            {{-- @guest
            @endguest --}}
        </div>
    </div>
</section>

<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in {
        animation: fadeIn 1s ease-out 0.5s forwards;
        opacity: 0;
    }
</style>
