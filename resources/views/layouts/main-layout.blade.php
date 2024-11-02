<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAKKUO - Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-white">

    <!-- Header -->
    <header class="sticky top-0 z-50 bg-white border-b border-gray-200">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo and Mobile Menu -->
                <div class="flex items-center">
                    <button
                        class="p-2 -ml-2 text-gray-600 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        aria-label="Open menu"
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
                                d="M4 6h16M4 12h16M4 18h16"
                            />
                        </svg>
                    </button>
                    <a href="/" class="flex items-center">
                        <span class="ml-2 text-2xl font-bold text-indigo-600 lg:ml-0">BAKKUO</span>
                    </a>
                </div>

                <!-- Search Bar -->
                <div class="items-center justify-center flex-1 hidden px-8 lg:flex">
                    <div class="w-full max-w-lg">
                        <div class="relative">
                            <input
                                type="text"
                                class="w-full py-2.5 pl-4 pr-12 text-sm border border-gray-300 rounded-lg bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors duration-200"
                                placeholder="Search for products..."
                            />
                            <button
                                class="absolute right-0 p-2.5 text-gray-500 hover:text-indigo-600 focus:outline-none"
                                aria-label="Search"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Navigation Icons -->
                <div class="flex items-center space-x-6">
                    <button
                        class="p-2 text-gray-600 transition-colors duration-200 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-1"
                        aria-label="Wishlist"
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
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
                            />
                        </svg>
                    </button>

                    <button
                        class="p-2 text-gray-600 transition-colors duration-200 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-1"
                        aria-label="Shopping cart"
                    >
                    <div class="flex items-center mr-2">
                        <svg
                            class="w-5 h-5"
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
                        <div class="flex flex-col justify-center w-5 h-5 text-sm font-medium text-center text-white bg-blue-600 rounded-full">0</div>
                    </div>

                    </button>

                    <button
                        class="p-2 text-gray-600 transition-colors duration-200 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-1"
                        aria-label="User account"
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
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                            />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>


    {{ $slot }}


    <!-- Footer -->
    <footer class="mt-8 bg-gray-100">
        <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-4">
                <div>
                    <h3 class="text-sm font-semibold tracking-wider text-gray-600 uppercase">About</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-base text-gray-500 hover:text-gray-900">About Us</a></li>
                        <li><a href="#" class="text-base text-gray-500 hover:text-gray-900">Careers</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold tracking-wider text-gray-600 uppercase">Shop</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-base text-gray-500 hover:text-gray-900">New Arrivals</a></li>
                        <li><a href="#" class="text-base text-gray-500 hover:text-gray-900">Best Sellers</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold tracking-wider text-gray-600 uppercase">Support</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-base text-gray-500 hover:text-gray-900">Contact Us</a></li>
                        <li><a href="#" class="text-base text-gray-500 hover:text-gray-900">FAQs</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold tracking-wider text-gray-600 uppercase">Legal</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-base text-gray-500 hover:text-gray-900">Privacy Policy</a></li>
                        <li><a href="#" class="text-base text-gray-500 hover:text-gray-900">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="pt-8 mt-12 border-t border-gray-200">
                <p class="text-base text-center text-gray-400">© 2024 BAKKUO. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>
