<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
    <titile>Adim Pageant | Landing Page</titile>
    <link rel="shortcut icon" href="{{asset('public/logo.png')}}" type="image/png">
    <style>
        /* Smooth scrolling for anchor links */
        html {
            scroll-behavior: smooth;
        }

        /* Fixed header */
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        /* To offset the fixed header height */
        .content-offset {
            padding-top: 96px; /* Adjust this value if the header height changes */
        }
    </style>
</head>
<body>
<div class="relative bg-teal-950">
    <!-- Header -->
    <header class="bg-slate-900 w-full h-24 flex items-center px-8 justify-between">
        <img class="w-11 h-14" src="{{asset('public/logo.png')}}" alt="Logo"/>
        <nav class="hidden md:flex space-x-8 text-neutral-100 text-base font-bold font-['Inter']">
            <a href="#home" class="hover:underline">HOME</a>
            <a href="#about" class="hover:underline">ABOUT US</a>
            <a href="#contact" class="hover:underline">CONTACT US</a>
        </nav>
        <a href="{{route('login')}}" class="hidden md:block bg-amber-200 rounded-full px-6 py-2 text-black font-bold font-['Inter']">
            Login
        </a>
        <div class="md:hidden flex items-center">
            <button id="mobile-menu-button" class="text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </header>
    <!-- Mobile Navigation -->
    <nav id="mobile-menu" class="bg-slate-900 w-full hidden flex-col items-center text-neutral-100 text-base font-bold font-['Inter'] mt-24">
        <a href="#home" class="py-2 hover:underline">HOME</a>
        <a href="#about" class="py-2 hover:underline">ABOUT US</a>
        <a href="#contact" class="py-2 hover:underline">CONTACT US</a>
        <a href="" class="bg-amber-200 rounded-full px-6 py-2 text-black font-bold mt-4">
            Login
        </a>
    </nav>
    <!-- Main Content -->
    <div class="content-offset">
        <!-- Hero Section -->
        <section id="home" class="relative w-full bg-white flex flex-col md:flex-row items-center justify-center py-16">
            <div class="md:w-1/2 p-8">
                <h1 class="text-teal-950 text-6xl md:text-8xl font-bold font-['Inter']">Adim Pageant</h1>
                <p class="mt-4 text-teal-950 text-base md:text-lg font-normal font-['Inter']">
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
                <p class="mt-16 text-teal-950 text-2xl font-extrabold font-['Inter']">
                    DOWNLOAD THE APP NOW
                </p>
            </div>
            <div class="md:w-1/2 p-8 flex flex-col items-center">
                <img src="{{asset('public/phones.png')}}" alt="Hero Image" class="w-full h-auto object-cover mb-8">
                <div class="flex space-x-4">
                    <a href="#">
                        <img src="{{asset('public/google-app-store.png')}}" alt="Download for Android" class="w-40 h-auto">
                    </a>
                    <a href="#">
                        <img src="{{asset('public/app-store.png')}}" alt="Download for iOS" class="w-40 h-auto">
                    </a>
                </div>
            </div>
        </section>
        <!-- About Section -->
        <section id="about" class="py-16 bg-teal-950 text-center">
            <h2 class="text-orange-300 text-3xl font-bold font-['Inter']">INTRODUCING</h2>
            <h3 class="text-amber-200 text-4xl font-bold font-['Inter'] mt-4">ADIMPAGEANT</h3>
            <p class="max-w-2xl mx-auto text-white text-2xl mt-8">
                Welcome to AdimPageant, your ultimate companion for all things pageantry! Our innovative app is designed to streamline every aspect of your pageant journey...
            </p>
        </section>
        <!-- News Section -->
        <section id="news" class="py-16 bg-neutral-200">
            <div class="container mx-auto px-4">
                <h2 class="text-center text-teal-950 text-3xl font-bold font-['Inter'] mb-8">IN THE NEWS</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-4 rounded-lg">
                        <img src="https://via.placeholder.com/143x200" class="w-full h-52 object-cover mb-4" alt="News">
                        <h3 class="text-black text-lg font-medium">New Pageantry App Takes Nigeria by Storm.</h3>
                        <p class="text-black text-sm mt-2">"Announcing AdimPageant: The Ultimate App for Pageant Enthusiasts! AdimPageant is your all-in-one solution for navigating the world of pageantry with ease and confidence...</p>
                        <p class="text-black/opacity-50 text-xs mt-2">June 13,2024</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg">
                        <img src="https://via.placeholder.com/295x197" class="w-full h-52 object-cover mb-4" alt="News">
                        <h3 class="text-black text-lg font-medium">ADIMPAGEANT, a new and improved experience for pageantry</h3>
                        <p class="text-black text-sm mt-2">"Announcing AdimPageant: The Ultimate App for Pageant Enthusiasts! AdimPageant is your all-in-one solution for navigating the world of pageantry with ease and confidence...</p>
                        <p class="text-black/opacity-50 text-xs mt-2">June 13,2024</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg">
                        <img src="https://via.placeholder.com/296x197" class="w-full h-52 object-cover mb-4" alt="News">
                        <h3 class="text-black text-lg font-medium">ADIMPAGEANT, Bigger, Better, Bolder!!!</h3>
                        <p class="text-black text-sm mt-2">"Announcing AdimPageant: The Ultimate App for Pageant Enthusiasts! AdimPageant is your all-in-one solution for navigating the world of pageantry with ease and confidence...</p>
                        <p class="text-black/opacity-50 text-xs mt-2">June 13,2024</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section -->
        <section id="contact" class="py-16 bg-white text-center">
            <h2 class="text-teal-950 text-3xl font-bold font-['Inter'] mb-8">CONTACT US</h2>
            <p class="max-w-xl mx-auto text-teal-950 text-lg mb-8">If you have any questions or inquiries, feel free to reach out to us through our contact form or social media channels. We're here to help you!</p>
            <a href="mailto:contact@adimpageant.com" class="bg-teal-950 text-white px-8 py-4 rounded-full font-bold font-['Inter']">Send us an Email</a>
        </section>
        <!-- Footer -->
        <footer class="bg-teal-950 text-white py-16">
            <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Logo Section -->
                <div class="flex flex-col items-center md:items-start">
                    <img class="w-24 h-24 mb-4" src="{{asset('footer_logo.png')}}" alt="Logo"/>
                </div>
                <!-- Enquiry Section -->
                <div class="flex flex-col items-center">
                    <h3 class="text-2xl font-bold underline mb-4">Make an Enquiry</h3>
                    <div class="bg-white text-black rounded-full px-6 py-2 text-center font-semibold">
                        The AdimPageant App
                    </div>
                    <div class="bg-white text-black rounded-full px-6 py-2 text-center font-semibold mt-4">
                        FAQs #AdimPageant2024
                    </div>
                </div>
                <!-- Footer Navigation -->
                <div class="flex flex-col items-center md:items-start">
                    <nav class="space-y-4">
                        <a href="#home" class="text-lg hover:underline">Home</a>
                        <a href="#about" class="text-lg hover:underline">About Us</a>
                        <a href="#contact" class="text-lg hover:underline">Connect</a>
                        <a href="#news" class="text-lg hover:underline">Follow AdimPageant</a>
                    </nav>
                    <div class="flex space-x-4 mt-8">
                        <a href="#" class="w-6 h-6 bg-white rounded-full"></a>
                        <a href="#" class="w-6 h-6 bg-white rounded-full"></a>
                        <a href="#" class="w-6 h-6 bg-white rounded-full"></a>
                        <a href="#" class="w-6 h-6 bg-white rounded-full"></a>
                    </div>
                    <p class="mt-4 text-sm">Terms of service</p>
                    <p class="text-sm">Privacy policy</p>
                </div>
            </div>
        </footer>
    </div>
</div>

<script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
</body>
</html>
