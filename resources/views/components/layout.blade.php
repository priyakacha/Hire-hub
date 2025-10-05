<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HireHub | Find Jobs & Projects</title>
    <link rel="icon" href="{{ asset('images/web-logo.png') }}" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom utility classes for the new theme */
        .bg-main-white {
            background-color: white;
        }

        .text-dark-black {
            color: #1a1a1a;
        }

        .text-light-black {
            color: #4a4a4a;
        }

        .bg-card {
            background-color: #C1DDD8;
        }

        .bg-light-blue {
            background-color: #76DCF1;
        }

        .hover\:bg-dark-blue:hover {
            background-color: #52CCF6;
        }

        .hover\:text-light-red:hover {
            color: #FF6666;
            /* A representative light red color */
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                },
            },
        }
    </script>
</head>

<body class="bg-main-white text-dark-black min-h-screen flex flex-col font-sans antialiased">

    <header class="sticky top-0 z-50">
        <nav
            class="flex justify-between items-center py-5 px-6 md:px-12 
                border-b border-gray-200 bg-card/90 backdrop-blur-md shadow-lg">
            <a href="/" aria-label="Homepage">
                <div class="flex items-center gap-x-4">
                    <img class="w-20 md:w-30 hover:scale-105 transition-transform duration-300 ease-in-out"
                        src="{{ asset('images/web-logo.png') }}" alt="Hire-Hub" />
                    <h4
                        class="text-5xl md:text-6xl lg:text-7xl font-extrabold uppercase text-dark-black tracking-tight transform-gpu transition-transform duration-500">
                        Hire<span class="text-light-black">Hub</span>
                    </h4>
                </div>
                </div>
            </a>
            <ul class="flex items-center space-x-4 md:space-x-8 text-sm md:text-base font-medium">
                @auth
                    <li class="text-indigo-500 text-xl">
                        <span class="font-bold">
                            Welcome
                        </span>
                        <span class="text-black italic capitalize">
                            {{ auth()->user()->name }}
                        </span>
                    </li>
                    <li>
                        <a href="/listings/manage" class="hover:text-laravel">
                            <i class="fa-solid fa-gear text-indigo-600 hover:text-indigo-700 text-xl"></i>
                        </a>
                    </li>
                    <li>
                        <form class="inline" method="POST" action="/logout">
                            @csrf
                            <button type="submit">
                                <i class="fa-solid fa-door-closed text-red-400 hover:text-red-600 text-xl"></i>
                            </button>
                        </form>
                    </li>
                @else
                    <li>
                        <a href="/login" class="text-indigo-500 py-2 inline-flex px-6 hover:text-[#4b0082]">
                            Login</a>
                    </li>
                    <li>
                        <a href="/register"
                            class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">
                            Register</a>
                    </li>
                @endauth
            </ul>
        </nav>
    </header>

    <main class="flex-grow container mx-auto p-4 md:px-12 mt-6 mb-24">
        {{ $slot }}
    </main>

    <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-start bg-indigo-500 text-white h-24 mt-24 opacity-90 md:justify-center">
        <p class="ml-2 underline">Hire-Hub &copy; 2025, All Rights reserved</p>

        <a href="/listings/create" class="absolute top-1/3 right-10 bg-white text-black py-2 px-5 rounded">+ Post
            Job</a>
    </footer>

    <x-flash-message />
</body>

</html>
