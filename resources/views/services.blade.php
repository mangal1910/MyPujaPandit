<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - MyPoojaPandit</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Custom gradient for buttons */
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

    <!-- Header Section (reused from previous page, assuming a common layout) -->
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
                <button class="flex items-center space-x-2 px-4 py-2 rounded-full border border-gray-300 hover:bg-gray-50 transition duration-300">
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

    <!-- Available Online Service Section (Top of Service Page) -->
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

    <!-- All Online Service Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-12 text-gradient">All Online Service</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <!-- Service Item 1: Annaprashan Sanskar Puja -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Annaprashan') }}" alt="Annaprashan Sanskar Puja" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Annaprashan Sanskar Puja</h3>
                    </div>
                </div>
                <!-- Service Item 2: Satyanarayan Puja -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Satyanarayan') }}" alt="Satyanarayan Puja" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Satyanarayan Puja</h3>
                    </div>
                </div>
                <!-- Service Item 3: Bhoomi Puja -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Bhoomi') }}" alt="Bhoomi Puja" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Bhoomi Puja</h3>
                    </div>
                </div>
                <!-- Service Item 4: Ayush Havan -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Ayush') }}" alt="Ayush Havan" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Ayush Havan</h3>
                    </div>
                </div>
                <!-- Service Item 5: Lakshmi Kubera Havan -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Lakshmi') }}" alt="Lakshmi Kubera Havan" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Lakshmi Kubera Havan</h3>
                    </div>
                </div>
                <!-- Service Item 6: Maha Mrityunjaya Jaap Puja -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Mrityunjaya') }}" alt="Maha Mrityunjaya Jaap Puja" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Maha Mrityunjaya Jaap Puja</h3>
                    </div>
                </div>
                <!-- Service Item 7: Santan Gopal Mantra Jaap -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Santan') }}" alt="Santan Gopal Mantra Jaap" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Santan Gopal Mantra Jaap</h3>
                    </div>
                </div>
                <!-- Service Item 8: Janam Kundali Creation -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Kundali') }}" alt="Janam Kundali Creation" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Janam Kundali Creation</h3>
                    </div>
                </div>
                <!-- Service Item 9: Kaal Sarp Dosh Check & Nivaran -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Kaal Sarp') }}" alt="Kaal Sarp Dosh Check & Nivaran" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Kaal Sarp Dosh Check & Nivaran</h3>
                    </div>
                </div>
                <!-- Service Item 10: Kundali Matching -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Matching') }}" alt="Kundali Matching" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Kundali Matching</h3>
                    </div>
                </div>
                <!-- Service Item 11: Personal Horoscope Reading -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Horoscope') }}" alt="Personal Horoscope Reading" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Personal Horoscope Reading</h3>
                    </div>
                </div>
                <!-- Service Item 12: Career & Business Astrology Guidance -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="{{ asset('https://placehold.co/400x300/FFDDC1/FF7B00?text=Career Astrology') }}" alt="Career & Business Astrology Guidance" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Career & Business Astrology Guidance</h3>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center items-center space-x-2 mt-12">
                <button class="w-10 h-10 rounded-full bg-orange-500 text-white font-semibold flex items-center justify-center shadow-md">1</button>
                <button class="w-10 h-10 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 font-semibold flex items-center justify-center transition duration-300">2</button>
                <button class="w-10 h-10 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 font-semibold flex items-center justify-center transition duration-300">3</button>
                <button class="w-10 h-10 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 font-semibold flex items-center justify-center transition duration-300">4</button>
                <button class="w-10 h-10 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 font-semibold flex items-center justify-center transition duration-300">5</button>
                <button class="w-10 h-10 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 font-semibold flex items-center justify-center transition duration-300">6</button>
                <button class="w-10 h-10 rounded-full bg-gray-200 text-gray-700 hover:bg-gray-300 font-semibold flex items-center justify-center transition duration-300">
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Footer Section (reused from previous page) -->
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
