<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - MyPoojaPandit</title>
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

    <!-- About Us Hero Section -->
    <section class="relative bg-cover bg-center h-[400px] flex items-center justify-center rounded-b-lg overflow-hidden" >
        <div class="absolute inset-0 bg-black opacity-50 rounded-b-lg"></div>
        <div class="relative z-10 text-white text-center px-4 max-w-4xl">
            <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-4 rounded-lg">
                About Us
            </h1>
            <p class="text-lg md:text-xl rounded-lg">
                Your trusted platform for authentic Vedic rituals, experienced Pandits, and spiritual guidance – anytime, anywhere.
            </p>
        </div>
    </section>

    <!-- Introduction Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-gradient text-center">About Us: Your Trusted Portal for All Puja Solutions</h2>
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="md:w-1/2 text-gray-700 text-lg leading-relaxed">
                    <p class="mb-4">Welcome to MyPujaPandit, your one-stop portal for all your puja needs. We are dedicated to providing seamless and hassle-free online booking services for verified pandits, ensuring that every sacred ritual is performed with the utmost devotion and authenticity.</p>
                    <h3 class="text-2xl font-semibold text-orange-600 mb-4">Our Origins: Rooted in the Land of Mithila</h3>
                    <p class="mb-4">MyPujaPandit proudly traces its origins to the ancient and culturally rich region of Mithila, famously known as the home of learned Brahmins and revered pandits. Mithila, a land steeped in Vedic traditions and spiritual wisdom, has given birth to some of the most respected figures in Hindu mythology and history. Our pandits are mostly from Mithila, and the core management hails from this sacred region, carrying forward the legacy of sage King Janaka, the father of Sita, and the birthplace of great scholars like Yajnavalkya and Vidyapati.</p>
                    <h3 class="text-2xl font-semibold text-orange-600 mb-4">Our Mission: Authenticity and Convenience</h3>
                    <p>At MyPujaPandit, we aim to bridge the gap between tradition and modernity by bringing authentic puja services to your doorstep. We understand the importance of performing religious rituals with precision and devotion, and our platform connects you with experienced and verified pandits who specialize in a wide range of pujas. Whether it's a Grih Pravesh, Satyanarayan Puja, or New Office Opening Puja, we ensure that every ceremony is conducted according to Vedic traditions and with the blessings of the divine.</p>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('https://placehold.co/600x400/FEEBC8/FF7B00?text=Temple+Ritual') }}" alt="Temple Ritual" class="w-full h-auto rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features Section -->
    <section class="py-16 bg-orange-50">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-12 text-gradient">About Us: Your Trusted Portal for All Puja Solutions</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature Card 1 -->
                <div class="bg-white rounded-lg p-6 shadow-md flex flex-col items-center text-center transform transition duration-300 hover:scale-105">
                    <div class="bg-orange-200 p-4 rounded-full mb-4">
                        <i class="fas fa-check-circle text-orange-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Verified & Experienced Pandits</h3>
                    <p class="text-gray-600">All our pandits are thoroughly vetted and have years of experience conducting various Hindu rituals.</p>
                </div>
                <!-- Feature Card 2 -->
                <div class="bg-white rounded-lg p-6 shadow-md flex flex-col items-center text-center transform transition duration-300 hover:scale-105">
                    <div class="bg-orange-200 p-4 rounded-full mb-4">
                        <i class="fas fa-check-circle text-orange-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Seamless Online Booking</h3>
                    <p class="text-gray-600">Our user-friendly platform allows you to book a pandit from the comfort of your home, ensuring convenience and peace of mind.</p>
                </div>
                <!-- Feature Card 3 -->
                <div class="bg-white rounded-lg p-6 shadow-md flex flex-col items-center text-center transform transition duration-300 hover:scale-105">
                    <div class="bg-orange-200 p-4 rounded-full mb-4">
                        <i class="fas fa-check-circle text-orange-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Personalized Services</h3>
                    <p class="text-gray-600">We cater to your specific needs, offering customized puja packages that include all the necessary materials and rituals.</p>
                </div>
                <!-- Feature Card 4 -->
                <div class="bg-white rounded-lg p-6 shadow-md flex flex-col items-center text-center transform transition duration-300 hover:scale-105">
                    <div class="bg-orange-200 p-4 rounded-full mb-4">
                        <i class="fas fa-check-circle text-orange-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Heritage and Trust</h3>
                    <p class="text-gray-600">As a portal born in the heart of Mithilia, we bring you the trust and authenticity that comes from centuries of spiritual heritage.</p>
                </div>
                <!-- Feature Card 5 -->
                <div class="bg-white rounded-lg p-6 shadow-md flex flex-col items-center text-center transform transition duration-300 hover:scale-105">
                    <div class="bg-orange-200 p-4 rounded-full mb-4">
                        <i class="fas fa-check-circle text-orange-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Transparent Pricing</h3>
                    <p class="text-gray-600">No hidden costs or surprises. We provide clear pricing for all our services upfront.</p>
                </div>
                <!-- Feature Card 6 -->
                <div class="bg-white rounded-lg p-6 shadow-md flex flex-col items-center text-center transform transition duration-300 hover:scale-105">
                    <div class="bg-orange-200 p-4 rounded-full mb-4">
                        <i class="fas fa-check-circle text-orange-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Customer Support</h3>
                    <p class="text-gray-600">Our dedicated team is available to assist you with any questions or concerns throughout your booking process.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Vision Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-gradient text-center">Our Vision: Spreading Spirituality Across the Globe</h2>
            <div class="flex flex-col md:flex-row items-center gap-8">
                <div class="md:w-1/2">
                    <img src="{{ asset('https://placehold.co/600x400/FEEBC8/FF7B00?text=Spiritual+Leader') }}" alt="Spiritual Leader" class="w-full h-auto rounded-lg shadow-lg">
                </div>
                <div class="md:w-1/2 text-gray-700 text-lg leading-relaxed">
                    <p class="mb-4">MyPujaPandit is not just a service; it's a movement to keep the spiritual essence of Hindu traditions alive in today's fast-paced world. We aim to spread the knowledge and practice of Vedic rituals across the globe, making it easier for Hindus everywhere to stay connected with their roots.</p>
                    <p>Join us at MyPujaPandit, where tradition meets technology, and let us be your trusted partner in all your spiritual endeavors. Whether you are in India or abroad, our platform ensures that the divine blessings of the puja reach you, wherever you are.</p>
                </div>
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
