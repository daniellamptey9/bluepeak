@extends('layouts.app')

@section('title', 'Industry Sectors - IT Solutions for Every Business')

@section('content')
<!-- Hero Section -->
<section class="section-padding bg-gradient-to-br from-secondary-50 to-primary-50">
    <div class="container-custom">
        <div class="text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center px-4 py-2 bg-primary-100 rounded-full text-primary-700 text-sm font-medium mb-6">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
                Industry Sectors
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 text-secondary-900">
                Specialized <span class="text-primary-600">Industry Solutions</span>
            </h1>
            <p class="text-xl text-secondary-600 mb-8 leading-relaxed">
                We understand that different industries have unique IT requirements. Our sector-specific solutions 
                are tailored to meet the compliance, security, and operational needs of your industry.
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

<!-- Sectors Overview -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-4">
                Our <span class="text-primary-600">Industry Expertise</span>
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                We serve businesses across multiple industries, providing specialized IT solutions 
                that understand the unique challenges and requirements of each sector.
            </p>
        </div>

        <!-- Sectors Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($sectors as $sector)
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden border border-gray-100">
                <div class="h-48 relative overflow-hidden">
                    <img src="{{ $sector['image'] }}" 
                         alt="{{ $sector['title'] }}" 
                         class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-lg font-bold">{{ $sector['title'] }}</h3>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $sector['icon'] }}"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-secondary-900">{{ $sector['title'] }}</h4>
                            <p class="text-sm text-secondary-600">Industry Solutions</p>
                        </div>
                    </div>
                    
                    <p class="text-secondary-600 mb-4 text-sm leading-relaxed">
                        {{ $sector['description'] }}
                    </p>
                    
                    <!-- Features -->
                    <div class="mb-6">
                        <h4 class="font-semibold text-secondary-900 mb-3 text-sm">Key Solutions:</h4>
                        <div class="flex flex-wrap gap-2">
                            @foreach($sector['features'] as $feature)
                            <span class="inline-flex items-center px-2 py-1 bg-primary-50 text-primary-700 text-xs font-medium rounded-full">
                                {{ $feature }}
                            </span>
                            @endforeach
                        </div>
                    </div>
                    
                    <a href="{{ route('service.detail', $sector['slug']) }}" 
                       class="w-full bg-primary-600 hover:bg-primary-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-200 text-center block">
                        Learn More
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Why Industry-Specific IT Matters -->
<section class="section-padding bg-gray-50">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-4">
                Why <span class="text-primary-600">Industry-Specific IT</span> Matters
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                Generic IT solutions don't work for specialized industries. We understand the unique 
                challenges, compliance requirements, and operational needs of each sector.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-3">Compliance Expertise</h3>
                <p class="text-secondary-600 text-sm">
                    We understand industry regulations like HIPAA, SOX, and GDPR, ensuring your IT systems meet all requirements.
                </p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-3">Specialized Solutions</h3>
                <p class="text-secondary-600 text-sm">
                    Our solutions are tailored to your industry's specific workflows, processes, and operational requirements.
                </p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-3">Enhanced Security</h3>
                <p class="text-secondary-600 text-sm">
                    Industry-specific security measures protect your sensitive data and maintain client confidentiality.
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
                    Our industry experience means faster implementation, better outcomes, and reduced risk for your business.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Industry Challenges We Solve -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-4">
                Industry <span class="text-primary-600">Challenges We Solve</span>
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                Every industry faces unique IT challenges. We provide solutions that address 
                these specific pain points and help your business thrive.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-gray-50 rounded-xl p-6">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-3">Healthcare</h3>
                <ul class="text-secondary-600 text-sm space-y-2">
                    <li>• HIPAA compliance requirements</li>
                    <li>• EHR system integration</li>
                    <li>• Telemedicine infrastructure</li>
                    <li>• Patient data security</li>
                </ul>
            </div>

            <div class="bg-gray-50 rounded-xl p-6">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-3">Legal</h3>
                <ul class="text-secondary-600 text-sm space-y-2">
                    <li>• Client confidentiality protection</li>
                    <li>• Document management systems</li>
                    <li>• Case management software</li>
                    <li>• Secure communication</li>
                </ul>
            </div>

            <div class="bg-gray-50 rounded-xl p-6">
                <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-3">Finance</h3>
                <ul class="text-secondary-600 text-sm space-y-2">
                    <li>• Regulatory compliance (SOX, PCI)</li>
                    <li>• Financial data security</li>
                    <li>• Payment processing systems</li>
                    <li>• Risk management tools</li>
                </ul>
            </div>

            <div class="bg-gray-50 rounded-xl p-6">
                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-3">Manufacturing</h3>
                <ul class="text-secondary-600 text-sm space-y-2">
                    <li>• Industrial network security</li>
                    <li>• Production management systems</li>
                    <li>• IoT device integration</li>
                    <li>• Supply chain optimization</li>
                </ul>
            </div>

            <div class="bg-gray-50 rounded-xl p-6">
                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-3">Construction</h3>
                <ul class="text-secondary-600 text-sm space-y-2">
                    <li>• Project management software</li>
                    <li>• Mobile field solutions</li>
                    <li>• Document collaboration</li>
                    <li>• Remote site connectivity</li>
                </ul>
            </div>

            <div class="bg-gray-50 rounded-xl p-6">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-3">Other Industries</h3>
                <ul class="text-secondary-600 text-sm space-y-2">
                    <li>• Retail & e-commerce</li>
                    <li>• Education & training</li>
                    <li>• Real estate</li>
                    <li>• Non-profit organizations</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="section-padding bg-primary-600">
    <div class="container-custom">
        <div class="text-center text-white">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Ready for Industry-Specific IT Solutions?
            </h2>
            <p class="text-xl text-primary-100 mb-8 max-w-3xl mx-auto">
                Let our industry experts help you implement IT solutions that are tailored to your sector's 
                unique requirements. Get a free consultation and discover how we can support your business.
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
