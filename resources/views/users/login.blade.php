<x-layout>
    <x-card
        class="bg-indigo-200 p-10 max-w-lg mx-auto mt-24 rounded-2xl shadow-md 
                                        hover:shadow-2xl border-1 border-black 
                                        flex flex-col relative overflow-hidden">
        <header class="text-center mb-6">
            <h2 class="text-3xl font-bold text-gray-900">Welcome Back</h2>
            <p class="text-gray-500 mt-2">Login to your account to post</p>

            <div class="mt-4 border-b-2 border-black w-full mx-auto"></div>
        </header>

        <form method="POST" action="/users/authenticate" class="space-y-6">
            @csrf

            <div>
                <label for="email" class="block text-sm font-bold font-medium text-gray-800">Email Address</label>
                <input type="email"
                    class="mt-1 block w-full border border-gray-300 rounded-lg px-3
                                           py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500
                                          focus:border-indigo-500 sm:text-sm"
                    name="email" value="{{ old('email') }}" />
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-sm font-bold font-medium text-gray-800">
                    Password
                </label>
                <input type="password"
                    class="mt-1 block w-full border border-gray-300 rounded-lg px-3
                                           py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500
                                          focus:border-indigo-500 sm:text-sm"
                    name="password" value="{{ old('password') }}" />

                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit"
                    class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">
                    Sign Up
                </button>
                <a href="/" class="text-black ml-4"> Back </a>
            </div>

            <div class="mt-6 text-center">
                <p class="text-sm text-gray-500">
                    Already have an account?
                    <a href="/login" class="text-indigo-600 hover:text-indigo-800 font-medium">Login</a>
                </p>
            </div>

        </form>
    </x-card>
</x-layout>
