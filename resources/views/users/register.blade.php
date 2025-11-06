<x-layout>
    <div
        class="bg-indigo-200 p-10 max-w-lg mx-auto mt-24 rounded-2xl shadow-md 
                                        hover:shadow-2xl border-1 border-black 
                                        flex flex-col relative overflow-hidden">
        <header class="text-center mb-6">
            <h2 class="text-3xl font-bold text-gray-900">Welcome to HireHub</h2>
            <p class="text-gray-500 mt-2 ">Create an account to post Jobs</p>

            <div class="mt-4 border-b-2 border-black w-full mx-auto"></div>
        </header>

        <form method="POST" action="/users" class="space-y-6">
            @csrf
            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-bold font-medium text-gray-800">Your Name</label>
                <input type="text" name="name" value="{{ old('name') }}"
                    class="mt-1 block w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-bold font-medium text-gray-800">Email Address</label>
                <input type="email" name="email" value="{{ old('email') }}"
                    class="mt-1 block w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-bold font-medium text-gray-800">Password</label>
                <input type="password" name="password"
                    class="mt-1 block w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password2" class="block text-sm font-bold font-medium text-gray-800">Confirm
                    Password</label>
                <input type="password" name="password_confirmation"
                    class="mt-1 block w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit -->
            <div>
                <button type="submit"
                    class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">
                    Sign Up
                </button>
                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>

        <div class="mt-6 text-center">
            <p class="text-sm text-gray-500">
                Already have an account?
                <a href="/login" class="text-indigo-600 hover:text-indigo-800 font-medium">Login</a>
            </p>
        </div>

    </div>
    </form>
    </div>
</x-layout>
