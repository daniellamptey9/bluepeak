@extends('layouts.app')

@section('title', 'Contact Us - Get IT Support & Cloud Solutions')

@section('content')
<!-- Hero Section -->
<section class="section-padding bg-gradient-to-br from-secondary-50 to-primary-50 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 bg-white bg-opacity-50"></div>
    <div class="absolute top-0 left-0 w-full h-full">
        <div class="absolute top-20 left-10 w-32 h-32 bg-primary-500 rounded-full opacity-10 animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-24 h-24 bg-secondary-400 rounded-full opacity-10 animate-pulse delay-1000"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-primary-400 rounded-full opacity-10 animate-pulse delay-500"></div>
    </div>

    <div class="container-custom relative z-10">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-4 py-2 bg-primary-100 rounded-full text-primary-700 text-sm font-medium mb-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                Let's Connect
            </div>
            <h1 class="text-4xl md:text-6xl font-bold text-secondary-900 mb-6">
                Get In <span class="text-primary-600">Touch</span>
            </h1>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto leading-relaxed">
                Ready to transform your IT infrastructure? Let's discuss how we can help your business grow and secure your digital future.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Contact Methods -->
            <div class="lg:col-span-1 space-y-6">
                <!-- Quick Contact Cards -->
                <div class="bg-white rounded-2xl p-6 border border-secondary-200 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-secondary-900">Call Us Now</h3>
                            <p class="text-sm text-secondary-600">Speak with our experts</p>
                        </div>
                    </div>
                    <a href="tel:+15551234567" class="text-primary-600 font-medium text-lg hover:text-primary-700 transition-colors">
                        (555) 123-4567
                    </a>
                    <p class="text-secondary-500 text-sm mt-1">Emergency: (555) 123-4568</p>
                </div>

                <div class="bg-white rounded-2xl p-6 border border-secondary-200 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-secondary-900">Live Chat</h3>
                            <p class="text-sm text-secondary-600">Get instant support</p>
                        </div>
                    </div>
                    <button id="startChatBtn" class="text-primary-600 font-medium text-lg hover:text-primary-700 transition-colors">
                        Start Chat
                    </button>
                    <p class="text-secondary-500 text-sm mt-1">Available 24/7</p>
                </div>

                <div class="bg-white rounded-2xl p-6 border border-secondary-200 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-secondary-900">Email Us</h3>
                            <p class="text-sm text-secondary-600">Send us a message</p>
                        </div>
                    </div>
                    <a href="mailto:info@bluepeakmsp.com" class="text-primary-600 font-medium text-lg hover:text-primary-700 transition-colors">
                        info@bluepeakmsp.com
                    </a>
                    <p class="text-secondary-500 text-sm mt-1">support@bluepeakmsp.com</p>
                </div>

                <!-- Office Location -->
                <div class="bg-white rounded-2xl p-6 border border-secondary-200 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-secondary-900">Visit Our Office</h3>
                            <p class="text-sm text-secondary-600">Northampton, UK</p>
                        </div>
                    </div>
                    <div class="text-secondary-600 text-sm">
                        <p class="mb-2">123 Business Park</p>
                        <p class="mb-2">Northampton, NN1 1AA</p>
                        <p>United Kingdom</p>
                    </div>
                    <a href="https://maps.google.com" target="_blank" class="text-primary-600 font-medium text-sm hover:text-primary-700 transition-colors mt-2 inline-block">
                        Get Directions →
                    </a>
                </div>

                <!-- Business Hours -->
                <div class="bg-white bg-opacity-10 backdrop-blur-lg rounded-2xl p-6 border border-white border-opacity-20">
                    <h4 class="text-lg font-semibold text-secondary-900 mb-4">Business Hours</h4>
                    <div class="space-y-3 text-sm">
                        <div class="flex justify-between text-secondary-600">
                            <span>Monday - Friday</span>
                            <span>8:00 AM - 6:00 PM</span>
                        </div>
                        <div class="flex justify-between text-secondary-600">
                            <span>Saturday</span>
                            <span>9:00 AM - 2:00 PM</span>
                        </div>
                        <div class="flex justify-between text-secondary-600">
                            <span>Sunday</span>
                            <span>Emergency Only</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-2xl p-8 border border-secondary-200 shadow-lg">
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold text-secondary-900 mb-2">Send us a message</h3>
                        <p class="text-secondary-600">Fill out the form below and we'll get back to you within 24 hours.</p>
                    </div>
                    
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded-lg mb-6">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-secondary-900 mb-2">Full Name *</label>
                                <input type="text" id="name" name="name" required 
                                       class="w-full px-4 py-3 bg-white border border-secondary-300 rounded-lg text-secondary-900 placeholder-secondary-500 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 @error('name') border-red-400 @enderror"
                                       placeholder="Enter your full name"
                                       value="{{ old('name') }}">
                                @error('name')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-secondary-900 mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" required 
                                       class="w-full px-4 py-3 bg-white border border-secondary-300 rounded-lg text-secondary-900 placeholder-secondary-500 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 @error('email') border-red-400 @enderror"
                                       placeholder="Enter your email"
                                       value="{{ old('email') }}">
                                @error('email')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-sm font-medium text-secondary-900 mb-2">Phone Number</label>
                                <input type="tel" id="phone" name="phone" 
                                       class="w-full px-4 py-3 bg-white border border-secondary-300 rounded-lg text-secondary-900 placeholder-secondary-500 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 @error('phone') border-red-400 @enderror"
                                       placeholder="Enter your phone number"
                                       value="{{ old('phone') }}">
                                @error('phone')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="company" class="block text-sm font-medium text-secondary-900 mb-2">Company Name</label>
                                <input type="text" id="company" name="company" 
                                       class="w-full px-4 py-3 bg-white border border-secondary-300 rounded-lg text-secondary-900 placeholder-secondary-500 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 @error('company') border-red-400 @enderror"
                                       placeholder="Enter your company name"
                                       value="{{ old('company') }}">
                                @error('company')
                                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        
                        <div>
                            <label for="subject" class="block text-sm font-medium text-secondary-900 mb-2">Subject *</label>
                            <select id="subject" name="subject" required 
                                    class="w-full px-4 py-3 bg-white border border-secondary-300 rounded-lg text-secondary-900 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 @error('subject') border-red-400 @enderror">
                                <option value="">Select a subject</option>
                                <option value="General Inquiry" {{ old('subject') == 'General Inquiry' ? 'selected' : '' }}>General Inquiry</option>
                                <option value="IT Support" {{ old('subject') == 'IT Support' ? 'selected' : '' }}>IT Support</option>
                                <option value="Cloud Services" {{ old('subject') == 'Cloud Services' ? 'selected' : '' }}>Cloud Services</option>
                                <option value="Cybersecurity" {{ old('subject') == 'Cybersecurity' ? 'selected' : '' }}>Cybersecurity</option>
                                <option value="Managed Services" {{ old('subject') == 'Managed Services' ? 'selected' : '' }}>Managed Services</option>
                                <option value="Consulting" {{ old('subject') == 'Consulting' ? 'selected' : '' }}>Consulting</option>
                                <option value="Emergency Support" {{ old('subject') == 'Emergency Support' ? 'selected' : '' }}>Emergency Support</option>
                            </select>
                            @error('subject')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-secondary-900 mb-2">Message *</label>
                            <textarea id="message" name="message" rows="5" required 
                                      class="w-full px-4 py-3 bg-white border border-secondary-300 rounded-lg text-secondary-900 placeholder-secondary-500 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 @error('message') border-red-400 @enderror"
                                      placeholder="Tell us about your IT needs and how we can help...">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <button type="submit" class="w-full bg-gradient-to-r from-primary-500 to-primary-600 hover:from-primary-600 hover:to-primary-700 text-white font-semibold py-4 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                            <span class="flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                                Send Message
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-4">
                Why Choose <span class="text-primary-600">BluePeak MSP</span>?
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                We're not just another IT company – we're your strategic technology partner, 
                committed to helping your business succeed.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-3">24/7 Support</h3>
                <p class="text-secondary-600 text-sm">
                    Round-the-clock monitoring and support to keep your systems running smoothly.
                </p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-3">Expert Team</h3>
                <p class="text-secondary-600 text-sm">
                    Certified professionals with years of experience in IT solutions and support.
                </p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-3">Cost Effective</h3>
                <p class="text-secondary-600 text-sm">
                    Competitive pricing with no hidden fees. Get enterprise-level support at small business prices.
                </p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-3">Proven Results</h3>
                <p class="text-secondary-600 text-sm">
                    Track record of success with businesses across Northamptonshire and beyond.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Service Areas -->
