@extends('layouts.app')

@section('title', $service->title . ' - BluePeak MSP')

@section('content')
<!-- Hero Section -->
<section class="section-padding bg-gradient-to-br from-secondary-50 to-primary-50">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center px-4 py-2 bg-primary-100 rounded-full text-primary-700 text-sm font-medium mb-6">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    IT Services
                </div>
                <h1 class="text-4xl md:text-5xl font-bold mb-6 text-secondary-900">
                    {{ $service->title }}
                </h1>
                <p class="text-xl text-secondary-600 mb-8 leading-relaxed">
                    {{ $service->description }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#contact" class="bg-primary-600 text-white hover:bg-primary-700 font-semibold py-3 px-8 rounded-lg transition-colors duration-200 text-center">
                        Get Started
                    </a>
                    <a href="tel:+15551234567" class="border-2 border-primary-600 text-primary-600 hover:bg-primary-600 hover:text-white font-semibold py-3 px-8 rounded-lg transition-colors duration-200 text-center">
                        Call Now
                    </a>
                </div>
            </div>
            <div class="relative">
                <img src="{{ $service->image ?: 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' }}" 
                     alt="{{ $service->title }}" 
                     class="w-full h-96 object-cover rounded-2xl shadow-2xl">
                <div class="absolute -top-6 -right-6 w-24 h-24 bg-white rounded-full flex items-center justify-center shadow-lg">
                    <svg class="w-12 h-12 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Details -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="prose prose-lg max-w-none">
                    <h2 class="text-3xl font-bold text-secondary-900 mb-6">Service Overview</h2>
                    <div class="text-secondary-600 leading-relaxed">
                        {!! $service->long_description ?: $service->description !!}
                    </div>
                </div>

                <!-- Features/Benefits -->
                <div class="mt-12">
                    <h3 class="text-2xl font-bold text-secondary-900 mb-6">Key Features</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-3 h-3 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-secondary-900">24/7 Monitoring</h4>
                                <p class="text-secondary-600 text-sm">Round-the-clock system monitoring and support</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-3 h-3 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-secondary-900">Expert Support</h4>
                                <p class="text-secondary-600 text-sm">Dedicated team of certified professionals</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-3 h-3 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-secondary-900">Scalable Solutions</h4>
                                <p class="text-secondary-600 text-sm">Solutions that grow with your business</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-3 h-3 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-secondary-900">Cost Effective</h4>
                                <p class="text-secondary-600 text-sm">Competitive pricing with no hidden fees</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <!-- Contact Card -->
                <div class="bg-primary-50 rounded-2xl p-6 mb-8">
                    <h3 class="text-xl font-bold text-secondary-900 mb-4">Ready to Get Started?</h3>
                    <p class="text-secondary-600 mb-6">Contact our experts to discuss your specific needs and get a customized solution.</p>
                    <div class="space-y-3">
                        <a href="#contact" class="w-full bg-primary-600 hover:bg-primary-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-200 text-center block">
                            Get Free Consultation
                        </a>
                        <a href="tel:+15551234567" class="w-full border border-primary-600 text-primary-600 hover:bg-primary-600 hover:text-white font-semibold py-3 px-6 rounded-lg transition-colors duration-200 text-center block">
                            Call (555) 123-4567
                        </a>
                    </div>
                </div>

                <!-- Service Info -->
                <div class="bg-white border border-secondary-200 rounded-2xl p-6">
                    <h4 class="font-bold text-secondary-900 mb-4">Service Information</h4>
                    <div class="space-y-3 text-sm">
                        <div class="flex justify-between">
                            <span class="text-secondary-600">Availability:</span>
                            <span class="font-medium text-secondary-900">24/7</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-secondary-600">Response Time:</span>
                            <span class="font-medium text-secondary-900">Under 2 hours</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-secondary-600">Support:</span>
                            <span class="font-medium text-secondary-900">Phone & Email</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-secondary-600">Setup Time:</span>
                            <span class="font-medium text-secondary-900">1-3 days</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Services -->
@if($relatedServices->count() > 0)
<section class="section-padding bg-secondary-50">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-4">
                Related <span class="text-primary-600">Services</span>
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                Explore other services that complement {{ $service->title }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($relatedServices as $relatedService)
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="h-40 relative overflow-hidden">
                    <img src="{{ $relatedService->image ?: 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80' }}" 
                         alt="{{ $relatedService->title }}" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-lg font-bold">{{ $relatedService->title }}</h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-secondary-600 mb-4 text-sm">{{ Str::limit($relatedService->description, 100) }}</p>
                    <a href="{{ route('services.show', $relatedService) }}" class="text-primary-600 font-medium hover:text-primary-700 transition-colors">
                        Learn More →
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection
