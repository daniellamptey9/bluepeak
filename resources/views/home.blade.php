@extends('layouts.app')

@section('title', 'Bluebridge IT Solutions - Professional IT Services & Cloud Solutions')
@section('description', 'Professional IT services and managed solutions for modern businesses. Cloud computing, cybersecurity, network management, and 24/7 support.')

@section('content')
<!-- Hero Section with Slider -->
<section id="home" class="relative overflow-hidden">
    <!-- Slider Container -->
    <div class="hero-slider relative h-screen min-h-[600px]">
        <!-- Slide 1: Main Hero -->
        <div class="hero-slide active absolute inset-0 bg-gradient-to-br from-secondary-50 to-secondary-100 flex items-center">
            <div class="container-custom">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Text Content -->
                    <div class="animate-fade-in-up">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-secondary-900 mb-6">
                            Your Trusted
                            <span class="text-primary-600">IT Partner</span>
                        </h1>
                        <p class="text-xl text-secondary-600 mb-8 leading-relaxed">
                            BluePeak MSP delivers comprehensive IT services and managed solutions to help your business 
                            thrive in the digital age. From cloud computing to cybersecurity, we've got you covered.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#contact" class="btn-primary text-center">Get Started Today</a>
                            <a href="#services" class="btn-secondary text-center">Our Services</a>
                        </div>
                    </div>
                    <!-- Image Content -->
                    <div class="relative animate-fade-in-right">
                        <div class="relative">
                            <!-- Main Image with Ashby-style curved borders -->
                            <div class="hero-image-container">
                                <img src="/it-infrastructure.jpg" 
                                     alt="Modern IT Infrastructure and Data Center" 
                                     class="w-full h-96 object-cover">
                                
                                <!-- Decorative Corner -->
                                <div class="decorative-corner"></div>
                                
                                <!-- Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                                
                                <!-- Content Overlay -->
                                <div class="absolute bottom-6 left-6 right-6 text-white">
                                    <h3 class="text-2xl font-bold mb-2">IT Infrastructure</h3>
                                    <p class="text-white/90">Modern, scalable solutions</p>
                                </div>
                                
                                <!-- Floating Stats -->
                                 <div class="absolute -top-4 right-4 bg-white rounded-xl shadow-lg p-4 w-28">
                                    <div class="text-center">
                                        <div class="text-lg font-bold text-green-600">99.9%</div>
                                        <div class="text-xs text-secondary-600">Uptime</div>
                                    </div>
                                </div>
                                 <div class="absolute -bottom-4 left-4 bg-white rounded-xl shadow-lg p-4 w-28">
                                    <div class="text-center">
                                        <div class="text-lg font-bold text-primary-600">24/7</div>
                                        <div class="text-xs text-secondary-600">Support</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2: Cloud Solutions -->
        <div class="hero-slide absolute inset-0 bg-gradient-to-br from-secondary-50 to-secondary-100 flex items-center">
            <div class="container-custom">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Image Content -->
                    <div class="relative animate-fade-in-up">
                        <div class="relative">
                            <!-- Main Cloud Image with Ashby-style curved borders -->
                            <div class="hero-image-container">
                                <img src="/cloud-computing.jpg" 
                                     alt="Cloud Computing and Data Centers" 
                                     class="w-full h-96 object-cover">
                                
                                <!-- Decorative Corner -->
                                <div class="decorative-corner"></div>
                                
                                <!-- Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                                
                                <!-- Content Overlay -->
                                <div class="absolute bottom-6 left-6 right-6 text-white">
                                    <h3 class="text-2xl font-bold mb-2">Cloud Infrastructure</h3>
                                    <p class="text-white/90">Scalable & secure</p>
                                </div>
                                
                                <!-- Cloud Platform Badges -->
                                <div class="absolute top-6 left-6 flex space-x-2">
                                    <div class="bg-orange-500 text-white px-3 py-1 rounded-full text-xs font-bold">AWS</div>
                                    <div class="bg-blue-500 text-white px-3 py-1 rounded-full text-xs font-bold">Azure</div>
                                    <div class="bg-green-500 text-white px-3 py-1 rounded-full text-xs font-bold">GCP</div>
                                </div>
                                
                                <!-- Floating Stats -->
                                 <div class="absolute -top-4 right-4 bg-white rounded-xl shadow-lg p-4 w-28">
                                    <div class="text-center">
                                        <div class="text-lg font-bold text-blue-600">95%</div>
                                        <div class="text-xs text-secondary-600">Migration Success</div>
                                    </div>
                                </div>
                                 <div class="absolute -bottom-4 left-4 bg-white rounded-xl shadow-lg p-4 w-28">
                                    <div class="text-center">
                                        <div class="text-lg font-bold text-indigo-600">50%</div>
                                        <div class="text-xs text-secondary-600">Cost Savings</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Text Content -->
                    <div class="animate-fade-in-right">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-secondary-900 mb-6">
                            Cloud-First
                            <span class="text-primary-600">Solutions</span>
                        </h1>
                        <p class="text-xl text-secondary-600 mb-8 leading-relaxed">
                            Migrate to the cloud with confidence. Our expert team provides seamless cloud migration, 
                            optimization, and ongoing management for AWS, Azure, and Google Cloud platforms.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#contact" class="btn-primary text-center">Start Migration</a>
                            <a href="#services" class="btn-secondary text-center">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3: Cybersecurity -->
        <div class="hero-slide absolute inset-0 bg-gradient-to-br from-secondary-50 to-secondary-100 flex items-center">
            <div class="container-custom">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Text Content -->
                    <div class="animate-fade-in-up">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-secondary-900 mb-6">
                            Advanced
                            <span class="text-primary-600">Cybersecurity</span>
                        </h1>
                        <p class="text-xl text-secondary-600 mb-8 leading-relaxed">
                            Protect your business from evolving cyber threats with our comprehensive security solutions. 
                            From threat detection to incident response, we keep your data safe and secure.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#contact" class="btn-primary text-center">Secure Now</a>
                            <a href="#services" class="btn-secondary text-center">Security Audit</a>
                        </div>
                    </div>
                    <!-- Image Content -->
                    <div class="relative animate-fade-in-right">
                        <div class="relative">
                            <!-- Main Security Image with Ashby-style curved borders -->
                            <div class="hero-image-container">
                                <img src="https://images.unsplash.com/photo-1563206767-5b18f218e8de?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                                     alt="Cybersecurity and Digital Protection" 
                                     class="w-full h-96 object-cover">
                                
                                <!-- Decorative Corner -->
                                <div class="decorative-corner"></div>
                                
                                <!-- Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                                
                                <!-- Content Overlay -->
                                <div class="absolute bottom-6 left-6 right-6 text-white">
                                    <h3 class="text-2xl font-bold mb-2">Security Shield</h3>
                                    <p class="text-white/90">Multi-layer protection</p>
                                </div>
                                
                                <!-- Security Status Indicators -->
                                <div class="absolute top-6 left-6 flex space-x-2">
                                    <div class="bg-green-500 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center">
                                        <div class="w-2 h-2 bg-white rounded-full mr-2"></div>
                                        Firewall
                                    </div>
                                    <div class="bg-green-500 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center">
                                        <div class="w-2 h-2 bg-white rounded-full mr-2"></div>
                                        Encrypted
                                    </div>
                                </div>
                                
                                <!-- Floating Stats -->
                                 <div class="absolute -top-4 right-4 bg-white rounded-xl shadow-lg p-4 w-28">
                                    <div class="text-center">
                                        <div class="text-lg font-bold text-red-600">100%</div>
                                        <div class="text-xs text-secondary-600">Protected</div>
                                    </div>
                                </div>
                                 <div class="absolute -bottom-4 left-4 bg-white rounded-xl shadow-lg p-4 w-28">
                                    <div class="text-center">
                                        <div class="text-lg font-bold text-orange-600">24/7</div>
                                        <div class="text-xs text-secondary-600">Monitoring</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 4: 24/7 Support -->
        <div class="hero-slide absolute inset-0 bg-gradient-to-br from-secondary-50 to-secondary-100 flex items-center">
            <div class="container-custom">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Image Content -->
                    <div class="relative animate-fade-in-up">
                        <div class="relative">
                            <!-- Main Support Image with Ashby-style curved borders -->
                            <div class="hero-image-container">
                                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                                     alt="Professional Customer Support Team" 
                                     class="w-full h-96 object-cover">
                                
                                <!-- Decorative Corner -->
                                <div class="decorative-corner"></div>
                                
                                <!-- Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                                
                                <!-- Content Overlay -->
                                <div class="absolute bottom-6 left-6 right-6 text-white">
                                    <h3 class="text-2xl font-bold mb-2">Support Center</h3>
                                    <p class="text-white/90">Always available</p>
                                </div>
                                
                                <!-- Support Features -->
                                <div class="absolute top-6 left-6 flex space-x-2">
                                    <div class="bg-green-500 text-white px-3 py-1 rounded-full text-xs font-bold">Live Chat</div>
                                    <div class="bg-blue-500 text-white px-3 py-1 rounded-full text-xs font-bold">Phone</div>
                                    <div class="bg-purple-500 text-white px-3 py-1 rounded-full text-xs font-bold">Email</div>
                                </div>
                                
                                <!-- Floating Stats -->
                                 <div class="absolute -top-4 right-4 bg-white rounded-xl shadow-lg p-4 w-28">
                                    <div class="text-center">
                                        <div class="text-lg font-bold text-green-600">2min</div>
                                        <div class="text-xs text-secondary-600">Avg Response</div>
                                    </div>
                                </div>
                                 <div class="absolute -bottom-4 left-4 bg-white rounded-xl shadow-lg p-4 w-28">
                                    <div class="text-center">
                                        <div class="text-lg font-bold text-emerald-600">98%</div>
                                        <div class="text-xs text-secondary-600">Satisfaction</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Text Content -->
                    <div class="animate-fade-in-right">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-secondary-900 mb-6">
                            Always-On
                            <span class="text-primary-600">Support</span>
                        </h1>
                        <p class="text-xl text-secondary-600 mb-8 leading-relaxed">
                            Never worry about IT issues again. Our dedicated support team provides 24/7 monitoring, 
                            maintenance, and technical assistance to keep your business running smoothly.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#contact" class="btn-primary text-center">Get Support</a>
                            <a href="#services" class="btn-secondary text-center">View Plans</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Slider Navigation -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-3 z-10">
        <button class="slider-dot w-3 h-3 rounded-full bg-black bg-opacity-50 hover:bg-opacity-100 transition-all duration-300 active" data-slide="0"></button>
        <button class="slider-dot w-3 h-3 rounded-full bg-black bg-opacity-50 hover:bg-opacity-100 transition-all duration-300" data-slide="1"></button>
        <button class="slider-dot w-3 h-3 rounded-full bg-black bg-opacity-50 hover:bg-opacity-100 transition-all duration-300" data-slide="2"></button>
        <button class="slider-dot w-3 h-3 rounded-full bg-black bg-opacity-50 hover:bg-opacity-100 transition-all duration-300" data-slide="3"></button>
    </div>

    <!-- Navigation Arrows -->
    <button class="slider-nav slider-prev absolute left-4 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-full flex items-center justify-center text-white transition-all duration-300 z-10">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
    </button>
    <button class="slider-nav slider-next absolute right-4 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-full flex items-center justify-center text-white transition-all duration-300 z-10">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>
