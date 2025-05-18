@section('title', '')

<x-layouts.app>

    <!-- Cards -->
    <section class="max-w-4xl mx-auto py-10 px-4 flex-1 space-y-6">
        <h2 class="text-lg font-semibold mb-6">All Ad Listings</h2>
        @if ($advertisements->isEmpty())
            <p class="text-gray-500">No advertisements found.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($advertisements as $ad)
                    <div class="bg-white rounded shadow overflow-hidden">
                        <a href="{{ route('advertisements.show', $ad->slug) }}">
                            <img src="{{ 'https://picsum.photos/id/' . rand(1, 400) . '/300/300' }}" alt="{{ $ad->title }}" class="w-full h-48 object-cover">
                        </a>
                        <div class="p-4">
                            <h3 class="text-lg font-semibold">
                                <a href="{{ route('advertisements.show', $ad->slug) }}">{{ $ad->title }}</a>
                            </h3>
                            <p class="text-sm text-gray-500">{{ $ad->location }}</p>
                            <p class="text-indigo-600 font-bold mt-2">${{ number_format($ad->price, 2) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-6">
                {{ $advertisements->links() }}
            </div>
        @endif
    </section>

</x-layouts.app>

