@extends('layouts.app')

@section('title', 'IT Services - Support, Security & Network Management')

@section('content')
<!-- Hero Section -->
<section class="section-padding bg-gradient-to-br from-secondary-50 to-primary-50">
    <div class="container-custom">
        <div class="text-center">
            <div class="inline-flex items-center px-4 py-2 bg-primary-100 rounded-full text-primary-700 text-sm font-medium mb-6">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                Our Services
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 text-secondary-900">
                Comprehensive <span class="text-primary-600">IT Solutions</span>
            </h1>
            <p class="text-xl md:text-2xl text-secondary-600 max-w-4xl mx-auto leading-relaxed">
                From infrastructure management to cybersecurity, we provide end-to-end IT services that keep your business running smoothly and securely.
            </p>
        </div>
    </div>
</section>

<!-- Featured Services -->
@if($featuredServices->count() > 0)
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-4">
                Featured <span class="text-primary-600">Services</span>
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                Our most popular services that help businesses transform their IT infrastructure
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($featuredServices as $service)
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 group">
                <div class="h-48 relative overflow-hidden">
                    <img src="{{ $service->image ?: 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80' }}" 
                         alt="{{ $service->title }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                    <div class="absolute top-4 right-4">
                        <div class="w-12 h-12 bg-primary-600 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-xl font-bold">{{ $service->title }}</h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-secondary-600 mb-6">{{ $service->description }}</p>
                    <a href="{{ route('services.show', $service) }}" class="btn-primary w-full text-center block">
                        Learn More
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- All Services Grid -->
<section class="section-padding bg-secondary-50">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-4">
                All Our <span class="text-primary-600">Services</span>
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                Explore our complete range of IT services designed to meet your business needs
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($services as $service)
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="h-40 relative overflow-hidden">
                    <img src="{{ $service->image ?: 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80' }}" 
                         alt="{{ $service->title }}" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-lg font-bold">{{ $service->title }}</h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-secondary-600 mb-4 text-sm">{{ Str::limit($service->description, 100) }}</p>
                    <a href="{{ route('services.show', $service) }}" class="text-primary-600 font-medium hover:text-primary-700 transition-colors">
                        Learn More →
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section-padding bg-primary-600 text-white">
    <div class="container-custom text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">
            Ready to Transform Your IT Infrastructure?
        </h2>
        <p class="text-xl text-primary-100 mb-8 max-w-3xl mx-auto">
            Get in touch with our experts to discuss how our services can help your business grow and succeed.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#contact" class="bg-white text-primary-600 hover:bg-primary-50 font-semibold py-3 px-8 rounded-lg transition-colors duration-200">
                Get Free Consultation
            </a>
            <a href="tel:+15551234567" class="border-2 border-white text-white hover:bg-white hover:text-primary-600 font-semibold py-3 px-8 rounded-lg transition-colors duration-200">
                Call (555) 123-4567
            </a>
        </div>
    </div>
</section>
@endsection