</section>

<!-- Welcome Section -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Column - Content -->
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-6">
                    Welcome to
                </h2>
                <h3 class="text-4xl md:text-5xl font-bold text-primary-600 mb-8">
                    BluePeak MSP
                </h3>
                <p class="text-xl text-secondary-600 leading-relaxed mb-8">
                    <strong>BluePeak MSP provides comprehensive IT support services across the UK and Ghana, serving businesses in Northampton, Accra, Kettering, Kumasi, Wellingborough, Tamale, Corby, Cape Coast, Rugby, and Rushden.</strong>
                </p>
                <p class="text-lg text-secondary-600 leading-relaxed mb-6">
                    Our international presence allows us to offer flexible, culturally-aware IT solutions that meet the unique needs of businesses in both regions. With teams in the UK and Ghana, we provide 24/7 support across time zones.
                </p>
                
                <!-- Service Areas -->
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="bg-primary-50 rounded-lg p-4">
                        <h4 class="font-semibold text-primary-700 mb-2 flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            UK Coverage
                        </h4>
                        <p class="text-sm text-secondary-600">Northampton, Kettering, Wellingborough, Corby, Rugby, Rushden</p>
                    </div>
                    <div class="bg-secondary-50 rounded-lg p-4">
                        <h4 class="font-semibold text-secondary-700 mb-2 flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Ghana Coverage
                        </h4>
                        <p class="text-sm text-secondary-600">Accra, Kumasi, Tamale, Cape Coast, Tema, Takoradi</p>
                    </div>
                </div>
            </div>
            
            <!-- Right Column - Images -->
            <div class="relative">
                <div class="grid grid-cols-2 gap-4">
                    <!-- Top Left Image -->
                    <div class="relative group animate-fade-in-up welcome-image-float" style="animation-delay: 0.1s;">
                        <div class="welcome-image-container relative overflow-hidden rounded-2xl border-4 border-primary-200 group-hover:border-primary-400 transition-all duration-500 shadow-lg group-hover:shadow-2xl transform group-hover:-translate-y-2 group-hover:scale-105">
                            <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                                 alt="IT Infrastructure" 
                                 class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                            
                            <!-- Enhanced Glow Effect -->
                            <div class="welcome-image-glow"></div>
                            
                            <!-- Animated Border Glow -->
                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-primary-400/20 via-transparent to-primary-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            
                            <!-- Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                            
                            <!-- Content -->
                            <div class="absolute bottom-4 left-4 text-white transform group-hover:translate-y-0 translate-y-2 transition-transform duration-300">
                                <h4 class="font-semibold text-lg group-hover:text-primary-200 transition-colors duration-300">IT Infrastructure</h4>
                                <p class="text-sm text-white/90 group-hover:text-white transition-colors duration-300">Modern Solutions</p>
                            </div>
                            
                            <!-- Enhanced Floating Icon -->
                            <div class="absolute top-4 right-4 w-8 h-8 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-x-0 group-hover:translate-x-0 group-hover:rotate-12">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            
                            <!-- Decorative Corner -->
                            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-primary-400/30 to-transparent rounded-bl-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                    </div>
                    
                    <!-- Top Right Image -->
                    <div class="relative group animate-fade-in-up welcome-image-float" style="animation-delay: 0.2s;">
                        <div class="welcome-image-container relative overflow-hidden rounded-2xl border-4 border-secondary-200 group-hover:border-secondary-400 transition-all duration-500 shadow-lg group-hover:shadow-2xl transform group-hover:-translate-y-2 group-hover:scale-105">
                            <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                                 alt="Cloud Services" 
                                 class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                            
                            <!-- Enhanced Glow Effect -->
                            <div class="welcome-image-glow"></div>
                            
                            <!-- Animated Border Glow -->
                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-secondary-400/20 via-transparent to-secondary-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            
                            <!-- Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                            
                            <!-- Content -->
                            <div class="absolute bottom-4 left-4 text-white transform group-hover:translate-y-0 translate-y-2 transition-transform duration-300">
                                <h4 class="font-semibold text-lg group-hover:text-secondary-200 transition-colors duration-300">Cloud Services</h4>
                                <p class="text-sm text-white/90 group-hover:text-white transition-colors duration-300">Scalable Solutions</p>
                            </div>
                            
                            <!-- Enhanced Floating Icon -->
                            <div class="absolute top-4 right-4 w-8 h-8 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-x-0 group-hover:translate-x-0 group-hover:rotate-12">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                                </svg>
                            </div>
                            
                            <!-- Decorative Corner -->
                            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-secondary-400/30 to-transparent rounded-bl-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                    </div>
                    
                    <!-- Bottom Left Image -->
                    <div class="relative group animate-fade-in-up welcome-image-float" style="animation-delay: 0.3s;">
                        <div class="welcome-image-container relative overflow-hidden rounded-2xl border-4 border-green-200 group-hover:border-green-400 transition-all duration-500 shadow-lg group-hover:shadow-2xl transform group-hover:-translate-y-2 group-hover:scale-105">
                            <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                                 alt="Cybersecurity" 
                                 class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                            
                            <!-- Enhanced Glow Effect -->
                            <div class="welcome-image-glow"></div>
                            
                            <!-- Animated Border Glow -->
                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-green-400/20 via-transparent to-green-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            
                            <!-- Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                            
                            <!-- Content -->
                            <div class="absolute bottom-4 left-4 text-white transform group-hover:translate-y-0 translate-y-2 transition-transform duration-300">
                                <h4 class="font-semibold text-lg group-hover:text-green-200 transition-colors duration-300">Cybersecurity</h4>
                                <p class="text-sm text-white/90 group-hover:text-white transition-colors duration-300">Protection First</p>
                            </div>
                            
                            <!-- Enhanced Floating Icon -->
                            <div class="absolute top-4 right-4 w-8 h-8 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-x-0 group-hover:translate-x-0 group-hover:rotate-12">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            
                            <!-- Decorative Corner -->
                            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-green-400/30 to-transparent rounded-bl-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                    </div>
                    
                    <!-- Bottom Right Image -->
                    <div class="relative group animate-fade-in-up welcome-image-float" style="animation-delay: 0.4s;">
                        <div class="welcome-image-container relative overflow-hidden rounded-2xl border-4 border-purple-200 group-hover:border-purple-400 transition-all duration-500 shadow-lg group-hover:shadow-2xl transform group-hover:-translate-y-2 group-hover:scale-105">
                            <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" 
                                 alt="IT Support" 
                                 class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110">
                            
                            <!-- Enhanced Glow Effect -->
                            <div class="welcome-image-glow"></div>
                            
                            <!-- Animated Border Glow -->
                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-purple-400/20 via-transparent to-purple-400/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            
                            <!-- Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                            
                            <!-- Content -->
                            <div class="absolute bottom-4 left-4 text-white transform group-hover:translate-y-0 translate-y-2 transition-transform duration-300">
                                <h4 class="font-semibold text-lg group-hover:text-purple-200 transition-colors duration-300">IT Support</h4>
                                <p class="text-sm text-white/90 group-hover:text-white transition-colors duration-300">24/7 Service</p>
                            </div>
                            
                            <!-- Enhanced Floating Icon -->
                            <div class="absolute top-4 right-4 w-8 h-8 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-x-0 group-hover:translate-x-0 group-hover:rotate-12">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 2.25a9.75 9.75 0 100 19.5 9.75 9.75 0 000-19.5z"></path>
                                </svg>
                            </div>
                            
                            <!-- Decorative Corner -->
                            <div class="absolute top-0 right-0 w-16 h-16 bg-gradient-to-br from-purple-400/30 to-transparent rounded-bl-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="section-padding bg-secondary-50">
    <div class="container-custom">
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-4">
                See Our <span class="text-primary-600">IT Support Services</span>
            </h2>
        </div>

        <!-- Featured Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <!-- IT Support -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 p-6 text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                            </svg>
                        </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-3">IT Support</h3>
                <p class="text-sm text-secondary-600 mb-4">
                    We offer a broad array of services, which will help you to maintain your IT systems on a day-to-day basis.
                </p>
            </div>

            <!-- Cloud Services -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 p-6 text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                            </svg>
                        </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-3">Cloud Services</h3>
                <p class="text-sm text-secondary-600 mb-4">
                    We provide cloud services to suit your needs. From Anti-Virus to Cloud backups, we have a range of choice to store your data.
                </p>
                    </div>

            <!-- Office 365 -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 p-6 text-center">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-3">Office 365</h3>
                <p class="text-sm text-secondary-600 mb-4">
                    Office 365 enables small businesses to work remotely and connect employees all over the world. Find out how we can help.
                </p>
            </div>

            <!-- Cybersecurity -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 p-6 text-center">
                <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-3">Cybersecurity</h3>
                <p class="text-sm text-secondary-600 mb-4">
                    Cyber security is the greatest threat to businesses today, do you feel your IT systems and your IT users are protected?
                </p>
            </div>
        </div>

        <!-- View All Services Button -->
        <div class="text-center">
            <a href="#services" class="btn-primary inline-flex items-center">
                View All Services
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </div>
</section>


