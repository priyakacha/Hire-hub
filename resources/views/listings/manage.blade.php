<x-layout>
    <div class="w-4/5 mx-auto">
        <header>
            <h1 class="text-3xl text-center my-6">
                Dashboard
            </h1>
        </header>

        <table class="w-full table-auto border-[3px] border-indigo-700 ">
            <tbody class="rounded">
                <tr class="bg-indigo-800">
                    <!-- Title -->
                    <td class="pl-8 py-4 text-lg font-medium capitalize">
                        <span class="text-white">
                            Title
                        </span>
                    </td>

                    <!-- Edit button -->
                    <td class="py-4 text-center">
                        <span class="inline-flex items-center gap-2 text-gray-200 font-medium px-4 py-2">
                            Update
                        </span>
                    </td>

                    <!-- Delete button -->
                    <td class="py-4 text-center">
                        <span class="inline-flex items-center gap-2 text-gray-200 font-medium px-4 py-2">
                            Delete
                        </span>
                    </td>
                </tr>
                @unless ($listings->isEmpty())
                    @foreach ($listings as $listing)
                        <tr class="border-b border-gray-200 hover:bg-gray-100 transition">
                            <!-- Title -->
                            <td class="pl-8 py-4 text-lg font-medium text-gray-800 capitalize">
                                <a href="/listings/{{ $listing->id }}" class="hover:text-blue-600">
                                    {{ $listing->company }}
                                </a>
                            </td>

                            <!-- Edit button -->
                            <td class="py-4 text-center">
                                <a href="/listings/{{ $listing->id }}/edit"
                                    class="inline-flex items-center gap-2 text-blue-400 hover:text-blue-500 font-medium px-4 py-2  border border-indigo-200 rounded-lg hover:bg-blue-200 transition">
                                    <i class="fa-solid fa-pen-clip"></i>
                                    Update
                                </a>
                            </td>

                            <!-- Delete button -->
                            <td class="py-4 text-center">
                                <form method="POST" action="/listings/{{ $listing->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="inline-flex items-center gap-2 text-red-400 hover:text-red-500 font-medium px-4 py-2 border border-red-200 rounded-lg hover:bg-red-200 transition">
                                        <i class="fa-solid fa-circle-minus"></i>
                                        Delete

                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3" class="px-4 py-8 border-gray-300 text-center">
                            <p class="text-gray-700">No Listings Found</p>
                        </td>
                    </tr>
                @endunless

            </tbody>
        </table>
    </div>
</x-layout>
