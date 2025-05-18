@section('title', '')

<x-layouts.app>

    <!-- Cards -->
    <section class="max-w-4xl mx-auto py-10 px-4 flex-1 space-y-6">
        <h2 class="text-lg font-semibold mb-6">All Ad Listings</h2>
        @foreach ($advertisements as $ad)
            <!-- Ad Card -->
            <div class="bg-white rounded shadow overflow-hidden flex flex-col md:flex-row">
                <div class="md:w-1/3 w-full relative">
                    <a href="{{ route('advertisements.show', $ad->slug) }}">
                        <img src="{{ 'https://picsum.photos/id/' . rand(1, 400) . '/100/100' }}" alt="{{ $ad->title }}"
                             class="object-cover w-full h-full"/>
                    </a>
                </div>
                <div class="md:w-2/3 p-4 flex flex-col justify-between">
                    <div>
                        <p class="text-xs text-gray-400 mb-1">{{ $ad->category->name ?? 'Uncategorized' }}</p>
                        <h2 class="text-lg font-semibold">
                            <a href="{{ route('advertisements.show', $ad->slug) }}">{{ $ad->title }}</a>
                        </h2>
                        <p class="text-sm text-gray-500 mt-1">{{ $ad->location }}</p>
                        <p class="mt-4">
                            {{ Str::limit($ad->content, 100, '...') }}
                        </p>
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-indigo-600 font-bold">${{ number_format(rand(100, 10000), 2) }}</span>
                    </div>
                </div>
            </div>
        @endforeach

        {{ $advertisements->links() }}
    </section>

</x-layouts.app>