<!-- About Section -->
<section id="about" class="section-padding bg-secondary-50">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-6">Why Choose BluePeak MSP?</h2>
                <p class="text-lg text-secondary-600 mb-8">
                    With over a decade of experience in IT services, we understand the unique challenges 
                    businesses face in today's digital landscape. Our team of certified professionals 
                    is dedicated to providing reliable, scalable, and secure technology solutions.
                </p>
                
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-secondary-900 mb-2">Proactive Monitoring</h3>
                            <p class="text-secondary-600">24/7 system monitoring to prevent issues before they impact your business.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-secondary-900 mb-2">Scalable Solutions</h3>
                            <p class="text-secondary-600">Technology that grows with your business, from startup to enterprise.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-secondary-900 mb-2">Expert Team</h3>
                            <p class="text-secondary-600">Certified professionals with deep expertise in modern technologies.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="relative">
                <!-- Professional IT Team Image with Enhanced Design -->
                <div class="hero-image-container">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         alt="Professional IT Support Team at BluePeak MSP" 
                         class="w-full h-96 object-cover">
                    
                    <!-- Decorative Corner -->
                    <div class="decorative-corner"></div>
                    
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    
                    <!-- Content Overlay -->
                    <div class="absolute bottom-6 left-6 right-6 text-white z-10">
                        <h3 class="text-2xl font-bold mb-2">Expert IT Team</h3>
                        <p class="text-white/90 mb-4">Certified professionals dedicated to your success</p>
                        
                        <!-- Stats Row -->
                        <div class="grid grid-cols-3 gap-4">
                        <div class="text-center">
                                <div class="text-xl font-bold text-white">500+</div>
                                <div class="text-xs text-white/80">Happy Clients</div>
                        </div>
                        <div class="text-center">
                                <div class="text-xl font-bold text-white">10+</div>
                                <div class="text-xs text-white/80">Years Experience</div>
                        </div>
                        <div class="text-center">
                                <div class="text-xl font-bold text-white">99.9%</div>
                                <div class="text-xs text-white/80">Uptime SLA</div>
                        </div>
                        </div>
                    </div>
                    
                    <!-- Floating Badge -->
                    <div class="absolute -top-4 right-4 bg-white rounded-xl shadow-lg p-4 w-28 z-20">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-primary-600 mb-1">24/7</div>
                            <div class="text-xs text-secondary-600">Support</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sectors Section -->
