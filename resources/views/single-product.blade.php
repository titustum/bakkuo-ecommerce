<x-main-layout>

    @php
    class Product{
        public $image='';
        public $name='';
        public $category='';
        public $price='';
        public $desription='';

        function __construct($image, $name, $category, $price, $desc){
            $this->image = $image;
            $this->name = $name;
            $this->category = $category;
            $this->price = $price;
            $this->description = $desc;
        }
    };

    class Review {
        public $user_name = '';
        public $rating = 5;
        public $comment = '';
        public $time;

        function __construct($user_name, $rating, $comment) {
            $this->user_name = $user_name;
            $this->rating = $rating;
            $this->comment = $comment;
            $this->time = date('Y-m-d H:i:s'); // Formatted time
        }
    }

    $product = new Product(
        'African-wax-print-dress-14.jpg',
        'African Wax Print Dress',
        'Women Clothing',
        123.55,
        "This stunning African Wax Print Dress combines vibrant colors with traditional patterns, perfect for any occasion. Made from high-quality materials, it offers both comfort and style. Dress it up or down for a unique look that celebrates cultural heritage."
    );

    $reviews = [
        new Review("James Og", 4, "Very attractive product but does not last longer than a year before color changes."),
        new Review("Sarah K.", 5, "Absolutely love this dress! The fit is perfect, and I always get compliments when I wear it."),
        new Review("Michael T.", 3, "Nice design, but I found the fabric a bit stiff. Would prefer something softer."),
        new Review("Linda M.", 5, "This dress exceeded my expectations! The colors are vibrant and it’s very comfortable."),
        new Review("Emma W.", 2, "It looks great, but the stitching came undone after the first wash. Disappointed.")
    ];

    $averageRating = count($reviews) > 0 ? array_sum(array_column($reviews, 'rating')) / count($reviews) : 0;

@endphp

<!-- Single Product Page -->
<div class="px-4 py-4 mx-auto mt-8 max-w-7xl sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
        <div class="relative">
            <!-- Product Image -->
            <div class="overflow-hidden bg-gray-100 border border-gray-200 rounded-lg">
                <img
                    src="{{ asset('images/'.$product->image) }}"
                    alt="{{ $product->name }}"
                    class="object-contain object-center w-full h-auto bg-white min-h-[400px]"
                />
            </div>
        </div>

        <div class="flex flex-col justify-between">
            <!-- Product Details -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900">{{ $product->name }}</h2>
                <p class="mt-2 text-lg italic text-gray-600">{{ $product->category }}</p>
                <p class="mt-4 text-xl font-medium text-indigo-600">AUD $ {{ $product->price }}</p>
                <p class="mt-2 text-gray-700">{{ $product->description }}</p>

                <!-- Average Rating Display -->
                <div class="mt-4">
                    <div class="flex items-center">
                        @for ($i = 1; $i <= 5; $i++)
                            <svg
                                class="w-5 h-5 {{ $i <= $averageRating ? 'text-yellow-400' : 'text-gray-300' }}"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path d="M10 15l-6.16 3.243L5.31 12.9 0 8.686l7.47-.645L10 2l2.53 5.041L20 8.686l-5.31 4.214 1.47 5.343L10 15z" />
                            </svg>
                        @endfor
                        <span class="ml-2">({{ count($reviews) }} reviews)</span>
                    </div>
                </div>


                <!-- Add to Cart Button -->
                <div class="mt-4">
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

            <!-- Reviews Section -->
            <div class="mt-8">
                <h3 class="text-xl font-bold text-gray-900">Customer Reviews</h3>
                <div class="mt-4">
                    @foreach ($reviews as $review)
                        <div class="p-4 mb-4 border border-gray-200 rounded-lg">
                            <h4 class="font-semibold text-md">{{ $review->user_name }}</h4>
                            <p class="mt-1 text-sm text-gray-600">Rating: {{ $review->rating }} / 5</p>
                            <p class="mt-2 text-gray-700">{{ $review->comment }}</p>
                        </div>
                    @endforeach
                </div>

                <!-- Review Form -->
                <div class="mt-6">
                    <h4 class="text-lg font-semibold text-gray-900">Leave a Review</h4>
                    <form action="#" method="POST">
                        @csrf
                        <div class="mt-2">
                            <label class="block text-sm font-medium text-gray-700" for="review">Your Review</label>
                            <textarea id="review" name="review" rows="4" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                        </div>
                        <div class="mt-2">
                            <label class="block text-sm font-medium text-gray-700" for="rating">Rating</label>
                            <select id="rating" name="rating" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                <option value="1">1 Star</option>
                                <option value="2">2 Stars</option>
                                <option value="3">3 Stars</option>
                                <option value="4">4 Stars</option>
                                <option value="5">5 Stars</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="px-4 py-2 text-white bg-indigo-600 rounded hover:bg-indigo-700">Submit Review</button>
                        </div>
                    </form>
                </div>


            </div>

            <!-- end reviews section -->
        </div>
    </div>
</div>

</x-main-layout>
