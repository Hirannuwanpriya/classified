@section('title', $advertisement->title)

<x-layouts.app>
    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto grid max-w-2xl grid-cols-1 grid-rows-1 items-start gap-x-8 gap-y-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">

            <div class="lg:col-start-3 lg:row-end-1">
                <h2 class="sr-only">Summary</h2>
                <div class="rounded-lg bg-gray-50 shadow-xs ring-1 ring-gray-900/5">
                    <!-- Contact Info -->
                    <div class="mb-4 border-t-gray-300 px-4 py-8 ">
                        <p class="text-sm text-gray-700"><strong>Opening Hours:</strong> {{ $advertisement->opening_hours }}</p>
                        <p class="text-sm text-gray-700"><strong>Location:</strong> {{ $advertisement->location }}</p>
                        <p class="text-sm text-gray-700"><strong>Url:</strong> <a href="{{ $advertisement->website_url }}">Link</a></p>
                    </div>
                </div>
            </div>

            <div class="-mx-4 px-4 py-8 shadow-xs ring-1 ring-gray-900/5 sm:mx-0 sm:rounded-lg sm:px-8 sm:pb-14 lg:col-span-2 lg:row-span-2 lg:row-end-2 xl:px-16 xl:pt-16 xl:pb-20">
                <!-- Title -->
                <div class="mb-4">
                    <h2 class="text-xl font-bold text-gray-500">{{ $advertisement->category->name }}</h2>
                    <h1 class="text-2xl font-bold">{{ $advertisement->title }}</h1>
                    <p class="text-sm text-gray-600">Posted on {{ $advertisement->published_at->format('d M g:i a') }}, {{ $advertisement->location }}</p>
                </div>

                <!-- Image and Gallery -->
                <div class="mb-4">
                    <img src="{{ 'https://picsum.photos/id/' . rand(1, 400) . '/200/200' }}" alt="Land Image" class="w-full rounded-md border-gray-300">
                    <div class="flex gap-2 mt-2">
                        <img src="{{ 'https://picsum.photos/id/' . rand(1, 400) . '/50/50' }}"/>
                        <img src="{{ 'https://picsum.photos/id/' . rand(1, 400) . '/50/50' }}"/>
                        <img src="{{ 'https://picsum.photos/id/' . rand(1, 400) . '/50/50' }}"/>
                    </div>
                </div>

                <!-- Price and Info -->
                <div class="mb-4">
                    <p class="text-green-600 font-bold text-xl">$ {{ number_format(rand(100, 10000), 2) }}</p>
                </div>

                <!-- Description -->
                <div class="mb-4">
                    <h2 class="text-lg font-semibold mb-1">Description</h2>
                    <p class="text-gray-700 text-sm">{{ $advertisement->content }}</p>
                </div>
            </div>

        </div>
    </div>
</x-layouts.app>
