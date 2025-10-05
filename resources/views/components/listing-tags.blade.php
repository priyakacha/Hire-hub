@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="flex flex-wrap gap-2 mt-2">
    @foreach ($tags as $tag)
        <li>
            <a href="/?tag={{ $tag }}"
                class="inline-flex items-center rounded-full border border-indigo-300 bg-indigo-50 px-3 py-1 text-sm text-indigo-600 font-medium transition hover:bg-indigo-500 hover:text-white shadow-sm">
                {{ $tag }}
            </a>
        </li>
    @endforeach
</ul>
