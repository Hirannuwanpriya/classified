@section('title', '')

<x-layouts.app>

    <!-- Categories -->
    <section class="max-w-6xl mx-auto py-10 px-4">
        <h2 class="text-lg font-semibold mb-6">Browse items by category</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
            <!-- Category Item Example -->
            <div class="flex flex-col items-center text-center">
                <img src="https://img.icons8.com/color/48/000000/smartphone-tablet.png" alt="Electronics"/>
                <p class="font-medium mt-2">Electronics</p>
                <p class="text-sm text-gray-500">132,284 ads</p>
            </div>

            <div class="flex flex-col items-center text-center">
                <img src="https://img.icons8.com/color/48/000000/home.png" alt="Property"/>
                <p class="font-medium mt-2">Property</p>
                <p class="text-sm text-gray-500">72,013 ads</p>
            </div>

            <div class="flex flex-col items-center text-center">
                <img src="https://img.icons8.com/color/48/000000/car--v1.png" alt="Vehicles"/>
                <p class="font-medium mt-2">Vehicles</p>
                <p class="text-sm text-gray-500">58,935 ads</p>
            </div>

            <div class="flex flex-col items-center text-center">
                <img src="https://img.icons8.com/color/48/000000/repair.png" alt="Services"/>
                <p class="font-medium mt-2">Services</p>
                <p class="text-sm text-gray-500">21,711 ads</p>
            </div>

            <div class="flex flex-col items-center text-center">
                <img src="https://img.icons8.com/color/48/000000/garden.png" alt="Home & Garden"/>
                <p class="font-medium mt-2">Home & Garden</p>
                <p class="text-sm text-gray-500">21,663 ads</p>
            </div>

            <div class="flex flex-col items-center text-center">
                <img src="https://img.icons8.com/color/48/000000/briefcase.png" alt="Business & Industry"/>
                <p class="font-medium mt-2">Business & Industry</p>
                <p class="text-sm text-gray-500">13,170 ads</p>
            </div>

            <!-- Add more categories as needed following the same structure -->
        </div>
    </section>

    @livewire('advertisements-card')

</x-layouts.app>
