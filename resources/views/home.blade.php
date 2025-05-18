@section('title', '')

<x-layouts.app>

    <!-- Categories -->
    <section class="max-w-6xl mx-auto py-10 px-4">
        <h2 class="text-lg font-semibold mb-6">Browse items by category</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
            @foreach ($categories as $category)
                <div>
                    <a href="{{ route('advertisements.index', ['category' => $category->id]) }}" class="flex flex-col items-center text-center">
                        <img src="{{ 'https://picsum.photos/id/' . rand(1, 400) . '/48/48' }}" alt="{{ $category->name }}" />
                        <p class="font-medium mt-2">{{ $category->name }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    @livewire('advertisements-card')

</x-layouts.app>
