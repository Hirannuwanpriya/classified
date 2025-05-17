@section('title', '')

<x-layouts.app>


    <!-- Header -->
    <header class="bg-[#3056d3] text-white px-4 py-4">
        <div class="flex flex-wrap justify-between items-center gap-4">
            <div class="flex items-center space-x-3">
                <span class="text-2xl font-bold">EVICIO Classified</span>
                <button class="text-sm">All ads</button>
            </div>
            <div class="flex items-center space-x-4 flex-wrap">
                <button class="bg-violet-400 text-black font-bold px-4 py-2 rounded">POST YOUR AD</button>
                <button class="text-sm flex items-center space-x-1">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4S14.21 4 12 4 8 5.79 8 8s1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                    <span>Login</span>
                </button>
            </div>
        </div>
    </header>

    <!-- Search Bar -->
    <section class="bg-[#3056d3] py-6 px-4">
        <div class="max-w-xl mx-auto">
            <div class="bg-white rounded-full flex items-center px-4 py-2 shadow">
                <input
                        type="text"
                        placeholder="What are you looking for?"
                        class="flex-grow outline-none px-2 py-2 text-gray-700 rounded-l-full"
                />
                <button class="bg-violet-300 p-3 rounded-full">
                    <svg class="w-5 h-5 text-black" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0016 9.5 6.5 6.5 0 109.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l4.25 4.25c.41.41 1.09.41 1.5 0s.41-1.09 0-1.5L15.5 14zM10 14a4 4 0 110-8 4 4 0 010 8z"/></svg>
                </button>
            </div>
        </div>
    </section>

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

    <!-- Cards -->
    <section class="max-w-4xl mx-auto py-10 px-4 flex-1 space-y-6">
        <h2 class="text-lg font-semibold mb-6">All Ad Listings</h2>
        <!-- Ad Card -->
        <div class="bg-white rounded shadow overflow-hidden flex flex-col md:flex-row">
            <div class="md:w-1/3 w-full relative">
                <img src="https://via.placeholder.com/300x200" alt="Travel Kit" class="object-cover w-full h-full"/>
            </div>
            <div class="md:w-2/3 p-4 flex flex-col justify-between">
                <div>
                    <p class="text-xs text-gray-400 mb-1">Others</p>
                    <h2 class="text-lg font-semibold">Travel Kit</h2>
                    <p class="text-sm text-gray-500 mt-1">San Francisco</p>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <span class="text-indigo-600 font-bold">$580.00</span>
                    <button class="text-gray-400 hover:text-red-500 text-xl">♡</button>
                </div>
            </div>
        </div>

        <!-- More ad cards can follow the same structure -->
    </section>


</x-layouts.app>