<section id="sectors" class="section-padding bg-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-4 py-2 bg-primary-100 rounded-full text-primary-700 text-sm font-medium mb-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
                Industry Expertise
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-4">
                Specialized IT Support for <span class="text-primary-600">Your Industry</span>
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                Every industry has unique IT requirements and compliance needs. Our specialized solutions are tailored to meet the specific challenges of your sector.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Law Firms -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 group">
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                         alt="Law Firms - Legal office with gavel and legal documents" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                    <div class="absolute top-4 right-4">
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-xl font-bold">Law Firms</h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-secondary-600 mb-4 text-sm">
                        Secure IT solutions for legal practices.
                    </p>
                    <ul class="space-y-2 text-sm text-secondary-600">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Client data protection
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Compliance management
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Secure document management
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Banking & Finance -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 group">
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                         alt="Banking & Finance - Financial charts and trading data on screens" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                    <div class="absolute top-4 right-4">
                        <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-xl font-bold">Banking & Finance</h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-secondary-600 mb-4 text-sm">
                        Compliance-focused IT for financial institutions.
                    </p>
                    <ul class="space-y-2 text-sm text-secondary-600">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Regulatory compliance
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Financial data security
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Transaction monitoring
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Healthcare -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 group">
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                         alt="Healthcare - Medical professionals using digital devices in hospital" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                    <div class="absolute top-4 right-4">
                        <div class="w-12 h-12 bg-red-600 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-xl font-bold">Healthcare</h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-secondary-600 mb-4 text-sm">
                        HIPAA-compliant IT for healthcare providers.
                    </p>
                    <ul class="space-y-2 text-sm text-secondary-600">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            HIPAA compliance
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Patient data protection
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Medical record systems
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Construction -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 group">
                <div class="relative h-48">
                    <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                         alt="Construction - Construction site with digital devices and blueprints" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                    <div class="absolute top-4 right-4">
                        <div class="w-12 h-12 bg-orange-600 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-xl font-bold">Construction</h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-secondary-600 mb-4 text-sm">
                        IT solutions for construction and project management.
                    </p>
                    <ul class="space-y-2 text-sm text-secondary-600">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-orange-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Project management systems
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-orange-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            CAD software support
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 text-orange-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Field connectivity
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Additional Sectors -->
        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-secondary-50 rounded-xl p-6 hover:bg-secondary-100 transition-colors duration-300">
                <h4 class="font-semibold text-secondary-900 mb-2">Manufacturing</h4>
                <p class="text-sm text-secondary-600">Production systems protection.</p>
            </div>
            <div class="bg-secondary-50 rounded-xl p-6 hover:bg-secondary-100 transition-colors duration-300">
                <h4 class="font-semibold text-secondary-900 mb-2">Retail & E-commerce</h4>
                <p class="text-sm text-secondary-600">POS and e-commerce solutions.</p>
            </div>
            <div class="bg-secondary-50 rounded-xl p-6 hover:bg-secondary-100 transition-colors duration-300">
                <h4 class="font-semibold text-secondary-900 mb-2">Education</h4>
                <p class="text-sm text-secondary-600">Educational technology support.</p>
            </div>
        </div>
    </div>