<section class="section-padding bg-secondary-50">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-4">
                We Serve <span class="text-primary-600">Northamptonshire</span>
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                Based in Northampton, we provide IT support and services to businesses throughout 
                Northamptonshire and surrounding areas.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
            <div class="text-center">
                <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition-shadow">
                    <h4 class="font-semibold text-secondary-900">Northampton</h4>
                </div>
            </div>
            <div class="text-center">
                <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition-shadow">
                    <h4 class="font-semibold text-secondary-900">Kettering</h4>
                </div>
            </div>
            <div class="text-center">
                <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition-shadow">
                    <h4 class="font-semibold text-secondary-900">Wellingborough</h4>
                </div>
            </div>
            <div class="text-center">
                <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition-shadow">
                    <h4 class="font-semibold text-secondary-900">Corby</h4>
                </div>
            </div>
            <div class="text-center">
                <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition-shadow">
                    <h4 class="font-semibold text-secondary-900">Rugby</h4>
                </div>
            </div>
            <div class="text-center">
                <div class="bg-white rounded-lg p-4 shadow-sm hover:shadow-md transition-shadow">
                    <h4 class="font-semibold text-secondary-900">Rushden</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- AI Chat Widget -->
<div id="chatWidget" class="fixed bottom-6 right-6 z-50 hidden" style="position: fixed !important; bottom: 24px !important; right: 24px !important;">
    <!-- Chat Toggle Button -->
    <div id="chatToggle" class="bg-primary-600 hover:bg-primary-700 text-white rounded-full p-4 shadow-lg cursor-pointer transition-all duration-300 hover:scale-110">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
        </svg>
    </div>

    <!-- Chat Window -->
    <div id="chatWindow" class="absolute bottom-16 right-0 w-80 max-w-[calc(100vw-2rem)] h-96 bg-white rounded-2xl shadow-2xl border border-gray-200 hidden" style="bottom: 64px !important;">
        <!-- Chat Header -->
        <div class="bg-primary-600 text-white p-4 rounded-t-2xl flex items-center justify-between">
            <div class="flex items-center">
                <div class="w-8 h-8 bg-white bg-opacity-20 rounded-full flex items-center justify-center mr-3">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold">BluePeak AI Assistant</h3>
                    <p class="text-xs text-primary-100">Online now</p>
                </div>
            </div>
            <button id="closeChat" class="text-white hover:text-primary-200 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Chat Messages -->
        <div id="chatMessages" class="h-64 overflow-y-auto p-4 space-y-4" style="max-height: 256px; overflow-y: auto; scroll-behavior: smooth;">
            <!-- Welcome Message -->
            <div class="flex items-start space-x-2">
                <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-4 h-4 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div class="bg-gray-100 rounded-lg p-3 max-w-xs">
                    <p class="text-sm text-gray-800">Hello! I'm your AI assistant. How can I help you with your IT needs today?</p>
                    <p class="text-xs text-gray-500 mt-1">Just now</p>
                </div>
            </div>

            <!-- Quick Options -->
            <div class="flex items-start space-x-2">
                <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-4 h-4 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div class="bg-gray-100 rounded-lg p-3 max-w-xs">
                    <p class="text-sm text-gray-800 mb-2">Quick options:</p>
                    <div class="space-y-1">
                        <button class="quick-option block w-full text-left text-xs bg-white rounded px-2 py-1 hover:bg-primary-50 transition-colors" data-option="IT Support">
                            💻 IT Support
                        </button>
                        <button class="quick-option block w-full text-left text-xs bg-white rounded px-2 py-1 hover:bg-primary-50 transition-colors" data-option="Cloud Services">
                            ☁️ Cloud Services
                        </button>
                        <button class="quick-option block w-full text-left text-xs bg-white rounded px-2 py-1 hover:bg-primary-50 transition-colors" data-option="Cybersecurity">
                            🔒 Cybersecurity
                        </button>
                        <button class="quick-option block w-full text-left text-xs bg-white rounded px-2 py-1 hover:bg-primary-50 transition-colors" data-option="Pricing">
                            💰 Pricing
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chat Input -->
        <div class="p-4 border-t border-gray-200">
            <div class="flex space-x-2">
                <input type="text" id="chatInput" placeholder="Type your message..." 
                       class="flex-1 px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 text-sm">
                <button id="sendMessage" class="bg-primary-600 hover:bg-primary-700 text-white px-4 py-2 rounded-lg transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                    </svg>
                </button>
            </div>
            <p class="text-xs text-gray-500 mt-2">Powered by AI • Responses may take a moment</p>
        </div>
    </div>
