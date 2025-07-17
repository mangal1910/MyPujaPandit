<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPoojaPandit - Sacred Rituals</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .btn-gradient {
            background: linear-gradient(to right, #FF7B00, #FF9F00);
        }
        .text-gradient {
            background: linear-gradient(to right, #FF7B00, #FF9F00);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="bg-white text-gray-800">

    <!-- Header Section -->
    <header class="bg-white shadow-sm">
        <nav class="container mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <!-- Placeholder for Logo -->
                <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center">
                    <i class="fas fa-om text-gray-600"></i>
                </div>
                <span class="font-bold text-lg">Pandit</span>
            </div>
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{route('homepage')}}" class="text-gray-600 hover:text-orange-500 font-medium">Home</a>
                <a href="{{route('services')}}" class="text-gray-600 hover:text-orange-500 font-medium">Service</a>
                <a href="{{route('shop')}}" class="text-gray-600 hover:text-orange-500 font-medium">Shop</a>
                <a href="{{route('about')}}" class="text-gray-600 hover:text-orange-500 font-medium">About Us</a>
                <a href="{{route('blog')}}" class="text-gray-600 hover:text-orange-500 font-medium">Blog</a>
                <a href="{{route('contact')}}" class="text-gray-600 hover:text-orange-500 font-medium">Contact Us</a>
            </div>
            <div class="flex items-center space-x-4">
                <div class="hidden md:flex items-center space-x-2 text-gray-600">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Set Location</span>
                </div>
                <button  class="flex items-center space-x-2 px-1 py-1 rounded-full border border-gray-300 hover:bg-gray-50 transition duration-300">
                    <i class="fas fa-search"></i>
                    <span class="hidden md:block">Search</span>
                </button>
                <!-- Placeholder for right-most icon -->
                <a href="{{ route('login') }}" class="px-4 py-2 rounded-full bg-white border border-orange-500 text-orange-500 font-semibold hover:bg-orange-500 hover:text-white transition duration-300">
                    Login
                </a>
                <a href="{{ route('register') }}" class="px-4 py-2 rounded-full bg-orange-500 text-white font-semibold hover:bg-orange-600 transition duration-300">
                    Sign Up
                </a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-cover bg-center h-[600px] flex items-center justify-center rounded-b-lg overflow-hidden" style="background-image: url('{{ asset('image_f1cf05.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-50 rounded-b-lg"></div>
        <div class="relative z-10 text-white text-center px-4 max-w-4xl">
            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight mb-6 rounded-lg">
                Find Experienced Pandits for Your Sacred Rituals
            </h1>
            <p class="text-lg md:text-xl mb-8 rounded-lg">
                Book verified and experienced pandits for all your religious ceremonies. Authentic rituals performed with devotion and tradition.
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <button class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-8 rounded-full shadow-lg transition duration-300">
                    Book a pandit now
                </button>
                <button class="bg-transparent border-2 border-white hover:bg-white hover:text-orange-500 text-white font-semibold py-3 px-8 rounded-full shadow-lg transition duration-300">
                    View services
                </button>
            </div>
        </div>
    </section>

    <!-- Available Online Service Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-12 text-gradient">Available Online Service</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FEEBC8/FF7B00?text=Pandit') }}" alt="Pandit" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Vedic Puja</h3>
                        <p class="text-gray-600">Experience traditional Vedic rituals.</p>
                    </div>
                </div>
                <!-- Service Card 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FEEBC8/FF7B00?text=Astrology') }}" alt="Astrology" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Astrology Services</h3>
                        <p class="text-gray-600">Get insights into your future.</p>
                    </div>
                </div>
                <!-- Service Card 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FEEBC8/FF7B00?text=Ganesha') }}" alt="Ganesha" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Ganesh Puja</h3>
                        <p class="text-gray-600">Offer prayers to Lord Ganesha.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trending Services Section -->
    <section class="py-16 bg-orange-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-12 text-gradient">Trending Services</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Trending Service Card 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Puja') }}" alt="Puja" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Vastu Shanti Puja</h3>
                    </div>
                </div>
                <!-- Trending Service Card 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Temple') }}" alt="Temple" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Kaal Sarp Dosh Nivaran Puja</h3>
                    </div>
                </div>
                <!-- Trending Service Card 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Bajrang') }}" alt="Bajrang Baan Path" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Bajrang Baan Path</h3>
                    </div>
                </div>
                <!-- Trending Service Card 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Ritual') }}" alt="Ritual" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Satyanarayan Puja</h3>
                    </div>
                </div>
            </div>
            <button class="mt-12 bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-8 rounded-full shadow-lg transition duration-300">
                View All Services
            </button>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-12 text-gradient">Stats</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Stat Card 1 -->
                <div class="bg-orange-50 rounded-lg p-8 shadow-md flex flex-col items-center justify-center transform transition duration-300 hover:scale-105">
                    <div class="bg-orange-200 p-4 rounded-full mb-4">
                        <i class="fas fa-shopping-basket text-orange-600 text-3xl"></i>
                    </div>
                    <h3 class="text-4xl font-bold text-orange-700 mb-2">30+ Services</h3>
                    <p class="text-gray-600 text-center">Explore 30+ Vedic Puja Services performed by experienced Pandits, tailored for all your spiritual needs.</p>
                </div>
                <!-- Stat Card 2 -->
                <div class="bg-orange-50 rounded-lg p-8 shadow-md flex flex-col items-center justify-center transform transition duration-300 hover:scale-105">
                    <div class="bg-orange-200 p-4 rounded-full mb-4">
                        <i class="fas fa-book text-orange-600 text-3xl"></i>
                    </div>
                    <h3 class="text-4xl font-bold text-orange-700 mb-2">20651+ Bookings</h3>
                    <p class="text-gray-600 text-center">Trusted by 20,000+ families with over 20,651 successful puja bookings across India.</p>
                </div>
                <!-- Stat Card 3 -->
                <div class="bg-orange-50 rounded-lg p-8 shadow-md flex flex-col items-center justify-center transform transition duration-300 hover:scale-105">
                    <div class="bg-orange-200 p-4 rounded-full mb-4">
                        <i class="fas fa-smile text-orange-600 text-3xl"></i>
                    </div>
                    <h3 class="text-4xl font-bold text-orange-700 mb-2">30000+ Customers</h3>
                    <p class="text-gray-600 text-center">Serving 30,000+ happy customers with authentic and hassle-free puja experiences.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-orange-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-12 text-gradient">Testimonials</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Testimonial Card 1 -->
                <div class="bg-white rounded-lg p-6 shadow-md flex flex-col items-center text-center transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/80x80/FFDDC1/FF7B00?text=User1') }}" alt="Harshit Agarwal" class="w-20 h-20 rounded-full object-cover mb-4">
                    <p class="text-gray-700 mb-4">"Booking a pandit through MyPujaPandit was incredibly easy, and the entire Griha Pravesh ceremony was performed flawlessly."</p>
                    <p class="font-semibold text-gray-800">Harshit Agarwal, Lucknow</p>
                    <div class="flex text-yellow-500 mt-2">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
                <!-- Testimonial Card 2 -->
                <div class="bg-white rounded-lg p-6 shadow-md flex flex-col items-center text-center transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/80x80/FFDDC1/FF7B00?text=User2') }}" alt="Ramesh Jha" class="w-20 h-20 rounded-full object-cover mb-4">
                    <p class="text-gray-700 mb-4">"MyPujaPandit offers hassle-free pandit booking services in India for performing different pujas."</p>
                    <p class="font-semibold text-gray-800">Ramesh Jha, Patna</p>
                    <div class="flex text-yellow-500 mt-2">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <!-- Testimonial Card 3 -->
                <div class="bg-white rounded-lg p-6 shadow-md flex flex-col items-center text-center transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/80x80/FFDDC1/FF7B00?text=User3') }}" alt="Ankit Sharma" class="w-20 h-20 rounded-full object-cover mb-4">
                    <p class="text-gray-700 mb-4">"The Ganesh Puja worked wonders! I got the job call I had been waiting for. Blessed to have chosen this service."</p>
                    <p class="font-semibold text-gray-800">Ankit Sharma, Delhi</p>
                    <div class="flex text-yellow-500 mt-2">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                </div>
                <!-- Testimonial Card 4 -->
                <div class="bg-white rounded-lg p-6 shadow-md flex flex-col items-center text-center transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/80x80/FFDDC1/FF7B00?text=User4') }}" alt="Lalita Patil" class="w-20 h-20 rounded-full object-cover mb-4">
                    <p class="text-gray-700 mb-4">"After the Shani Yogya, I finally had peaceful sleep—no more stress or uneasiness. Thank you for the divine support."</p>
                    <p class="font-semibold text-gray-800">Lalita Patil, Pune</p>
                    <div class="flex text-yellow-500 mt-2">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest from Blog Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-12 text-gradient">Latest from Blog</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Blog Post 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/600x400/FEEBC8/FF7B00?text=Blog1') }}" alt="Blog Post 1" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-6 text-left">
                        <div class="flex items-center text-gray-500 text-sm mb-2">
                            <i class="far fa-calendar-alt mr-2"></i><span>May 14, 2025</span>
                            <span class="mx-2">•</span>
                            <i class="fas fa-tag mr-2"></i><span>Spirituality</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Top 10 Famous Hindu Saints Who Are Still Inspiring India Today</h3>
                        <a href="#" class="text-orange-500 hover:underline font-medium">Read More</a>
                    </div>
                </div>
                <!-- Blog Post 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/600x400/FEEBC8/FF7B00?text=Blog2') }}" alt="Blog Post 2" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-6 text-left">
                        <div class="flex items-center text-gray-500 text-sm mb-2">
                            <i class="far fa-calendar-alt mr-2"></i><span>June 3, 2025</span>
                            <span class="mx-2">•</span>
                            <i class="fas fa-tag mr-2"></i><span>Festival Fast</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Indian Wedding Pre-Wedding Rituals Explained: Mehndi, Haldi, Sangeet, and...</h3>
                        <a href="#" class="text-orange-500 hover:underline font-medium">Read More</a>
                    </div>
                </div>
                <!-- Blog Post 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/600x400/FEEBC8/FF7B00?text=Blog3') }}" alt="Blog Post 3" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-6 text-left">
                        <div class="flex items-center text-gray-500 text-sm mb-2">
                            <i class="far fa-calendar-alt mr-2"></i><span>May 30, 2025</span>
                            <span class="mx-2">•</span>
                            <i class="fas fa-tag mr-2"></i><span>Temple Mandir</span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Mathura & Vrindavan: Top Tourist Places, Temples, and the Divine Significance ...</h3>
                        <a href="#" class="text-orange-500 hover:underline font-medium">Read More</a>
                    </div>
                </div>
            </div>
            <button class="mt-12 bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-8 rounded-full shadow-lg transition duration-300">
                View All Blogs
            </button>
        </div>
    </section>

    <!-- Join as a Partner Section -->
    <section class="py-16 bg-orange-50">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="text-3xl font-bold mb-6 text-gradient">Join as a Partner</h2>
                <p class="text-gray-700 text-lg mb-6">
                    Are you a qualified Pandit or spiritual service provider? Partner with us to reach thousands of devotees looking for authentic Vedic rituals and astrology services. Fill in your details and become a part of our trusted network.
                </p>
                <button class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-8 rounded-full shadow-lg transition duration-300">
                    Join as Partner
                </button>
            </div>
            <div class="md:w-1/2">
                <img src="{{ asset('https://placehold.co/600x400/FEEBC8/FF7B00?text=Temple') }}" alt="Temple" class="w-full h-auto rounded-lg shadow-lg">
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-gray-900 text-gray-300 py-16">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Company</h3>
                <ul>
                    <li class="mb-2"><a href="#" class="hover:text-orange-500">About Us</a></li>
                    <li class="mb-2"><a href="#" class="hover:text-orange-500">Contact Us</a></li>
                    <li class="mb-2"><a href="#" class="hover:text-orange-500">Privacy Policy</a></li>
                    <li class="mb-2"><a href="#" class="hover:text-orange-500">Terms & Conditions</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Partnership</h3>
                <ul>
                    <li class="mb-2"><a href="#" class="hover:text-orange-500">Vendor Signup</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Other links</h3>
                <ul>
                    <li class="mb-2"><a href="#" class="hover:text-orange-500">MyPoojaPandit Blog</a></li>
                    <li class="mb-2"><a href="#" class="hover:text-orange-500">Feedback & Suggestions</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Contact Us</h3>
                <p class="mb-2">2nd Floor, Leeavart Central, Patliputra, Patna</p>
                <p class="mb-2"><i class="fas fa-phone-alt mr-2"></i>851871 81725</p>
                <p class="mb-4"><i class="fas fa-envelope mr-2"></i>care@mypujapandit.com</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-orange-500 text-xl"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-gray-400 hover:text-orange-500 text-xl"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-400 hover:text-orange-500 text-xl"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="text-gray-400 hover:text-orange-500 text-xl"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="text-center text-gray-500 text-sm mt-8">
            &copy; {{ date('Y') }} MyPoojaPandit. All rights reserved.
        </div>
    </footer>

</body>
</html>
