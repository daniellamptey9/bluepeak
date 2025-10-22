@extends('layouts.app')

@section('title', 'Careers - Join Our IT Support Team')

@section('content')
<!-- Hero Section -->
<section class="section-padding bg-gradient-to-br from-secondary-50 to-primary-50">
    <div class="container-custom">
        <div class="text-center">
            <div class="inline-flex items-center px-4 py-2 bg-primary-100 rounded-full text-primary-700 text-sm font-medium mb-6">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                </svg>
                Join Our Team
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 text-secondary-900">
                Build Your <span class="text-primary-600">Career</span> With Us
            </h1>
            <p class="text-xl md:text-2xl text-secondary-600 max-w-4xl mx-auto leading-relaxed">
                Join a dynamic team of IT professionals who are passionate about delivering exceptional technology solutions and driving innovation.
            </p>
        </div>
    </div>
</section>

<!-- Why Work With Us -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-6">Why Work With Us?</h2>
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-primary-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-secondary-900 mb-2">Growth Opportunities</h3>
                            <p class="text-secondary-600">We invest in our team's professional development with training, certifications, and career advancement opportunities.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-secondary-900 mb-2">Collaborative Culture</h3>
                            <p class="text-secondary-600">Work in a supportive environment where teamwork, innovation, and mutual respect are at the core of everything we do.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-secondary-900 mb-2">Competitive Benefits</h3>
                            <p class="text-secondary-600">Enjoy comprehensive health coverage, retirement plans, flexible schedules, and other benefits that support your well-being.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-secondary-900 mb-2">Cutting-Edge Technology</h3>
                            <p class="text-secondary-600">Work with the latest technologies and tools, gaining experience with industry-leading solutions and platforms.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                     alt="Our Team Working Together" 
                     class="w-full h-96 object-cover rounded-2xl shadow-2xl">
                <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl p-6 shadow-lg">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary-600 mb-2">50+</div>
                        <div class="text-secondary-600 font-medium">Team Members</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Current Openings -->
<section class="section-padding bg-secondary-50">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-4">
                Current <span class="text-primary-600">Openings</span>
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                Explore exciting career opportunities and find your perfect role
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Job Opening 1 -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center justify-between mb-4">
                    <span class="bg-primary-100 text-primary-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Full-time</span>
                    <span class="text-secondary-500 text-sm">Remote/Hybrid</span>
                </div>
                <h3 class="text-xl font-bold text-secondary-900 mb-2">Senior Systems Administrator</h3>
                <p class="text-secondary-600 mb-4">Manage and maintain our clients' IT infrastructure, ensuring optimal performance and security.</p>
                <div class="flex items-center justify-between">
                    <div class="text-sm text-secondary-500">
                        <span class="font-medium">Experience:</span> 5+ years
                    </div>
                    <a href="#apply" class="text-primary-600 hover:text-primary-700 font-medium">Apply Now →</a>
                </div>
            </div>

            <!-- Job Opening 2 -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center justify-between mb-4">
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Full-time</span>
                    <span class="text-secondary-500 text-sm">On-site</span>
                </div>
                <h3 class="text-xl font-bold text-secondary-900 mb-2">Cloud Solutions Architect</h3>
                <p class="text-secondary-600 mb-4">Design and implement cloud solutions for our enterprise clients using AWS, Azure, and GCP.</p>
                <div class="flex items-center justify-between">
                    <div class="text-sm text-secondary-500">
                        <span class="font-medium">Experience:</span> 7+ years
                    </div>
                    <a href="#apply" class="text-primary-600 hover:text-primary-700 font-medium">Apply Now →</a>
                </div>
            </div>

            <!-- Job Opening 3 -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center justify-between mb-4">
                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Full-time</span>
                    <span class="text-secondary-500 text-sm">Remote/Hybrid</span>
                </div>
                <h3 class="text-xl font-bold text-secondary-900 mb-2">Cybersecurity Analyst</h3>
                <p class="text-secondary-600 mb-4">Protect our clients from cyber threats and implement comprehensive security measures.</p>
                <div class="flex items-center justify-between">
                    <div class="text-sm text-secondary-500">
                        <span class="font-medium">Experience:</span> 3+ years
                    </div>
                    <a href="#apply" class="text-primary-600 hover:text-primary-700 font-medium">Apply Now →</a>
                </div>
            </div>

            <!-- Job Opening 4 -->
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
                <div class="flex items-center justify-between mb-4">
                    <span class="bg-orange-100 text-orange-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Full-time</span>
                    <span class="text-secondary-500 text-sm">On-site</span>
                </div>
                <h3 class="text-xl font-bold text-secondary-900 mb-2">IT Support Specialist</h3>
                <p class="text-secondary-600 mb-4">Provide technical support to our clients and help resolve their IT issues efficiently.</p>
                <div class="flex items-center justify-between">
                    <div class="text-sm text-secondary-500">
                        <span class="font-medium">Experience:</span> 2+ years
                    </div>
                    <a href="#apply" class="text-primary-600 hover:text-primary-700 font-medium">Apply Now →</a>
                </div>
            </div>
        </div>

        <!-- View All Jobs -->
        <div class="text-center mt-12">
            <a href="#all-jobs" class="btn-primary inline-flex items-center">
                <span>View All Job Openings</span>
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="section-padding bg-white">
    <div class="container-custom">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-4">
                Employee <span class="text-primary-600">Benefits</span>
            </h2>
            <p class="text-xl text-secondary-600 max-w-3xl mx-auto">
                We offer comprehensive benefits to support your career and personal well-being
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-2">Health Insurance</h3>
                <p class="text-secondary-600 text-sm">Comprehensive medical, dental, and vision coverage</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-2">Retirement Plan</h3>
                <p class="text-secondary-600 text-sm">401(k) with company matching contributions</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-2">Flexible Schedule</h3>
                <p class="text-secondary-600 text-sm">Work-life balance with flexible hours</p>
            </div>

            <div class="text-center">
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-secondary-900 mb-2">Learning & Development</h3>
                <p class="text-secondary-600 text-sm">Training budgets and certification support</p>
            </div>
        </div>
    </div>
