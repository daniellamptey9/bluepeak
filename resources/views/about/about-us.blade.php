@extends('layouts.app')

@section('title', 'About Us - Your Trusted IT Partner')

@section('content')
<!-- Hero Section -->
<section class="section-padding bg-gradient-to-br from-secondary-50 to-primary-50">
    <div class="container-custom">
        <div class="text-center">
            <div class="inline-flex items-center px-4 py-2 bg-primary-100 rounded-full text-primary-700 text-sm font-medium mb-6">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                About BluePeak MSP
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 text-secondary-900">
                Your Trusted <span class="text-primary-600">IT Partner</span>
            </h1>
            <p class="text-xl md:text-2xl text-secondary-600 max-w-4xl mx-auto leading-relaxed">
                We're a leading Managed Service Provider dedicated to delivering exceptional IT solutions that drive business success.
            </p>
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-6">Our Story</h2>
                <div class="space-y-6 text-secondary-600 leading-relaxed">
                    <p>
                        Founded in 2015, BluePeak MSP began with a simple mission: to provide businesses with reliable, scalable, and secure IT solutions that allow them to focus on what they do best – growing their business.
                    </p>
                    <p>
                        What started as a small team of passionate IT professionals has grown into a comprehensive managed services provider serving businesses across various industries. Our commitment to excellence and customer satisfaction has earned us the trust of hundreds of clients.
                    </p>
                    <p>
                        Today, we continue to evolve with the rapidly changing technology landscape, ensuring our clients always have access to the latest innovations and best practices in IT management.
                    </p>
                </div>
            </div>
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                     alt="Our Team at Work" 
                     class="w-full h-96 object-cover rounded-2xl shadow-2xl">
                <div class="absolute -top-6 -right-6 w-24 h-24 bg-primary-600 rounded-full flex items-center justify-center shadow-lg">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission, Vision, Values -->
<section class="section-padding bg-secondary-50">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-4">
                Our <span class="text-primary-600">Foundation</span>
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                The principles that guide everything we do
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Mission -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-secondary-900 mb-4 text-center">Our Mission</h3>
                <p class="text-secondary-600 text-center leading-relaxed">
                    To empower businesses with cutting-edge IT solutions that drive growth, enhance security, and ensure operational excellence through proactive support and innovative technology.
                </p>
            </div>

            <!-- Vision -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-secondary-900 mb-4 text-center">Our Vision</h3>
                <p class="text-secondary-600 text-center leading-relaxed">
                    To be the leading Managed Service Provider that businesses trust for their technology needs, recognized for our innovation, reliability, and commitment to customer success.
                </p>
            </div>

            <!-- Values -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-secondary-900 mb-4 text-center">Our Values</h3>
                <p class="text-secondary-600 text-center leading-relaxed">
                    Integrity, excellence, and customer-first approach drive everything we do. We believe in building lasting partnerships through transparent communication and exceptional service delivery.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-4">
                Why Choose <span class="text-primary-600">BluePeak MSP</span>
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                We bring decades of experience and a proven track record of success
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-20 h-20 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-3xl font-bold text-primary-600">8+</span>
                </div>
                <h3 class="text-xl font-bold text-secondary-900 mb-2">Years Experience</h3>
                <p class="text-secondary-600">Proven track record in IT management</p>
            </div>

            <div class="text-center">
                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-3xl font-bold text-blue-600">500+</span>
                </div>
                <h3 class="text-xl font-bold text-secondary-900 mb-2">Happy Clients</h3>
                <p class="text-secondary-600">Businesses trust us with their IT</p>
            </div>

            <div class="text-center">
                <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-3xl font-bold text-green-600">99.9%</span>
                </div>
                <h3 class="text-xl font-bold text-secondary-900 mb-2">Uptime Guarantee</h3>
                <p class="text-secondary-600">Reliable systems you can count on</p>
            </div>

            <div class="text-center">
                <div class="w-20 h-20 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-3xl font-bold text-orange-600">24/7</span>
                </div>
                <h3 class="text-xl font-bold text-secondary-900 mb-2">Support Available</h3>
                <p class="text-secondary-600">Always here when you need us</p>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Team -->
<section class="section-padding bg-secondary-50">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-4">
                Leadership <span class="text-primary-600">Team</span>
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                Meet the experts behind BluePeak MSP's success
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
                     alt="CEO" 
                     class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                <h3 class="text-xl font-bold text-secondary-900 mb-2 text-center">Michael Johnson</h3>
                <p class="text-primary-600 font-medium text-center mb-3">CEO & Founder</p>
                <p class="text-secondary-600 text-center text-sm">15+ years in IT leadership, former enterprise architect at Fortune 500 companies.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
                     alt="CTO" 
                     class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                <h3 class="text-xl font-bold text-secondary-900 mb-2 text-center">Sarah Chen</h3>
                <p class="text-primary-600 font-medium text-center mb-3">Chief Technology Officer</p>
                <p class="text-secondary-600 text-center text-sm">Expert in cloud architecture and cybersecurity with 12+ years of experience.</p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" 
                     alt="COO" 
                     class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                <h3 class="text-xl font-bold text-secondary-900 mb-2 text-center">David Rodriguez</h3>
                <p class="text-primary-600 font-medium text-center mb-3">Chief Operations Officer</p>
                <p class="text-secondary-600 text-center text-sm">Operations specialist with deep expertise in service delivery and customer success.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding bg-primary-600 text-white">
    <div class="container-custom text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">
            Ready to Partner with BluePeak MSP?
        </h2>
        <p class="text-xl text-primary-100 mb-8 max-w-3xl mx-auto">
            Let's discuss how our expertise can help your business thrive in today's digital landscape.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact.store') }}" class="bg-white text-primary-600 hover:bg-primary-50 font-semibold py-3 px-8 rounded-lg transition-colors duration-200">
                Get Free Consultation
            </a>
            <a href="{{ route('services.index') }}" class="border-2 border-white text-white hover:bg-white hover:text-primary-600 font-semibold py-3 px-8 rounded-lg transition-colors duration-200">
                View Our Services
            </a>
        </div>
    </div>
</section>
@endsection

