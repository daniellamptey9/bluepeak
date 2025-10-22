@extends('layouts.app')

@section('title', 'Cloud Services - Office 365, Azure & AWS Solutions')

@section('content')
<!-- Hero Section -->
<section class="section-padding bg-gradient-to-br from-secondary-50 to-primary-50">
    <div class="container-custom">
        <div class="text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center px-4 py-2 bg-primary-100 rounded-full text-primary-700 text-sm font-medium mb-6">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                </svg>
                Cloud Services
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 text-secondary-900">
                Complete <span class="text-primary-600">Cloud Solutions</span>
            </h1>
            <p class="text-xl text-secondary-600 mb-8 leading-relaxed">
                Transform your business with our comprehensive cloud services. From Microsoft Azure to Google Workspace, 
                we provide the expertise and support you need to leverage the power of cloud computing.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contact" class="bg-primary-600 text-white hover:bg-primary-700 font-semibold py-3 px-8 rounded-lg transition-colors duration-200 text-center">
                    Get Started
                </a>
                <a href="tel:+15551234567" class="border-2 border-primary-600 text-primary-600 hover:bg-primary-600 hover:text-white font-semibold py-3 px-8 rounded-lg transition-colors duration-200 text-center">
                    Call Now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Cloud Services Overview -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-4">
                Our <span class="text-primary-600">Cloud Services</span>
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                We offer a comprehensive range of cloud services to help your business scale, 
                collaborate, and operate more efficiently in the digital age.
            </p>
        </div>

        <!-- Cloud Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($cloudServices as $service)
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden border border-gray-100">
                <div class="h-48 relative overflow-hidden">
                    <img src="{{ $service['image'] }}" 
                         alt="{{ $service['title'] }}" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-lg font-bold">{{ $service['title'] }}</h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-secondary-600 mb-4 text-sm leading-relaxed">
                        {{ $service['description'] }}
                    </p>
                    
                    <!-- Features -->
                    <div class="mb-6">
                        <h4 class="font-semibold text-secondary-900 mb-3 text-sm">Key Features:</h4>
                        <div class="flex flex-wrap gap-2">
                            @foreach($service['features'] as $feature)
                            <span class="inline-flex items-center px-2 py-1 bg-primary-50 text-primary-700 text-xs font-medium rounded-full">
                                {{ $feature }}
                            </span>
                            @endforeach
                        </div>
                    </div>
                    
                    <a href="{{ route('service.detail', $service['slug']) }}" 
                       class="w-full bg-primary-600 hover:bg-primary-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-200 text-center block">
                        Learn More
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Why Choose Our Cloud Services -->
<section class="section-padding bg-gray-50">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-4">
                Why Choose <span class="text-primary-600">BluePeak MSP</span> for Cloud Services?
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                We're not just cloud providers – we're your strategic technology partners, 
                helping you make the most of cloud computing.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-3">Expert Guidance</h3>
                <p class="text-secondary-600 text-sm">
                    Our certified cloud architects help you choose the right solutions for your business needs.
                </p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-3">Security First</h3>
                <p class="text-secondary-600 text-sm">
                    We implement enterprise-grade security measures to protect your data and applications.
                </p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-3">24/7 Support</h3>
                <p class="text-secondary-600 text-sm">
                    Round-the-clock monitoring and support to ensure your cloud services run smoothly.
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
                    Optimize your cloud spending with our cost management and optimization strategies.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Cloud Migration Process -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-4">
                Our <span class="text-primary-600">Cloud Migration Process</span>
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                We follow a proven methodology to ensure your cloud migration is successful, 
                secure, and minimizes business disruption.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-primary-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">
                    1
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-3">Assessment</h3>
                <p class="text-secondary-600 text-sm">
                    We analyze your current infrastructure and identify the best cloud solutions for your needs.
                </p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-primary-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">
                    2
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-3">Planning</h3>
                <p class="text-secondary-600 text-sm">
                    We create a detailed migration plan with timelines, milestones, and risk mitigation strategies.
                </p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-primary-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">
                    3
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-3">Migration</h3>
                <p class="text-secondary-600 text-sm">
                    We execute the migration with minimal downtime, ensuring data integrity and security.
                </p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-primary-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-xl font-bold">
                    4
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-3">Optimization</h3>
                <p class="text-secondary-600 text-sm">
                    We monitor, optimize, and provide ongoing support to maximize your cloud investment.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="section-padding bg-primary-600">
    <div class="container-custom">
        <div class="text-center text-white">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Ready to Move to the Cloud?
            </h2>
            <p class="text-xl text-primary-100 mb-8 max-w-3xl mx-auto">
                Let our cloud experts help you transform your business with the right cloud solutions. 
                Get a free consultation and discover how cloud computing can benefit your organization.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contact" class="bg-white text-primary-600 hover:bg-gray-100 font-semibold py-3 px-8 rounded-lg transition-colors duration-200 text-center">
                    Get Free Consultation
                </a>
                <a href="tel:+15551234567" class="border-2 border-white text-white hover:bg-white hover:text-primary-600 font-semibold py-3 px-8 rounded-lg transition-colors duration-200 text-center">
                    Call (555) 123-4567
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