</section>

<!-- Other Cloud Services Gallery Section -->
<section id="cloud-services" class="section-padding bg-gradient-to-br from-primary-50 to-secondary-50">
    <div class="container-custom">
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-4 py-2 bg-primary-100 rounded-full text-primary-700 text-sm font-medium mb-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                </svg>
                Cloud Solutions
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-4">
                Other <span class="text-primary-600">Cloud Services</span>
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                Comprehensive cloud solutions to modernize your business infrastructure and enhance productivity
            </p>
        </div>

        <!-- Cloud Services Icons Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-8">
                <!-- Anti-Virus Solutions -->
            <div class="flex flex-col items-center text-center group">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mb-4 group-hover:bg-primary-200 transition-colors">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                <h3 class="text-sm font-semibold text-secondary-900 mb-1">Anti-Virus</h3>
                <p class="text-xs text-secondary-600">Security</p>
                </div>

            <!-- Office 365 -->
            <div class="flex flex-col items-center text-center group">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mb-4 group-hover:bg-primary-200 transition-colors">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                <h3 class="text-sm font-semibold text-secondary-900 mb-1">Office 365</h3>
                <p class="text-xs text-secondary-600">Productivity</p>
            </div>

            <!-- Office 365 Support -->
            <div class="flex flex-col items-center text-center group">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mb-4 group-hover:bg-primary-200 transition-colors">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 2.25a9.75 9.75 0 100 19.5 9.75 9.75 0 000-19.5z"></path>
                            </svg>
                        </div>
                <h3 class="text-sm font-semibold text-secondary-900 mb-1">O365 Support</h3>
                <p class="text-xs text-secondary-600">Support</p>
            </div>

            <!-- Office 365 Backup -->
            <div class="flex flex-col items-center text-center group">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mb-4 group-hover:bg-primary-200 transition-colors">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path>
                            </svg>
                        </div>
                <h3 class="text-sm font-semibold text-secondary-900 mb-1">O365 Backup</h3>
                <p class="text-xs text-secondary-600">Backup</p>
            </div>

            <!-- Web Filtering -->
            <div class="flex flex-col items-center text-center group">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mb-4 group-hover:bg-primary-200 transition-colors">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                            </svg>
                        </div>
                <h3 class="text-sm font-semibold text-secondary-900 mb-1">Web Filtering</h3>
                <p class="text-xs text-secondary-600">Security</p>
            </div>

            <!-- Microsoft Azure -->
            <div class="flex flex-col items-center text-center group">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mb-4 group-hover:bg-primary-200 transition-colors">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                            </svg>
                        </div>
                <h3 class="text-sm font-semibold text-secondary-900 mb-1">Azure</h3>
                <p class="text-xs text-secondary-600">Cloud</p>
            </div>

            <!-- Email Signatures -->
            <div class="flex flex-col items-center text-center group">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mb-4 group-hover:bg-primary-200 transition-colors">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path>
                            </svg>
                        </div>
                <h3 class="text-sm font-semibold text-secondary-900 mb-1">Email Signatures</h3>
                <p class="text-xs text-secondary-600">Management</p>
            </div>

            <!-- Performance Optimization -->
            <div class="flex flex-col items-center text-center group">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mb-4 group-hover:bg-primary-200 transition-colors">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                <h3 class="text-sm font-semibold text-secondary-900 mb-1">Performance</h3>
                <p class="text-xs text-secondary-600">Optimization</p>
            </div>
        </div>

        <!-- Gallery Stats -->
        <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="text-3xl font-bold text-primary-600 mb-2">8+</div>
                <div class="text-secondary-600">Cloud Services</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-primary-600 mb-2">99.9%</div>
                <div class="text-secondary-600">Uptime Guarantee</div>
            </div>
            <div class="text-center">
                <div class="text-3xl font-bold text-primary-600 mb-2">24/7</div>
                <div class="text-secondary-600">Cloud Support</div>
            </div>
        </div>
    </div>
