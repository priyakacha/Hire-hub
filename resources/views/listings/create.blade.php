<x-layout>
    <x-card
        class="bg-indigo-200 p-10 w-1/2 mx-auto mt-24 rounded-2xl shadow-md 
                                        hover:shadow-2xl border-1 border-black 
                                        flex flex-col relative overflow-hidden">
        <header class="text-center mb-6">
            <h2 class="text-3xl font-bold text-gray-900">Create Post</h2>
            <p class="text-gray-500 mt-2"> Post a new job to find a developer 🚀</p>

            <div class="mt-4 border-b-2 border-black w-full mx-auto"></div>
        </header>

        <form method="POST" action="/listings" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <div>
                <label for="company" class="block text-sm font-bold font-larg text-gray-800">Company
                    Name</label>
                <input type="text"
                    class="mt-1 block w-full border border-gray-300 rounded-lg px-3
                                           py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500
                                          focus:border-indigo-500 sm:text-sm"
                    name="company" value="{{ old('company') }}" />
                @error('company')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="title" class="block text-sm font-bold font-larg text-gray-800">Job Title</label>
                <input type="text"
                    class="mt-1 block w-full border border-gray-300 rounded-lg px-3
                                           py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500
                                          focus:border-indigo-500 sm:text-sm"
                    name="title" placeholder="Example: Senior Laravel Developer" value="{{ old('title') }}" />

                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="location" class="block text-sm font-bold font-larg text-gray-800">Job Location</label>
                <input type="text"
                    class="mt-1 block w-full border border-gray-300 rounded-lg px-3
                                           py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500
                                          focus:border-indigo-500 sm:text-sm"
                    name="location" placeholder="Example: Remote, Boston MA, etc" value="{{ old('location') }}" />

                @error('location')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-bold font-larg text-gray-800">
                    Contact Email
                </label>
                <input type="text"
                    class="mt-1 block w-full border border-gray-300 rounded-lg px-3
                                           py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500
                                          focus:border-indigo-500 sm:text-sm"
                    name="email" value="{{ old('email') }}" />

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="website" class="block text-sm font-bold font-larg text-gray-800">
                    Website/Application URL
                </label>
                <input type="text"
                    class="mt-1 block w-full border border-gray-300 rounded-lg px-3
                                           py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500
                                          focus:border-indigo-500 sm:text-sm"
                    name="website" value="{{ old('website') }}" />

                @error('website')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="tags" class="block text-sm font-bold font-larg text-gray-800">
                    Tags (Comma Separated)
                </label>
                <input type="text"
                    class="mt-1 block w-full border border-gray-300 rounded-lg px-3
                                           py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500
                                          focus:border-indigo-500 sm:text-sm"
                    name="tags" placeholder="Example: Laravel, Backend, Postgres, etc"
                    value="{{ old('tags') }}" />

                @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="logo" class="block text-sm font-bold font-larg text-gray-800">
                    Company Logo
                </label>
                <input type="file" name="logo" accept="image/*"
                    class="mt-1 block w-full border border-gray-300 rounded-lg px-3
                                           py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500
                                          focus:border-indigo-500 sm:text-sm"
                    name="logo" />

                @error('logo')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-bold font-larg dark:text-black">
                    Job Description
                </label>
                <textarea
                    class="mt-1 block w-full border border-gray-300 rounded-lg px-3
                                           py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500
                                          focus:border-indigo-500 sm:text-sm"
                    name="description" rows="10" placeholder="Include tasks, requirements, salary, etc">{{ old('description') }}</textarea>

                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button
                    class="inline-flex text-white bg-indigo-500 border-0 rounded py-2 px-6 hover:bg-indigo-600 focus:outline-none">
                    Create
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
