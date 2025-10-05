@props(['listing'])

{{-- {{ dd($listing->logo) }} --}}

<x-card>
    <div class="flex items-center gap-6">
        <!-- Logo -->
        <div class="flex-shrink-0">

            <img class="w-24 h-24 sm:w-32 sm:h-32 transform transition-all duration-300 group-hover:scale-105 group-hover:shadow-xl"
                src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-pictures.png') }}"
                alt="" />

        </div>

        <!-- Content -->
        <div class="flex-1">
            <!-- Title -->
            <h3 class="text-2xl font-semibold text-gray-800 hover:text-indigo-600 transition capitalize leading-snug">
                <a href="/listings/{{ $listing->id }}">{{ $listing->company }}</a>
            </h3>

            <!-- Company + Location -->
            <div class="mt-2 flex flex-wrap items-center gap-x-6 gap-y-2 text-sm text-gray-500">
                <span class="font-medium text-gray-700">{{ $listing->title }}</span>
                <span class="flex items-center">
                    <i class="fa-solid fa-location-dot text-indigo-500 mr-1"></i>
                    {{ $listing->location }}
                </span>
            </div>

            <!-- Tags -->
            <div class="mt-4">
                <x-listing-tags :tagsCsv="$listing->tags" />
            </div>
        </div>

        <!-- Call to action -->
        {{-- <div class="hidden md:block">
            <a href="/listings/{{ $listing->id }}"
                class="inline-flex items-center gap-2 text-blue-900 hover:text-blue-800 font-medium px-4 py-2 
                       border border-indigo-200 rounded-lg hover:bg-blue-300 transition">
                <i class="fa-regular fa-eye"></i>
                View
            </a>
        </div> --}}


    </div>
</x-card>