</section>

<!-- Partners Section -->
<section id="partners" class="section-padding bg-white overflow-hidden">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-4">Our Technology Partners</h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                We work with industry-leading technology partners to deliver the best solutions for your business
            </p>
        </div>

        <!-- Partners Slider -->
        <div class="relative">
            <div class="partners-slider overflow-hidden">
                <div class="partners-track flex animate-scroll">
                    <!-- Partner 1: Microsoft -->
                    <div class="partner-item flex-shrink-0 bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow duration-300 flex items-center justify-center">
                            <div class="text-center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" 
                                     alt="Microsoft" 
                                 class="h-8 mx-auto mb-2">
                                <div class="text-xs text-secondary-600">Gold Partner</div>
                        </div>
                    </div>

                    <!-- Partner 2: AWS -->
                    <div class="partner-item flex-shrink-0 bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow duration-300 flex items-center justify-center">
                            <div class="text-center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/93/Amazon_Web_Services_Logo.svg" 
                                     alt="AWS" 
                                 class="h-8 mx-auto mb-2">
                                <div class="text-xs text-secondary-600">Advanced Partner</div>
                        </div>
                    </div>

                    <!-- Partner 3: Cisco -->
                    <div class="partner-item flex-shrink-0 bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow duration-300 flex items-center justify-center">
                            <div class="text-center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Cisco_logo_blue_2016.svg" 
                                     alt="Cisco" 
                                 class="h-8 mx-auto mb-2">
                                <div class="text-xs text-secondary-600">Certified Partner</div>
                        </div>
                    </div>

                    <!-- Partner 4: VMware -->
                    <div class="partner-item flex-shrink-0 bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow duration-300 flex items-center justify-center">
                            <div class="text-center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Vmware_logo_gry_RGB_300dpi.jpg" 
                                     alt="VMware" 
                                 class="h-8 mx-auto mb-2">
                                <div class="text-xs text-secondary-600">Solution Provider</div>
                        </div>
                    </div>

                    <!-- Partner 5: Google Cloud -->
                    <div class="partner-item flex-shrink-0 bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow duration-300 flex items-center justify-center">
                            <div class="text-center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Google_Cloud_logo.svg" 
                                     alt="Google Cloud" 
                                 class="h-8 mx-auto mb-2">
                                <div class="text-xs text-secondary-600">Partner</div>
                        </div>
                    </div>

                    <!-- Partner 6: Dell -->
                    <div class="partner-item flex-shrink-0 bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow duration-300 flex items-center justify-center">
                            <div class="text-center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/1/17/Dell_logo_2016.svg" 
                                     alt="Dell" 
                                 class="h-8 mx-auto mb-2">
                                <div class="text-xs text-secondary-600">Technology Partner</div>
                        </div>
                    </div>

                    <!-- Partner 7: HP -->
                    <div class="partner-item flex-shrink-0 bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow duration-300 flex items-center justify-center">
                            <div class="text-center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/a/ad/HP_logo_2012.svg" 
                                     alt="HP" 
                                 class="h-8 mx-auto mb-2">
                                <div class="text-xs text-secondary-600">Business Partner</div>
                        </div>
                    </div>

                    <!-- Duplicate partners for seamless loop -->
                    <!-- Partner 1: Microsoft -->
                    <div class="partner-item flex-shrink-0 bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow duration-300 flex items-center justify-center">
                            <div class="text-center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" 
                                     alt="Microsoft" 
                                 class="h-8 mx-auto mb-2">
                                <div class="text-xs text-secondary-600">Gold Partner</div>
                        </div>
                    </div>

                    <!-- Partner 2: AWS -->
                    <div class="partner-item flex-shrink-0 bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow duration-300 flex items-center justify-center">
                            <div class="text-center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/93/Amazon_Web_Services_Logo.svg" 
                                     alt="AWS" 
                                 class="h-8 mx-auto mb-2">
                                <div class="text-xs text-secondary-600">Advanced Partner</div>
                        </div>
                    </div>

                    <!-- Partner 3: Cisco -->
                    <div class="partner-item flex-shrink-0 bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow duration-300 flex items-center justify-center">
                            <div class="text-center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Cisco_logo_blue_2016.svg" 
                                     alt="Cisco" 
                                 class="h-8 mx-auto mb-2">
                                <div class="text-xs text-secondary-600">Certified Partner</div>
                        </div>
                    </div>

                    <!-- Partner 4: VMware -->
                    <div class="partner-item flex-shrink-0 bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow duration-300 flex items-center justify-center">
                            <div class="text-center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Vmware_logo_gry_RGB_300dpi.jpg" 
                                     alt="VMware" 
                                 class="h-8 mx-auto mb-2">
                                <div class="text-xs text-secondary-600">Solution Provider</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="section-padding bg-gradient-to-br from-primary-50 to-secondary-50">
    <div class="container-custom">
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-4 py-2 bg-primary-100 rounded-full text-primary-700 text-sm font-medium mb-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>
                Client Testimonials
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-4">
                What Our <span class="text-primary-600">Clients Say</span>
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                Don't just take our word for it - hear from the businesses we've helped transform
            </p>
        </div>

        <!-- Featured Testimonial -->
        <div class="mb-16">
            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 relative overflow-hidden">
                <div class="absolute top-0 right-4 w-28 h-28 bg-primary-100 rounded-full -translate-y-16 translate-x-0"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-secondary-100 rounded-full translate-y-12 translate-x-0"></div>
                
                <div class="relative z-10">
                    <div class="flex items-center justify-center mb-8">
                        @for($i = 1; $i <= 5; $i++)
                            <svg class="w-6 h-6 text-yellow-400 mx-1" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        @endfor
                    </div>
                    
                    <blockquote class="text-2xl md:text-3xl font-medium text-secondary-900 text-center mb-8 leading-relaxed">
                        "BluePeak MSP transformed our IT infrastructure completely. Their 24/7 support and proactive monitoring have been game-changers for our business operations."
                    </blockquote>
                    
                    <div class="flex items-center justify-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-primary-500 to-primary-600 rounded-full flex items-center justify-center mr-6">
                            <span class="text-white text-xl font-bold">SC</span>
                        </div>
                        <div class="text-center md:text-left">
                            <div class="text-xl font-semibold text-secondary-900">Sarah Chen</div>
                            <div class="text-primary-600 font-medium">CEO, TechStart Inc.</div>
                            <div class="text-sm text-secondary-600 mt-1">500+ employees</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 border-l-4 border-primary-500">
                <div class="flex items-center mb-4">
                    @for($i = 1; $i <= 5; $i++)
                        <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    @endfor
                </div>
                <p class="text-secondary-600 mb-6 italic">"The team's expertise in cloud migration saved us months of work. Our systems are now more secure and efficient than ever."</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                        <span class="text-blue-600 font-bold text-lg">MR</span>
                    </div>
                    <div>
                        <div class="font-semibold text-secondary-900">Michael Rodriguez</div>
                        <div class="text-sm text-secondary-600">CTO, Global Solutions Ltd.</div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow duration-300 border-l-4 border-green-500">
                <div class="flex items-center mb-4">
                    @for($i = 1; $i <= 5; $i++)
                        <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                    @endfor
                </div>
                <p class="text-secondary-600 mb-6 italic">"Outstanding service and support. BluePeak MSP has become an integral part of our business operations."</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                        <span class="text-green-600 font-bold text-lg">ET</span>
                    </div>
                    <div>
                        <div class="font-semibold text-secondary-900">Emily Thompson</div>
                        <div class="text-sm text-secondary-600">Operations Director, Innovation Corp.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="mt-16 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-4xl font-bold text-primary-600 mb-2">98%</div>
                <div class="text-secondary-600">Client Satisfaction</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-primary-600 mb-2">500+</div>
                <div class="text-secondary-600">Happy Clients</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-primary-600 mb-2">24/7</div>
                <div class="text-secondary-600">Support Available</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-primary-600 mb-2">15+</div>
                <div class="text-secondary-600">Years Experience</div>
            </div>
        </div>
    </div>