</section>

<!-- Application Form -->
<section id="apply" class="section-padding bg-secondary-50">
    <div class="container-custom">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary-900 mb-4">
                    Ready to <span class="text-primary-600">Apply?</span>
                </h2>
                <p class="text-xl text-secondary-600">
                    Send us your resume and let's start a conversation about your future with BluePeak MSP
                </p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg">
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="firstName" class="block text-sm font-medium text-secondary-700 mb-2">First Name *</label>
                            <input type="text" id="firstName" name="firstName" required class="w-full px-4 py-3 border border-secondary-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                        </div>
                        <div>
                            <label for="lastName" class="block text-sm font-medium text-secondary-700 mb-2">Last Name *</label>
                            <input type="text" id="lastName" name="lastName" required class="w-full px-4 py-3 border border-secondary-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="block text-sm font-medium text-secondary-700 mb-2">Email Address *</label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-secondary-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-secondary-700 mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-secondary-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                        </div>
                    </div>

                    <div>
                        <label for="position" class="block text-sm font-medium text-secondary-700 mb-2">Position of Interest *</label>
                        <select id="position" name="position" required class="w-full px-4 py-3 border border-secondary-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                            <option value="">Select a position</option>
                            <option value="senior-systems-admin">Senior Systems Administrator</option>
                            <option value="cloud-solutions-architect">Cloud Solutions Architect</option>
                            <option value="cybersecurity-analyst">Cybersecurity Analyst</option>
                            <option value="it-support-specialist">IT Support Specialist</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label for="resume" class="block text-sm font-medium text-secondary-700 mb-2">Resume/CV *</label>
                        <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required class="w-full px-4 py-3 border border-secondary-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                        <p class="text-sm text-secondary-500 mt-1">Accepted formats: PDF, DOC, DOCX (Max 5MB)</p>
                    </div>

                    <div>
                        <label for="coverLetter" class="block text-sm font-medium text-secondary-700 mb-2">Cover Letter</label>
                        <textarea id="coverLetter" name="coverLetter" rows="4" class="w-full px-4 py-3 border border-secondary-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500" placeholder="Tell us why you're interested in joining BluePeak MSP..."></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn-primary">
                            Submit Application
                        </button>
                        <p class="text-sm text-secondary-500 mt-4">
                            We'll review your application and get back to you within 5 business days.
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

