<x-layout>
    <div class="w-4/5 mx-auto">
        <div class="mx-4">
            <div class="p-10">
                <div class="flex flex-col items-center justify-center">
                    <img class="w-24 h-24 sm:w-32 sm:h-32 transform transition-all duration-300 group-hover:scale-105 group-hover:shadow-xl"
                        src="{{ $listing->logo
                            ? (Str::startsWith($listing->logo, ['http://', 'https://'])
                                ? $listing->logo
                                : (Str::contains($listing->logo, 'images/')
                                    ? asset($listing->logo)
                                    : asset('storage/' . $listing->logo)))
                            : asset('images/no-pictures.png') }}"
                        alt="{{ $listing->title }} Logo" />

                    <h3 class="text-2xl mb-2">
                        {{ $listing->title }}
                    </h3>

                    <div class="text-lg my-4">
                        <i class="fa-solid fa-location-dot text-indigo-500"></i>
                        <span class="text-gray-500">
                            {{ $listing->location }}
                        </span>
                    </div>

                    <div class="text-gray-600 mb-4">{{ $listing->company }}</div>

                    <x-listing-tags :tagsCsv="$listing->tags" />

                    <div class="mb-4"></div>

                    <div class="border border-gray-200 w-full mb-6"></div>
                    <div>
                        <h3 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900 mb-4">Job Description
                        </h3>
                        <div class="text-lg space-y-6">
                            <p class="text-gray-600 body-font whitespace-pre-line">
                                {{ $listing->description }}
                            </p>

                            <div class="flex gap-4 mt-6">
                                <a href="mailto:{{ $listing->email }}"
                                    class="flex-1 bg-sky-950 text-white py-4 rounded hover:opacity-80 text-center inline-flex items-center justify-center gap-2">
                                    <i class="fa-solid fa-envelope"></i>
                                    Contact Employer
                                </a>

                                <a href="{{ $listing->website }}" target="_blank"
                                    class="flex-1 bg-blue-800 text-white py-4 rounded hover:opacity-80 text-center inline-flex items-center justify-center gap-2">
                                    <i class="fa-solid fa-globe"></i>
                                    Visit Website
                                </a>
                            </div>
                            <a href="/"
                                class="inline-flex items-center px-4 py-2  mb-4 
                                       bg-indigo-500 text-white font-medium rounded-lg 
                                       hover:bg-indigo-400 transition">
                                <i class="fa-solid fa-arrow-left mr-2"></i>
                                Back
                            </a>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