</section>

<!-- Case Studies Section -->
<section id="case-studies" class="section-padding bg-secondary-50">
    <div class="container-custom">
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-4 py-2 bg-primary-100 rounded-full text-primary-700 text-sm font-medium mb-4">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                Success Stories
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-4">
                Latest <span class="text-primary-600">Case Studies</span>
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                Discover how we've helped businesses transform their IT infrastructure and achieve their goals
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Case Study 1: Alpha Contracts Leasing Ltd -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                         alt="Cloud Migration and IT Infrastructure" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4 text-white">
                        <h3 class="text-lg font-semibold">Alpha Contracts Leasing Ltd</h3>
                        <p class="text-sm text-white/90">Cloud Migration Project</p>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Cloud Migration</span>
                        <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full ml-2">Security</span>
                    </div>
                    <p class="text-secondary-600 mb-4">
                        Complete IT infrastructure overhaul for a growing leasing company, including cloud migration to Microsoft Azure and implementation of comprehensive security measures.
                    </p>
                    <div class="space-y-2 mb-6">
                        <div class="flex items-center text-sm text-secondary-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            99.9% uptime achieved
                        </div>
                        <div class="flex items-center text-sm text-secondary-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            60% cost reduction
                        </div>
                        <div class="flex items-center text-sm text-secondary-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Enhanced security posture
                        </div>
                    </div>
                    <button class="text-primary-600 font-medium hover:text-primary-700 transition-colors">
                        View More →
                    </button>
                </div>
            </div>

            <!-- Case Study 2: NAYC & ACUK -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                         alt="Healthcare IT Management" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4 text-white">
                        <h3 class="text-lg font-semibold">NAYC & ACUK</h3>
                        <p class="text-sm text-white/90">Healthcare IT Services</p>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Managed Services</span>
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full ml-2">Support</span>
                    </div>
                    <p class="text-secondary-600 mb-4">
                        Comprehensive managed IT services for a healthcare organization, ensuring compliance with industry regulations while improving operational efficiency.
                    </p>
                    <div class="space-y-2 mb-6">
                        <div class="flex items-center text-sm text-secondary-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            24/7 monitoring implemented
                        </div>
                        <div class="flex items-center text-sm text-secondary-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            HIPAA compliance achieved
                        </div>
                        <div class="flex items-center text-sm text-secondary-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            50% faster response times
                        </div>
                    </div>
                    <button class="text-primary-600 font-medium hover:text-primary-700 transition-colors">
                        View More →
                    </button>
                </div>
            </div>

            <!-- Case Study 3: Health Watch -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="h-48 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                         alt="Cybersecurity and Data Protection" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4 text-white">
                        <h3 class="text-lg font-semibold">Health Watch</h3>
                        <p class="text-sm text-white/90">Cybersecurity Solutions</p>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <span class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Cybersecurity</span>
                        <span class="bg-orange-100 text-orange-800 text-xs font-medium px-2.5 py-0.5 rounded-full ml-2">Backup</span>
                    </div>
                    <p class="text-secondary-600 mb-4">
                        Advanced cybersecurity implementation and disaster recovery setup for a healthcare monitoring service, ensuring patient data protection and business continuity.
                    </p>
                    <div class="space-y-2 mb-6">
                        <div class="flex items-center text-sm text-secondary-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Zero security breaches
                        </div>
                        <div class="flex items-center text-sm text-secondary-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            99.99% backup success rate
                        </div>
                        <div class="flex items-center text-sm text-secondary-600">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            RTO under 4 hours
                        </div>
                    </div>
                    <button class="text-primary-600 font-medium hover:text-primary-700 transition-colors">
                        View More →
                    </button>
                </div>
            </div>
        </div>

        <!-- View All Case Studies Button -->
        <div class="text-center mt-12">
            <button class="btn-primary inline-flex items-center">
                <span>View All Case Studies</span>
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </button>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section-padding bg-gradient-to-br from-secondary-50 to-primary-50 relative overflow-hidden">
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
            <h2 class="text-3xl md:text-5xl font-bold text-secondary-900 mb-6">
                Get In <span class="text-primary-600">Touch</span>
            </h2>
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
                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-secondary-900">Live Chat</h3>
                            <p class="text-sm text-secondary-600">Get instant support</p>
                        </div>
                    </div>
                    <button id="startChatBtnHome" class="text-green-600 font-medium text-lg hover:text-green-700 transition-colors">
                        Start Chat
                    </button>
                    <p class="text-secondary-500 text-sm mt-1">Available 24/7</p>
                </div>

                <div class="bg-white rounded-2xl p-6 border border-secondary-200 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-secondary-900">Email Us</h3>
                            <p class="text-sm text-secondary-600">Send us a message</p>
                        </div>
                    </div>
                    <a href="mailto:info@bluepeakmsp.com" class="text-blue-600 font-medium text-lg hover:text-blue-700 transition-colors">
                        info@bluepeakmsp.com
                    </a>
                    <p class="text-secondary-500 text-sm mt-1">support@bluepeakmsp.com</p>
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
                                       autocomplete="name"
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
                                       autocomplete="email"
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
                                       autocomplete="tel"
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
                                       autocomplete="organization"
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
                                    autocomplete="off"
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
                                <p class="text-red-300 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-secondary-900 mb-2">Message *</label>
                            <textarea id="message" name="message" rows="5" required 
                                      autocomplete="off"
                                      class="w-full px-4 py-3 bg-white border border-secondary-300 rounded-lg text-secondary-900 placeholder-secondary-500 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 @error('message') border-red-400 @enderror"
                                      placeholder="Tell us about your IT needs and how we can help...">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-300 text-sm mt-1">{{ $message }}</p>
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

        <!-- Trust Indicators -->
        <div class="mt-16 text-center">
        </div>
    </div>
