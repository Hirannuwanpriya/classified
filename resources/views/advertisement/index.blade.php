@section('title', '')

<x-layouts.app>

    <!-- Cards -->
    <section class="max-w-4xl mx-auto py-10 px-4 flex-1 space-y-6">
        <h2 class="text-lg font-semibold mb-6">All Ad Listings</h2>
        @foreach ($advertisements as $ad)
            <!-- Ad Card -->
            <div class="bg-white rounded shadow overflow-hidden flex flex-col md:flex-row">
                <div class="md:w-1/3 w-full relative">
                    <img src="{{ $ad->image_url ?? 'https://via.placeholder.com/300x200' }}" alt="{{ $ad->title }}"
                         class="object-cover w-full h-full"/>
                </div>
                <div class="md:w-2/3 p-4 flex flex-col justify-between">
                    <div>
                        <p class="text-xs text-gray-400 mb-1">{{ $ad->category->name ?? 'Uncategorized' }}</p>
                        <h2 class="text-lg font-semibold">{{ $ad->title }}</h2>
                        <p class="text-sm text-gray-500 mt-1">{{ $ad->location }}</p>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-indigo-600 font-bold">${{ number_format($ad->price, 2) }}</span>
                        <button class="text-gray-400 hover:text-red-500 text-xl">♡</button>
                    </div>
                </div>
            </div>
        @endforeach

        {{ $advertisements->links() }}
    </section>

</x-layouts.app>

