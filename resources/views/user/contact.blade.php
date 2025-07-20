@extends('layouts.user.main')
@section('title', 'Contact Us - Sentuh Digital Teknologi')
@push('cssOnPage')
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Style untuk latar belakang diagonal */
        .contact-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 65%; /* Ketinggian area ungu */
            background: linear-gradient(to bottom right, #581c87, #312e81); /* Gradasi ungu */
            clip-path: polygon(0 0, 100% 0, 100% 80%, 0 100%); /* Bentuk diagonal */
            z-index: 0;
        }
    </style>
@endpush
@section('content')
        <!-- Contact Section -->
        <section class="relative contact-bg py-16 lg:py-24">
            <div class="container mx-auto px-4 relative z-10">
                <div class="text-center text-white">
                    <p class="font-semibold text-purple-300 mb-2">Have Question?</p>
                    <h1 class="text-4xl lg:text-5xl font-bold max-w-3xl mx-auto">We are ready to bring the best digital solution display for your business</h1>
                </div>
                
                <!-- Contact Form Card -->
                <div class="bg-white text-gray-800 max-w-2xl mx-auto rounded-2xl p-8 lg:p-12 shadow-2xl text-left mt-12">
                    <form action="#" method="POST">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                                <input type="text" name="name" id="name" placeholder="Name" class="w-full px-4 py-3 bg-purple-50 border border-purple-100 rounded-full focus:outline-none focus:ring-2 focus:ring-purple-500">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                                <input type="tel" name="phone" id="phone" placeholder="Phone" class="w-full px-4 py-3 bg-purple-50 border border-purple-100 rounded-full focus:outline-none focus:ring-2 focus:ring-purple-500">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" name="email" id="email" placeholder="Email" class="w-full px-4 py-3 bg-purple-50 border border-purple-100 rounded-full focus:outline-none focus:ring-2 focus:ring-purple-500">
                        </div>
                        <div class="mb-8">
                            <label for="messages" class="block text-sm font-medium text-gray-700 mb-1">Messages</label>
                            <textarea name="messages" id="messages" rows="6" placeholder="Type your message here" class="w-full px-4 py-3 bg-purple-50 border border-purple-100 rounded-2xl focus:outline-none focus:ring-2 focus:ring-purple-500"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="bg-purple-700 text-white font-bold py-3 px-10 rounded-full hover:bg-purple-800 transition-colors duration-300">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        @endsection