</section>

<!-- AI Chat Widget - Ashby Style -->
<div id="chatWidget" class="fixed bottom-6 right-6 z-50 hidden" style="position: fixed !important; bottom: 24px !important; right: 24px !important;">
    <!-- Chat Toggle Button -->
    <div id="chatToggle" class="bg-primary-600 hover:bg-primary-700 text-white rounded-full p-4 shadow-lg cursor-pointer transition-all duration-300 hover:scale-105" style="transform-origin: center !important;">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
        </svg>
    </div>

    <!-- Chat Window - Ashby Style -->
    <div id="chatWindow" class="absolute bottom-16 right-4 w-72 max-w-[calc(100vw-4rem)] h-96 bg-white rounded-2xl shadow-2xl border border-gray-200 hidden" style="bottom: 64px !important; max-width: calc(100vw - 4rem) !important;">
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
                       autocomplete="off"
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
    const startChatBtnHome = document.getElementById('startChatBtnHome');
    const chatMessages = document.getElementById('chatMessages');
    const chatInput = document.getElementById('chatInput');
    const sendMessage = document.getElementById('sendMessage');
    const quickOptions = document.querySelectorAll('.quick-option');

    let isChatOpen = false;

    // Show chat widget when Start Chat is clicked
    if (startChatBtnHome) {
        startChatBtnHome.addEventListener('click', function() {
            chatWidget.classList.remove('hidden');
            setTimeout(() => {
                chatWindow.classList.remove('hidden');
                isChatOpen = true;
                chatInput.focus();
            }, 100);
        });
    }

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