</div>

<!-- Chat JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const chatWidget = document.getElementById('chatWidget');
    const chatToggle = document.getElementById('chatToggle');
    const chatWindow = document.getElementById('chatWindow');
    const closeChat = document.getElementById('closeChat');
    const startChatBtn = document.getElementById('startChatBtn');
    const chatMessages = document.getElementById('chatMessages');
    const chatInput = document.getElementById('chatInput');
    const sendMessage = document.getElementById('sendMessage');
    const quickOptions = document.querySelectorAll('.quick-option');

    let isChatOpen = false;

    // Show chat widget when Start Chat is clicked
    startChatBtn.addEventListener('click', function() {
        chatWidget.classList.remove('hidden');
        setTimeout(() => {
            chatWindow.classList.remove('hidden');
            isChatOpen = true;
            chatInput.focus();
        }, 100);
    });

    // Toggle chat window
    chatToggle.addEventListener('click', function() {
        if (isChatOpen) {
            chatWindow.classList.add('hidden');
            isChatOpen = false;
        } else {
            chatWindow.classList.remove('hidden');
            isChatOpen = true;
            chatInput.focus();
        }
    });

    // Close chat
    closeChat.addEventListener('click', function() {
        chatWindow.classList.add('hidden');
        isChatOpen = false;
    });

    // Send message
    function sendUserMessage(message) {
        const messageDiv = document.createElement('div');
        messageDiv.className = 'flex items-start space-x-2 justify-end';
        messageDiv.innerHTML = `
            <div class="bg-primary-600 text-white rounded-lg p-3 max-w-xs">
                <p class="text-sm">${message}</p>
                <p class="text-xs text-primary-100 mt-1">Just now</p>
            </div>
            <div class="w-8 h-8 bg-primary-600 rounded-full flex items-center justify-center flex-shrink-0">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
            </div>
        `;
        chatMessages.appendChild(messageDiv);
        scrollToBottom();

        // Simulate AI response
        setTimeout(() => {
            generateAIResponse(message);
        }, 1000);
    }

    // Generate AI response
    function generateAIResponse(userMessage) {
        const lowerMessage = userMessage.toLowerCase();
        let response = '';

        // Common IT Problems and Solutions
        if (lowerMessage.includes('slow') || lowerMessage.includes('lag') || lowerMessage.includes('performance')) {
            response = 'I understand you\'re experiencing performance issues. Here are some immediate steps to try:\n\n1. **Restart your computer** - This fixes 80% of performance issues\n2. **Check Task Manager** - Look for programs using high CPU/memory\n3. **Clear browser cache** - Close unnecessary browser tabs\n4. **Run Windows Updates** - Ensure your system is up to date\n\nIf these don\'t help, we can perform a remote diagnostic. Would you like me to connect you with our technical team for a deeper analysis?';
        }
        else if (lowerMessage.includes('email') || lowerMessage.includes('outlook') || lowerMessage.includes('mail')) {
            response = 'Email issues can be frustrating! Let me help you troubleshoot:\n\n**Common Email Problems:**\n• **Can\'t send emails** - Check your internet connection and email settings\n• **Not receiving emails** - Check spam folder and email filters\n• **Outlook crashes** - Try running Outlook in safe mode\n• **Password issues** - Reset your email password\n\n**Quick Fixes:**\n1. Restart Outlook/email client\n2. Check your internet connection\n3. Clear email cache\n4. Verify email server settings\n\nWhat specific email problem are you experiencing? I can provide more targeted solutions.';
        }
        else if (lowerMessage.includes('printer') || lowerMessage.includes('printing') || lowerMessage.includes('print')) {
            response = 'Printer problems are common but usually easy to fix! Here\'s what to try:\n\n**Step-by-Step Troubleshooting:**\n1. **Check connections** - Ensure USB cable or network connection is secure\n2. **Restart everything** - Turn off printer, computer, wait 30 seconds, turn back on\n3. **Check paper/ink** - Ensure paper is loaded correctly and ink levels are adequate\n4. **Clear print queue** - Cancel all pending print jobs\n5. **Reinstall driver** - Download latest driver from manufacturer\'s website\n\n**Network Printer Issues:**\n• Check if printer is online in network settings\n• Verify printer IP address\n• Restart router if needed\n\nWhat type of printer issue are you having? I can provide more specific guidance.';
        }
        else if (lowerMessage.includes('password') || lowerMessage.includes('login') || lowerMessage.includes('access')) {
            response = 'Password and access issues can be resolved quickly! Here\'s how:\n\n**Password Reset Steps:**\n1. **Try common passwords** - Check if caps lock is on\n2. **Use password reset** - Click "Forgot Password" link\n3. **Check with admin** - Contact your IT administrator\n4. **Clear browser cache** - Sometimes cached credentials cause issues\n\n**Account Lockout Issues:**\n• Wait 15-30 minutes before trying again\n• Contact IT support to unlock account\n• Check if account has expired\n\n**Security Best Practices:**\n• Use strong, unique passwords\n• Enable two-factor authentication\n• Never share passwords\n\nWhat specific access issue are you facing? I can guide you through the exact steps.';
        }
        else if (lowerMessage.includes('network') || lowerMessage.includes('internet') || lowerMessage.includes('wifi') || lowerMessage.includes('connection')) {
            response = 'Network connectivity issues? Let\'s get you back online!\n\n**Immediate Troubleshooting:**\n1. **Restart router/modem** - Unplug for 30 seconds, plug back in\n2. **Check cables** - Ensure all network cables are secure\n3. **Test on other devices** - See if problem affects all devices\n4. **Run network troubleshooter** - Windows built-in diagnostic tool\n\n**WiFi Specific Issues:**\n• Move closer to router\n• Check if WiFi is enabled on device\n• Forget and reconnect to WiFi network\n• Update WiFi driver\n\n**Advanced Solutions:**\n• Change WiFi channel (avoid crowded channels)\n• Update router firmware\n• Check for interference from other devices\n\nWhat type of network problem are you experiencing? I can provide more targeted solutions.';
        }
        else if (lowerMessage.includes('virus') || lowerMessage.includes('malware') || lowerMessage.includes('security') || lowerMessage.includes('infected')) {
            response = 'Security threats are serious but manageable! Here\'s what to do:\n\n**Immediate Actions:**\n1. **Disconnect from internet** - Prevent further damage\n2. **Run full antivirus scan** - Use Windows Defender or your antivirus\n3. **Don\'t click suspicious links** - Avoid phishing attempts\n4. **Backup important files** - Save data to external drive\n\n**Signs of Infection:**\n• Slow computer performance\n• Pop-up ads everywhere\n• Browser redirects\n• Unusual network activity\n\n**Prevention Tips:**\n• Keep software updated\n• Use strong passwords\n• Be cautious with email attachments\n• Regular backups\n\n**If Infected:**\n• Run Malwarebytes or similar tool\n• Consider professional cleanup\n• Change all passwords after cleanup\n\nIs your computer showing signs of infection? I can guide you through the cleanup process.';
        }
        else if (lowerMessage.includes('backup') || lowerMessage.includes('data') || lowerMessage.includes('lost') || lowerMessage.includes('recovery')) {
            response = 'Data loss is stressful, but there are often solutions! Let\'s recover your files:\n\n**Immediate Steps:**\n1. **Stop using the device** - Don\'t write new data\n2. **Check Recycle Bin** - Files might just be deleted\n3. **Check cloud backups** - OneDrive, Google Drive, iCloud\n4. **Look for .tmp files** - Temporary files might be recoverable\n\n**Recovery Options:**\n• **Windows File History** - If enabled, restore from backup\n• **Previous Versions** - Right-click folder, check "Previous Versions"\n• **Recovery software** - Recuva, PhotoRec (free tools)\n• **Professional recovery** - For critical data\n\n**Prevention for Future:**\n• Enable automatic backups\n• Use cloud storage (OneDrive, Google Drive)\n• Regular external drive backups\n• Test backups regularly\n\nWhat type of data did you lose? I can provide specific recovery steps.';
        }
        else if (lowerMessage.includes('office 365') || lowerMessage.includes('microsoft 365') || lowerMessage.includes('teams') || lowerMessage.includes('sharepoint')) {
            response = 'Microsoft 365 issues? I can help you get back to productivity!\n\n**Common Office 365 Problems:**\n\n**Teams Issues:**\n• Restart Teams application\n• Clear Teams cache\n• Check microphone/camera permissions\n• Update Teams to latest version\n\n**Outlook Problems:**\n• Repair Office installation\n• Reset Outlook profile\n• Check Exchange connection\n• Clear Outlook cache\n\n**SharePoint/OneDrive:**\n• Sync issues - pause and resume sync\n• File conflicts - resolve in OneDrive\n• Permission problems - check sharing settings\n\n**General Solutions:**\n• Sign out and back into Office 365\n• Run Office repair tool\n• Check internet connection\n• Clear browser cache if using web version\n\nWhat specific Office 365 application is giving you trouble? I can provide targeted solutions.';
        }
        else if (lowerMessage.includes('server') || lowerMessage.includes('database') || lowerMessage.includes('hosting')) {
            response = 'Server and hosting issues require careful troubleshooting. Here\'s how to approach them:\n\n**Server Performance Issues:**\n1. **Check resource usage** - CPU, memory, disk space\n2. **Review error logs** - Look for specific error messages\n3. **Restart services** - Often resolves temporary issues\n4. **Check network connectivity** - Ensure server can reach internet\n\n**Database Problems:**\n• Check database service status\n• Verify database connections\n• Review database logs\n• Consider backup restoration if corrupted\n\n**Hosting Issues:**\n• Check hosting provider status page\n• Verify DNS settings\n• Test from different locations\n• Contact hosting support\n\n**Emergency Steps:**\n• Document all error messages\n• Take screenshots of issues\n• Note when problems started\n• Check if other users affected\n\nWhat type of server or hosting issue are you experiencing? I can provide more specific guidance.';
        }
        else if (lowerMessage.includes('price') || lowerMessage.includes('cost') || lowerMessage.includes('quote') || lowerMessage.includes('pricing')) {
            response = 'Great question about pricing! Our IT support costs are designed to be transparent and affordable:\n\n**Our Pricing Structure:**\n• **Hourly Support** - £75/hour for one-off issues\n• **Monthly Retainer** - From £200/month for regular support\n• **Managed Services** - From £500/month for full IT management\n• **Emergency Support** - £100/hour for urgent issues\n\n**What\'s Included:**\n• Remote support and troubleshooting\n• Software installation and updates\n• Security monitoring and maintenance\n• Backup management\n• 24/7 emergency support\n\n**Cost Savings:**\n• Prevent expensive downtime\n• Avoid costly data loss\n• Reduce security risks\n• Increase productivity\n\n**Next Steps:**\nI can arrange a free consultation to assess your specific needs and provide a custom quote. Would you like me to connect you with our sales team for a detailed proposal?';
        }
        else if (lowerMessage.includes('cloud') || lowerMessage.includes('migration') || lowerMessage.includes('azure') || lowerMessage.includes('aws')) {
            response = 'Cloud services can transform your business! Here\'s what you need to know:\n\n**Cloud Migration Benefits:**\n• **Cost Reduction** - Pay only for what you use\n• **Scalability** - Easily adjust resources as needed\n• **Security** - Enterprise-grade protection\n• **Accessibility** - Work from anywhere\n• **Backup** - Automatic data protection\n\n**Popular Cloud Solutions:**\n• **Microsoft Azure** - Great for Windows environments\n• **Amazon AWS** - Comprehensive cloud platform\n• **Google Cloud** - Excellent for collaboration\n• **Office 365** - Perfect for small businesses\n\n**Migration Process:**\n1. **Assessment** - Evaluate current infrastructure\n2. **Planning** - Design cloud architecture\n3. **Testing** - Pilot migration with non-critical data\n4. **Migration** - Move data and applications\n5. **Optimization** - Fine-tune performance\n\n**Common Concerns:**\n• **Security** - Cloud is often more secure than on-premise\n• **Cost** - Usually reduces overall IT costs\n• **Control** - You maintain full control of your data\n\nWhat type of cloud solution are you considering? I can provide more specific guidance.';
        }
        else if (lowerMessage.includes('location') || lowerMessage.includes('address') || lowerMessage.includes('where') || lowerMessage.includes('office')) {
            response = 'Great question! Here\'s where you can find us:\n\n**Our Location:**\n📍 **BluePeak MSP**\n123 Business Park\nNorthampton, NN1 1AA\nUnited Kingdom\n\n**Service Areas:**\nWe proudly serve businesses throughout Northamptonshire:\n• Northampton (our base)\n• Kettering\n• Wellingborough\n• Corby\n• Rugby\n• Rushden\n• And surrounding areas\n\n**Getting Here:**\n• **By Car** - Easy access from A45 and M1\n• **Parking** - Free parking available on-site\n• **Public Transport** - Close to Northampton train station\n\n**Office Hours:**\n• Monday - Friday: 8:00 AM - 6:00 PM\n• Saturday: 9:00 AM - 2:00 PM\n• Sunday: Emergency support only\n\nWould you like directions or information about our on-site services?';
        }
        else if (lowerMessage.includes('schedule') || lowerMessage.includes('appointment') || lowerMessage.includes('call back') || lowerMessage.includes('callback') || lowerMessage.includes('meeting')) {
            response = 'I\'d be happy to help you schedule a consultation or callback!\n\n**Available Options:**\n\n**📞 Callback Service:**\n• **Same Day** - Within 2 hours during business hours\n• **Next Day** - Scheduled for next business day\n• **Emergency** - Immediate callback for urgent issues\n\n**📅 Consultation Types:**\n• **Free IT Assessment** - 30-minute system review\n• **Strategy Meeting** - 1-hour business IT planning\n• **Emergency Support** - Immediate technical assistance\n• **Cloud Migration Planning** - Detailed migration consultation\n\n**How to Schedule:**\n1. **Tell me your preferred time** - Morning, afternoon, or specific time\n2. **Specify urgency** - Is this urgent or can it wait?\n3. **Describe your needs** - What type of consultation do you need?\n4. **Provide contact details** - Phone number and best time to call\n\n**What I Need:**\n• Your name and company\n• Phone number\n• Preferred callback time\n• Brief description of your IT needs\n\nWhat type of consultation would you like to schedule?';
        }
        else if (lowerMessage.includes('hours') || lowerMessage.includes('open') || lowerMessage.includes('closed') || lowerMessage.includes('business hours')) {
            response = 'Here are our business hours and availability:\n\n**Regular Business Hours:**\n• **Monday - Friday:** 8:00 AM - 6:00 PM\n• **Saturday:** 9:00 AM - 2:00 PM\n• **Sunday:** Emergency support only\n\n**Support Availability:**\n• **24/7 Emergency Support** - For critical IT issues\n• **Remote Support** - Available during business hours\n• **On-site Visits** - Scheduled during business hours\n• **Phone Support** - Mon-Fri 8AM-6PM, Sat 9AM-2PM\n\n**Emergency Procedures:**\n• **Critical Issues** - Call our emergency line: (555) 123-4568\n• **Response Time** - Within 1 hour for emergencies\n• **After Hours** - Available for urgent business-critical issues\n\n**Holiday Schedule:**\n• **Bank Holidays** - Emergency support only\n• **Christmas/New Year** - Reduced hours, emergency support available\n• **Advance Notice** - We\'ll notify clients of any schedule changes\n\n**Best Times to Call:**\n• **Morning:** 9:00 AM - 11:00 AM (least busy)\n• **Afternoon:** 2:00 PM - 4:00 PM (good availability)\n• **Avoid:** Lunch time (12:00 PM - 1:00 PM)\n\nIs there a specific time that works best for you?';
        }
        else if (lowerMessage.includes('phone') || lowerMessage.includes('call') || lowerMessage.includes('contact') || lowerMessage.includes('number')) {
            response = 'Here\'s how you can reach us:\n\n**📞 Phone Numbers:**\n• **Main Office:** (555) 123-4567\n• **Emergency Line:** (555) 123-4568\n• **Sales Inquiries:** (555) 123-4569\n\n**📧 Email Addresses:**\n• **General Info:** info@bluepeakmsp.com\n• **Support:** support@bluepeakmsp.com\n• **Sales:** sales@bluepeakmsp.com\n• **Emergency:** emergency@bluepeakmsp.com\n\n**🕐 Best Times to Call:**\n• **Monday-Friday:** 9:00 AM - 5:00 PM\n• **Saturday:** 9:00 AM - 2:00 PM\n• **Avoid:** Lunch time (12:00 PM - 1:00 PM)\n\n**📱 Response Times:**\n• **Phone Calls:** Answered within 3 rings during business hours\n• **Emergency Calls:** Answered immediately 24/7\n• **Email:** Within 2 hours during business hours\n• **Support Tickets:** Within 1 hour during business hours\n\n**💬 Live Chat:**\n• **Available:** 24/7 through this chat system\n• **Response:** Immediate for general queries\n• **Technical Issues:** Escalated to support team within 1 hour\n\n**Emergency Procedures:**\n• **Critical Issues:** Call emergency line immediately\n• **After Hours:** Emergency line available 24/7\n• **Response Time:** Within 1 hour for emergencies\n\nWhat\'s the best way for us to help you today?';
        }
        else if (lowerMessage.includes('about') || lowerMessage.includes('company') || lowerMessage.includes('who') || lowerMessage.includes('team')) {
            response = 'Great question! Let me tell you about BluePeak MSP:\n\n**🏢 About BluePeak MSP:**\nWe\'re a Northampton-based IT support company specializing in helping small to medium-sized businesses with their technology needs.\n\n**👥 Our Team:**\n• **Certified IT Professionals** - Microsoft, Cisco, and other industry certifications\n• **Experienced Technicians** - Average 8+ years in IT support\n• **Local Knowledge** - Based in Northampton, serving Northamptonshire\n• **Dedicated Support** - Personal account managers for each client\n\n**🎯 What We Do:**\n• **IT Support & Maintenance** - Keep your systems running smoothly\n• **Cloud Services** - Office 365, Azure, AWS migration and management\n• **Cybersecurity** - Protect your business from threats\n• **Backup & Recovery** - Ensure your data is safe\n• **Network Management** - Reliable, secure network infrastructure\n• **Software Support** - Help with business applications\n\n**🏆 Why Choose Us:**\n• **Local Expertise** - We understand Northamptonshire businesses\n• **Proactive Support** - We prevent problems before they happen\n• **Transparent Pricing** - No hidden fees or surprises\n• **24/7 Emergency Support** - We\'re here when you need us\n• **Personal Service** - You\'ll work with the same team members\n\n**📈 Our Experience:**\n• **10+ Years** serving Northamptonshire businesses\n• **200+ Clients** across various industries\n• **99.9% Uptime** for managed services clients\n• **24/7 Monitoring** of critical systems\n\nWould you like to know more about our specific services or team members?';
        }
        else if (lowerMessage.includes('services') || lowerMessage.includes('what do you do') || lowerMessage.includes('offer')) {
            response = 'We offer a comprehensive range of IT services to keep your business running smoothly:\n\n**🛠️ Core IT Services:**\n• **IT Support & Helpdesk** - 24/7 technical assistance\n• **Network Management** - Setup, monitoring, and maintenance\n• **Server Management** - On-premise and cloud server support\n• **Workstation Support** - Desktop and laptop maintenance\n• **Software Installation** - Business application setup and support\n\n**☁️ Cloud Services:**\n• **Office 365** - Migration, setup, and ongoing management\n• **Microsoft Azure** - Cloud infrastructure and services\n• **Amazon AWS** - Cloud hosting and applications\n• **Google Workspace** - G Suite migration and support\n• **Cloud Backup** - Automated data protection\n\n**🔒 Cybersecurity:**\n• **Antivirus & Malware Protection** - Advanced threat detection\n• **Firewall Management** - Network security configuration\n• **Email Security** - Spam filtering and phishing protection\n• **Security Audits** - Regular security assessments\n• **Employee Training** - Cybersecurity awareness programs\n\n**💾 Data Management:**\n• **Backup Solutions** - Automated daily backups\n• **Data Recovery** - File and system recovery services\n• **Disaster Recovery** - Business continuity planning\n• **Data Migration** - Safe data transfer between systems\n\n**📞 Support Options:**\n• **Remote Support** - Quick fixes without on-site visits\n• **On-site Support** - Hands-on technical assistance\n• **Managed Services** - Complete IT management\n• **Emergency Support** - 24/7 critical issue response\n\n**🏢 Industry Specializations:**\n• Healthcare (HIPAA compliance)\n• Legal firms (document security)\n• Manufacturing (industrial systems)\n• Construction (mobile workforce)\n• Finance (regulatory compliance)\n\nWhat specific service are you most interested in?';
        }
        else if (lowerMessage.includes('help') || lowerMessage.includes('support') || lowerMessage.includes('assistance')) {
            response = 'I\'m here to help with all your IT needs! Here\'s how I can assist you:\n\n**What I Can Help With:**\n• **Troubleshooting** - Diagnose and fix technical issues\n• **Software Support** - Office 365, Windows, business applications\n• **Hardware Issues** - Computers, printers, network equipment\n• **Security Concerns** - Virus removal, data protection\n• **Cloud Services** - Migration, setup, optimization\n• **Backup Solutions** - Data protection and recovery\n\n**How to Get Help:**\n1. **Describe your problem** - Be as specific as possible\n2. **Include error messages** - Copy exact error text\n3. **Mention what you\'ve tried** - Avoid repeating solutions\n4. **Specify urgency** - Let me know if it\'s urgent\n\n**Response Times:**\n• **General queries** - Immediate response\n• **Technical issues** - Within 1 hour during business hours\n• **Emergency support** - Available 24/7\n\nWhat specific IT issue can I help you with today?';
        }
        else {
            response = 'I understand you have an IT question. To provide you with the most accurate and helpful solution, could you please provide more details about:\n\n• **What specific problem** are you experiencing?\n• **What software/hardware** is involved?\n• **When did the issue start?**\n• **What have you already tried?**\n• **Any error messages** you\'re seeing?\n\n**Common IT Issues I Can Help With:**\n• Computer performance problems\n• Email and communication issues\n• Network and connectivity problems\n• Software installation and updates\n• Security and virus concerns\n• Data backup and recovery\n• Cloud services and migration\n• Printer and hardware issues\n\nThe more details you provide, the better I can assist you with a practical solution!';
        }

        // Add typing indicator
        const typingDiv = document.createElement('div');
        typingDiv.className = 'flex items-start space-x-2';
        typingDiv.innerHTML = `
            <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                <svg class="w-4 h-4 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
            </div>
            <div class="bg-gray-100 rounded-lg p-3 max-w-xs">
                <div class="flex space-x-1">
                    <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce"></div>
                    <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.1s"></div>
                    <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                </div>
            </div>
        `;
        chatMessages.appendChild(typingDiv);
        scrollToBottom();

        // Replace typing indicator with actual response
        setTimeout(() => {
            typingDiv.remove();
            const responseDiv = document.createElement('div');
            responseDiv.className = 'flex items-start space-x-2';
            responseDiv.innerHTML = `
                <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-4 h-4 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div class="bg-gray-100 rounded-lg p-3 max-w-xs">
                    <p class="text-sm text-gray-800">${response}</p>
                    <p class="text-xs text-gray-500 mt-1">Just now</p>
                </div>
            `;
            chatMessages.appendChild(responseDiv);
            scrollToBottom();
        }, 2000);
    }

    // Handle quick option clicks
    quickOptions.forEach(option => {
        option.addEventListener('click', function() {
            const optionText = this.dataset.option;
            sendUserMessage(optionText);
        });
    });

    // Handle send button click
    sendMessage.addEventListener('click', function() {
        const message = chatInput.value.trim();
        if (message) {
            sendUserMessage(message);
            chatInput.value = '';
        }
    });

    // Handle Enter key
    chatInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            const message = chatInput.value.trim();
            if (message) {
                sendUserMessage(message);
                chatInput.value = '';
            }
        }
    });

    // Auto-scroll to bottom
    function scrollToBottom() {
        setTimeout(() => {
            chatMessages.scrollTop = chatMessages.scrollHeight;
            chatMessages.scrollIntoView({ behavior: 'smooth', block: 'end' });
        }, 100);
    }
});
</script>

@endsection
