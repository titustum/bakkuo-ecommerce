<x-main-layout>

    <!-- Hero Section -->
    <div class="relative bg-indigo-900">
        <div class="px-4 py-24 mx-auto text-center max-w-7xl sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl md:text-6xl">Discover African Fashion</h1>
            <p class="max-w-2xl mx-auto mt-6 text-xl text-indigo-200">Explore our collection of authentic African clothing and accessories.</p>
            <div class="mt-10">
                <a href="{{ URL::to('products') }}" class="px-8 py-3 font-medium text-indigo-600 transition-colors bg-white rounded-md hover:bg-indigo-50">Shop Now</a>
            </div>
        </div>
    </div>

    <!-- Categories -->
    <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Shop by Category</h2>
            <a href="#" class="text-sm font-semibold text-indigo-600 transition-colors hover:text-indigo-700">
                View All Categories
                <span aria-hidden="true"> →</span>
            </a>
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <!-- Women's Clothing -->
            <a href="#" class="group">
                <div class="relative p-6 overflow-hidden transition-all duration-300 border border-gray-200 rounded-lg bg-gray-50 group-hover:bg-white group-hover:shadow-lg group-hover:border-indigo-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 transition-colors group-hover:text-indigo-600">
                                Women's Clothing
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">150+ items</p>
                        </div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-8 h-8 text-gray-400 transition-transform duration-300 group-hover:text-indigo-600 group-hover:translate-x-1"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6"
                            />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Men's Clothing -->
            <a href="#" class="group">
                <div class="relative p-6 overflow-hidden transition-all duration-300 border border-gray-200 rounded-lg bg-gray-50 group-hover:bg-white group-hover:shadow-lg group-hover:border-indigo-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 transition-colors group-hover:text-indigo-600">
                                Men's Clothing
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">120+ items</p>
                        </div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-8 h-8 text-gray-400 transition-transform duration-300 group-hover:text-indigo-600 group-hover:translate-x-1"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6"
                            />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Men's Footwear -->
            <a href="#" class="group">
                <div class="relative p-6 overflow-hidden transition-all duration-300 border border-gray-200 rounded-lg bg-gray-50 group-hover:bg-white group-hover:shadow-lg group-hover:border-indigo-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 transition-colors group-hover:text-indigo-600">
                                Men's Footwear
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">80+ items</p>
                        </div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-8 h-8 text-gray-400 transition-transform duration-300 group-hover:text-indigo-600 group-hover:translate-x-1"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6"
                            />
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Women's Footwear -->
            <a href="#" class="group">
                <div class="relative p-6 overflow-hidden transition-all duration-300 border border-gray-200 rounded-lg bg-gray-50 group-hover:bg-white group-hover:shadow-lg group-hover:border-indigo-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 transition-colors group-hover:text-indigo-600">
                                Women's Footwear
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">60+ items</p>
                        </div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-8 h-8 text-gray-400 transition-transform duration-300 group-hover:text-indigo-600 group-hover:translate-x-1"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M13 7l5 5m0 0l-5 5m5-5H6"
                            />
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Featured Products -->
    <div class="px-4 py-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-2xl font-bold text-gray-900">Featured Products</h2>
            <a href="#" class="text-sm font-semibold text-indigo-600 transition-colors hover:text-indigo-700">
                View All Products
                <span aria-hidden="true"> →</span>
            </a>
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">


            @php
            class Product{
                public $image='';
                public $name='';
                public $category='';
                public $price='';

                function __construct($image, $name, $category, $price){
                    $this->image = $image;
                    $this->name = $name;
                    $this->category = $category;
                    $this->price = $price;
                }
            };

            $products = [
                new Product('African-wax-print-dress-14.jpg', 'African Wax Print Dress', 'Women Clothing', 123.55),
                new Product('shirt1.jpeg', 'African Polo Shirt', 'Men Clothing', 67.95),
                new Product('shoe7.jpg', 'Quality Maasai Sandals', 'Women Footwear', 57.50),
                new Product('shoe3.jpeg', 'Samburu Fashion Shoe', 'Men Footwear', 88.35),

                new Product('shoe5.webp', 'Somaliland Leather Sandals', 'Men Footwear', 57.50),
                new Product('shirt6.jpg', 'Congo Fashion Shirt', 'Men Clothing', 88.35),
                new Product('African-wax-print-dress-10.webp', 'African Shinny Dress', 'Women Clothing', 122.77),
                new Product('shirt5.jpg', 'Cameroon Style Shirt', 'Men Clothing', 67.95),
            ]
            @endphp

        @foreach ($products as $product)
            <div class="relative group">
                {{-- Image container with hover effect --}}
                <div class="overflow-hidden transition-transform duration-300 bg-gray-100 border border-gray-200 rounded-lg aspect-w-1 aspect-h-1 group-hover:scale-105">
                    <img
                        src="{{ asset('images/'.$product->image) }}"
                        alt="{{ $product->name }}"
                        class="object-contain bg-white object-center w-full h-[300px]"
                    />
                </div>

                {{-- Product info and favorite button --}}
                <div class="flex items-center justify-between mt-4">
                    <div>
                        <h3 class="text-sm font-medium text-gray-800">{{ $product->name }}</h3>
                        <p class="mt-1 text-sm text-gray-600">{{ $product->category }}</p>
                        <p class="mt-1 text-sm font-medium text-indigo-600">AUD $ {{ $product->price }}</p>
                    </div>
                    <button
                        class="p-1.5 text-gray-400 transition-colors duration-300 ease-in-out hover:text-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 rounded-full"
                        aria-label="Add to favorites"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-6 h-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                            />
                        </svg>
                    </button>
                </div>

                {{-- Add to Cart button --}}
                <div class="flex mt-4">
                    <button
                        class="flex items-center justify-center w-full px-4 py-2.5 text-sm font-semibold text-white transition-colors duration-300 bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-opacity-50 active:bg-indigo-800"
                    >
                        <svg
                            class="w-5 h-5 mr-2"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                            />
                        </svg>
                        Add to Cart
                    </button>
                </div>
            </div>
        @endforeach
        </div>
    </div>

</x-main-layout>
