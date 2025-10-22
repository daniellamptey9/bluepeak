<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bluebridge IT Solutions - Professional IT Services & Cloud Solutions')</title>
    <!-- SFTP Sync Test - Updated: December 22, 2025 -->
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/images/fav.png">
    
    <!-- CSS -->
    <link rel="stylesheet" href="/app.css">
    <link rel="stylesheet" href="/css/app-additional.css">
    
    <!-- JavaScript -->
    <script src="/app.js" defer></script>
</head>
<body class="bg-white text-secondary-900">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-40">
        <div class="container-custom">
            <div class="flex items-center justify-between h-20 py-4">
                <!-- Left Container - Logo -->
                <div class="flex items-center justify-start">
                    <a href="{{ route('home') }}" class="flex items-center hover:opacity-80 transition-opacity">
                        <img src="/bluebridge.png" alt="Bluebridge IT Solutions" class="h-16 w-auto">
                    </a>
                </div>

                <!-- Right Container - Navigation -->
                <div class="flex items-center justify-center">
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <!-- About Dropdown -->
                    <div class="relative group">
                        <button class="text-sm text-secondary-700 hover:text-primary-600 transition-colors flex items-center space-x-1">
                            <span>About</span>
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <!-- About Dropdown Menu -->
                        <div class="absolute top-full left-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-secondary-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2">
                                <a href="{{ route('about.us') }}" class="block px-4 py-2 text-secondary-700 hover:bg-primary-50 hover:text-primary-600 transition-colors">
                                    About Us
                                </a>
                                <a href="{{ route('careers') }}" class="block px-4 py-2 text-secondary-700 hover:bg-primary-50 hover:text-primary-600 transition-colors">
                                    Careers
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- IT Services Dropdown -->
                    <div class="relative group">
                        <button class="text-sm text-secondary-700 hover:text-primary-600 transition-colors flex items-center space-x-1">
                            <span>IT Services</span>
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <!-- IT Services Mega Menu Dropdown -->
                        <div class="absolute top-full left-1/2 transform -translate-x-1/2 mt-2 w-screen max-w-4xl bg-white rounded-xl shadow-2xl border border-secondary-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="p-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="space-y-4">
                                        <a href="{{ route('service.detail', 'it-support') }}" class="block p-4 rounded-lg hover:bg-primary-50 transition-colors group">
                                            <div class="flex items-center space-x-4">
                                                <div class="w-10 h-10 bg-primary-100 rounded-lg flex items-center justify-center">
                                                    <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="font-medium text-secondary-900 group-hover:text-primary-600">IT Support</div>
                                                    <div class="text-sm text-secondary-600">Comprehensive IT support for businesses of all sizes</div>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href="{{ route('service.detail', 'cybersecurity') }}" class="block p-4 rounded-lg hover:bg-primary-50 transition-colors group">
                                            <div class="flex items-center space-x-4">
                                                <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                                    <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="font-medium text-secondary-900 group-hover:text-primary-600">Cyber Security</div>
                                                    <div class="text-sm text-secondary-600">Protect your business from cyber threats</div>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href="{{ route('service.detail', 'cybersecurity-awareness-training') }}" class="block p-4 rounded-lg hover:bg-primary-50 transition-colors group">
                                            <div class="flex items-center space-x-4">
                                                <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center">
                                                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="font-medium text-secondary-900 group-hover:text-primary-600">Cyber Security Awareness Training</div>
                                                    <div class="text-sm text-secondary-600">Empower your team with security awareness</div>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href="{{ route('service.detail', 'it-remote-support') }}" class="block p-4 rounded-lg hover:bg-primary-50 transition-colors group">
                                            <div class="flex items-center space-x-4">
                                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="font-medium text-secondary-900 group-hover:text-primary-600">IT Remote Support</div>
                                                    <div class="text-sm text-secondary-600">Incident response and remote IT support</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    
                                    <div class="space-y-4">
                                        <a href="{{ route('service.detail', 'maintenance-contracts') }}" class="block p-4 rounded-lg hover:bg-primary-50 transition-colors group">
                                            <div class="flex items-center space-x-4">
                                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="font-medium text-secondary-900 group-hover:text-primary-600">Maintenance Contracts</div>
                                                    <div class="text-sm text-secondary-600">Preventive IT maintenance and support</div>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href="{{ route('service.detail', 'small-business-it-support') }}" class="block p-4 rounded-lg hover:bg-primary-50 transition-colors group">
                                            <div class="flex items-center space-x-4">
                                                <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center">
                                                    <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="font-medium text-secondary-900 group-hover:text-primary-600">Small Business IT Support</div>
                                                    <div class="text-sm text-secondary-600">Tailored IT solutions for small businesses</div>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href="{{ route('service.detail', 'it-helpdesk') }}" class="block p-4 rounded-lg hover:bg-primary-50 transition-colors group">
                                            <div class="flex items-center space-x-4">
                                                <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center">
                                                    <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="font-medium text-secondary-900 group-hover:text-primary-600">IT Helpdesk</div>
                                                    <div class="text-sm text-secondary-600">Professional helpdesk support services</div>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href="{{ route('service.detail', 'managed-services') }}" class="block p-4 rounded-lg hover:bg-primary-50 transition-colors group">
                                            <div class="flex items-center space-x-4">
                                                <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="font-medium text-secondary-900 group-hover:text-primary-600">Managed IT Services</div>
                                                    <div class="text-sm text-secondary-600">Complete IT management and 24/7 monitoring</div>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href="{{ route('services.index') }}" class="block p-4 rounded-lg bg-primary-50 hover:bg-primary-100 transition-colors text-center">
                                            <div class="font-medium text-primary-600">View All IT Services →</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Cloud Services Dropdown -->
                    <div class="relative group">
                        <button class="text-sm text-secondary-700 hover:text-primary-600 transition-colors flex items-center space-x-1">
                            <span>Cloud Services</span>
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <!-- Cloud Services Mega Menu Dropdown -->
                        <div class="absolute top-full left-1/2 transform -translate-x-1/2 mt-2 w-screen max-w-4xl bg-white rounded-xl shadow-2xl border border-secondary-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="p-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="space-y-4">
                                        <a href="{{ route('service.detail', 'office-365') }}" class="block p-4 rounded-lg hover:bg-primary-50 transition-colors group">
                                            <div class="flex items-center space-x-4">
                                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="font-medium text-secondary-900 group-hover:text-primary-600">Office 365</div>
                                                    <div class="text-sm text-secondary-600">Complete Microsoft Office 365 solutions</div>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href="{{ route('service.detail', 'office-365-support') }}" class="block p-4 rounded-lg hover:bg-primary-50 transition-colors group">
                                            <div class="flex items-center space-x-4">
                                                <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center">
                                                    <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 2.25a9.75 9.75 0 11-9.75 9.75 9.75 9.75 0 019.75-9.75z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="font-medium text-secondary-900 group-hover:text-primary-600">Office 365 Support</div>
                                                    <div class="text-sm text-secondary-600">Dedicated Office 365 support and training</div>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href="{{ route('service.detail', 'office-365-backup') }}" class="block p-4 rounded-lg hover:bg-primary-50 transition-colors group">
                                            <div class="flex items-center space-x-4">
                                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="font-medium text-secondary-900 group-hover:text-primary-600">Office 365 Backup</div>
                                                    <div class="text-sm text-secondary-600">Complete Office 365 data backup solutions</div>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href="{{ route('service.detail', 'microsoft-teams') }}" class="block p-4 rounded-lg hover:bg-primary-50 transition-colors group">
                                            <div class="flex items-center space-x-4">
                                                <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="font-medium text-secondary-900 group-hover:text-primary-600">Microsoft Teams</div>
                                                    <div class="text-sm text-secondary-600">Collaboration and communication platform</div>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href="{{ route('service.detail', 'microsoft-azure') }}" class="block p-4 rounded-lg hover:bg-primary-50 transition-colors group">
                                            <div class="flex items-center space-x-4">
                                                <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="font-medium text-secondary-900 group-hover:text-primary-600">Microsoft Azure</div>
                                                    <div class="text-sm text-secondary-600">Cloud migration and Azure services</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    
                                    <div class="space-y-4">
                                        <a href="{{ route('service.detail', 'azure-virtual-machines') }}" class="block p-4 rounded-lg hover:bg-primary-50 transition-colors group">
                                            <div class="flex items-center space-x-4">
                                                <div class="w-10 h-10 bg-cyan-100 rounded-lg flex items-center justify-center">
                                                    <svg class="w-5 h-5 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                                                    </svg>
                                    </div>
                                                <div>
                                                    <div class="font-medium text-secondary-900 group-hover:text-primary-600">Azure Virtual Machines</div>
                                                    <div class="text-sm text-secondary-600">Scalable cloud computing infrastructure</div>
                                </div>
                            </div>
                                        </a>
                                        
                                        <a href="{{ route('service.detail', 'azure-storage') }}" class="block p-4 rounded-lg hover:bg-primary-50 transition-colors group">
                                            <div class="flex items-center space-x-4">
                                                <div class="w-10 h-10 bg-teal-100 rounded-lg flex items-center justify-center">
                                                    <svg class="w-5 h-5 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="font-medium text-secondary-900 group-hover:text-primary-600">Azure Storage</div>
                                                    <div class="text-sm text-secondary-600">Secure cloud storage solutions</div>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href="{{ route('service.detail', 'azure-backup') }}" class="block p-4 rounded-lg hover:bg-primary-50 transition-colors group">
                                            <div class="flex items-center space-x-4">
                                                <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center">
                                                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="font-medium text-secondary-900 group-hover:text-primary-600">Azure Backup</div>
                                                    <div class="text-sm text-secondary-600">Cloud-based backup and recovery</div>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href="{{ route('service.detail', 'google-workspace') }}" class="block p-4 rounded-lg hover:bg-primary-50 transition-colors group">
                                            <div class="flex items-center space-x-4">
                                                <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                                    <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="font-medium text-secondary-900 group-hover:text-primary-600">Google Workspace</div>
                                                    <div class="text-sm text-secondary-600">Google's productivity and collaboration suite</div>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href="{{ route('service.detail', 'amazon-web-services') }}" class="block p-4 rounded-lg hover:bg-primary-50 transition-colors group">
                                            <div class="flex items-center space-x-4">
                                                <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center">
                                                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="font-medium text-secondary-900 group-hover:text-primary-600">Amazon Web Services</div>
                                                    <div class="text-sm text-secondary-600">AWS cloud computing services</div>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href="{{ route('service.detail', 'cloud-migration') }}" class="block p-4 rounded-lg hover:bg-primary-50 transition-colors group">
                                            <div class="flex items-center space-x-4">
                                                <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center">
                                                    <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <div class="font-medium text-secondary-900 group-hover:text-primary-600">Cloud Migration</div>
                                                    <div class="text-sm text-secondary-600">Seamless migration to cloud platforms</div>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href="{{ route('services.cloud') }}" class="block p-4 rounded-lg bg-primary-50 hover:bg-primary-100 transition-colors text-center">
                                            <div class="font-medium text-primary-600">View All Cloud Services →</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sectors Dropdown -->
                    <div class="relative group">
                        <button class="text-sm text-secondary-700 hover:text-primary-600 transition-colors flex items-center space-x-1">
                            <span>Sectors</span>
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        
                        <!-- Sectors Dropdown Menu -->
                        <div class="absolute top-full left-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-secondary-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                            <div class="py-2">
                                <a href="{{ route('service.detail', 'healthcare') }}" class="block px-4 py-2 text-secondary-700 hover:bg-primary-50 hover:text-primary-600 transition-colors">
                                    Healthcare
                                </a>
                                <a href="{{ route('service.detail', 'law-firms') }}" class="block px-4 py-2 text-secondary-700 hover:bg-primary-50 hover:text-primary-600 transition-colors">
                                    Law Firms
                                </a>
                                <a href="{{ route('service.detail', 'finance') }}" class="block px-4 py-2 text-secondary-700 hover:bg-primary-50 hover:text-primary-600 transition-colors">
                                    Finance
                                </a>
                                <a href="{{ route('service.detail', 'manufacturing') }}" class="block px-4 py-2 text-secondary-700 hover:bg-primary-50 hover:text-primary-600 transition-colors">
                                    Manufacturing
                                </a>
                                <a href="{{ route('service.detail', 'construction') }}" class="block px-4 py-2 text-secondary-700 hover:bg-primary-50 hover:text-primary-600 transition-colors">
                                    Construction
                                </a>
                                <a href="{{ route('services.sectors') }}" class="block px-4 py-2 text-secondary-700 hover:bg-primary-50 hover:text-primary-600 transition-colors border-t border-secondary-100 mt-2 pt-2">
                                    View All Sectors
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <a href="{{ route('contact') }}" class="text-sm text-secondary-700 hover:text-primary-600 transition-colors">Contact</a>
                    <a href="#contact" class="btn-primary">Get Started</a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="text-secondary-700 hover:text-primary-600 focus:outline-none focus:text-primary-600" id="mobile-menu-button">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Navigation -->
            <div class="md:hidden hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1 bg-white border-t">
                    <!-- Mobile About Menu -->
                    <div class="px-3 py-2">
                        <button class="flex items-center justify-between w-full text-secondary-700 hover:text-primary-600 transition-colors" id="mobile-about-toggle">
                            <span>About</span>
                            <svg class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="hidden mt-2 space-y-2" id="mobile-about-menu">
                            <a href="{{ route('about.us') }}" class="block pl-6 py-2 text-sm text-secondary-600 hover:text-primary-600">About Us</a>
                            <a href="{{ route('careers') }}" class="block pl-6 py-2 text-sm text-secondary-600 hover:text-primary-600">Careers</a>
                        </div>
                    </div>
                    
                    <!-- Mobile IT Services Menu -->
                    <div class="px-3 py-2">
                        <button class="flex items-center justify-between w-full text-secondary-700 hover:text-primary-600 transition-colors" id="mobile-it-services-toggle">
                            <span>IT Services</span>
                            <svg class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="hidden mt-2 space-y-2" id="mobile-it-services-menu">
                            <a href="{{ route('service.detail', 'it-support') }}" class="block pl-6 py-2 text-sm text-secondary-600 hover:text-primary-600">IT Support</a>
                            <a href="{{ route('service.detail', 'cybersecurity') }}" class="block pl-6 py-2 text-sm text-secondary-600 hover:text-primary-600">Cyber Security</a>
                            <a href="{{ route('service.detail', 'cybersecurity-awareness-training') }}" class="block pl-6 py-2 text-sm text-secondary-600 hover:text-primary-600">Cyber Security Awareness Training</a>
                            <a href="{{ route('service.detail', 'it-remote-support') }}" class="block pl-6 py-2 text-sm text-secondary-600 hover:text-primary-600">IT Remote Support</a>
                            <a href="{{ route('service.detail', 'maintenance-contracts') }}" class="block pl-6 py-2 text-sm text-secondary-600 hover:text-primary-600">Maintenance Contracts</a>
                            <a href="{{ route('service.detail', 'small-business-it-support') }}" class="block pl-6 py-2 text-sm text-secondary-600 hover:text-primary-600">Small Business IT Support</a>
                            <a href="{{ route('service.detail', 'it-helpdesk') }}" class="block pl-6 py-2 text-sm text-secondary-600 hover:text-primary-600">IT Helpdesk</a>
                            <a href="{{ route('service.detail', 'managed-services') }}" class="block pl-6 py-2 text-sm text-secondary-600 hover:text-primary-600">Managed IT Services</a>
                        </div>
                    </div>
                    
                    <!-- Mobile Cloud Services Menu -->
                    <div class="px-3 py-2">
                        <button class="flex items-center justify-between w-full text-secondary-700 hover:text-primary-600 transition-colors" id="mobile-cloud-services-toggle">
                            <span>Cloud Services</span>
                            <svg class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="hidden mt-2 space-y-2" id="mobile-cloud-services-menu">
                            <a href="{{ route('service.detail', 'office-365') }}" class="block pl-6 py-2 text-sm text-secondary-600 hover:text-primary-600">Office 365</a>
                            <a href="{{ route('service.detail', 'office-365-support') }}" class="block pl-6 py-2 text-sm text-secondary-600 hover:text-primary-600">Office 365 Support</a>
                            <a href="{{ route('service.detail', 'office-365-backup') }}" class="block pl-6 py-2 text-sm text-secondary-600 hover:text-primary-600">Office 365 Backup</a>
                            <a href="{{ route('service.detail', 'microsoft-teams') }}" class="block pl-6 py-2 text-sm text-secondary-600 hover:text-primary-600">Microsoft Teams</a>
                            <a href="{{ route('service.detail', 'microsoft-azure') }}" class="block pl-6 py-2 text-sm text-secondary-600 hover:text-primary-600">Microsoft Azure</a>
                            <a href="{{ route('service.detail', 'azure-virtual-machines') }}" class="block pl-6 py-2 text-sm text-secondary-600 hover:text-primary-600">Azure Virtual Machines</a>
                            <a href="{{ route('service.detail', 'azure-storage') }}" class="block pl-6 py-2 text-sm text-secondary-600 hover:text-primary-600">Azure Storage</a>
                            <a href="{{ route('service.detail', 'azure-backup') }}" class="block pl-6 py-2 text-sm text-secondary-600 hover:text-primary-600">Azure Backup</a>
                            <a href="{{ route('service.detail', 'google-workspace') }}" class="block pl-6 py-2 text-sm text-secondary-600 hover:text-primary-600">Google Workspace</a>
                            <a href="{{ route('service.detail', 'amazon-web-services') }}" class="block pl-6 py-2 text-sm text-secondary-600 hover:text-primary-600">Amazon Web Services</a>
                            <a href="{{ route('service.detail', 'cloud-migration') }}" class="block pl-6 py-2 text-sm text-secondary-600 hover:text-primary-600">Cloud Migration</a>
                        </div>
                    </div>
                    
                    <!-- Mobile Sectors Menu -->
                    <div class="px-3 py-2">
                        <button class="flex items-center justify-between w-full text-secondary-700 hover:text-primary-600 transition-colors" id="mobile-sectors-toggle">
                            <span>Sectors</span>
                            <svg class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="hidden mt-2 space-y-2" id="mobile-sectors-menu">
                            <a href="{{ route('service.detail', 'healthcare') }}" class="block pl-6 py-2 text-sm text-secondary-600 hover:text-primary-600">Healthcare</a>
                            <a href="{{ route('service.detail', 'law-firms') }}" class="block pl-6 py-2 text-sm text-secondary-600 hover:text-primary-600">Law Firms</a>
                            <a href="{{ route('service.detail', 'finance') }}" class="block pl-6 py-2 text-sm text-secondary-600 hover:text-primary-600">Finance</a>
                        </div>
                    </div>
                    
                    <a href="{{ route('contact') }}" class="block px-3 py-2 text-secondary-700 hover:text-primary-600 transition-colors">Contact</a>
                    <a href="#contact" class="block px-3 py-2 btn-primary text-center">Get Started</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-secondary-900 text-white">
        <div class="container-custom section-padding">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="md:col-span-2">
                    <div class="mb-4">
                        <img src="/images/bluebridge.png" alt="Bluebridge IT Solutions" class="h-16 w-auto" style="filter: brightness(0) invert(1);">
                    </div>
                    <p class="text-secondary-300 mb-6">
                        Your trusted partner for comprehensive IT services. We provide cutting-edge technology solutions 
                        to help your business thrive in the digital age.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-secondary-300 hover:text-white transition-colors">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-secondary-300 hover:text-white transition-colors">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#services" class="text-secondary-300 hover:text-white transition-colors">Services</a></li>
                        <li><a href="#about" class="text-secondary-300 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#team" class="text-secondary-300 hover:text-white transition-colors">Our Team</a></li>
                        <li><a href="{{ route('contact') }}" class="text-secondary-300 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                    <div class="space-y-2 text-secondary-300">
                        <p>123 Business Street</p>
                        <p>Suite 100</p>
                        <p>City, State 12345</p>
                        <p>Phone: (555) 123-4567</p>
                        <p>Email: info@bluepeakmsp.com</p>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-secondary-700 mt-8 pt-8 text-center text-secondary-400">
                <p>&copy; {{ date('Y') }} Bluebridge IT Solutions. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Mobile Menu Toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Mobile About Menu Toggle
        document.getElementById('mobile-about-toggle').addEventListener('click', function() {
            const aboutMenu = document.getElementById('mobile-about-menu');
            const arrow = this.querySelector('svg');
            
            aboutMenu.classList.toggle('hidden');
            arrow.classList.toggle('rotate-180');
        });

        // Mobile IT Services Menu Toggle
        document.getElementById('mobile-it-services-toggle').addEventListener('click', function() {
            const itServicesMenu = document.getElementById('mobile-it-services-menu');
            const arrow = this.querySelector('svg');
            
            itServicesMenu.classList.toggle('hidden');
            arrow.classList.toggle('rotate-180');
        });

        // Mobile Cloud Services Menu Toggle
        document.getElementById('mobile-cloud-services-toggle').addEventListener('click', function() {
            const cloudServicesMenu = document.getElementById('mobile-cloud-services-menu');
            const arrow = this.querySelector('svg');
            
            cloudServicesMenu.classList.toggle('hidden');
            arrow.classList.toggle('rotate-180');
        });

        // Mobile Sectors Menu Toggle
        document.getElementById('mobile-sectors-toggle').addEventListener('click', function() {
            const sectorsMenu = document.getElementById('mobile-sectors-menu');
            const arrow = this.querySelector('svg');
            
            sectorsMenu.classList.toggle('hidden');
            arrow.classList.toggle('rotate-180');
        });

        // Close mega menu when clicking outside
        document.addEventListener('click', function(event) {
            const groups = document.querySelectorAll('.group');
            groups.forEach(group => {
                if (!group.contains(event.target)) {
                    // Remove hover state if needed
                    group.classList.remove('hover:opacity-100', 'hover:visible');
                }
            });
        });
    </script>

    <!-- Hero Slider Script -->
    <script>
        class HeroSlider {
            constructor() {
                this.slides = document.querySelectorAll('.hero-slide');
                this.dots = document.querySelectorAll('.slider-dot');
                this.prevBtn = document.querySelector('.slider-prev');
                this.nextBtn = document.querySelector('.slider-next');
                this.currentSlide = 0;
                this.autoSlideInterval = null;
                this.autoSlideDelay = 5000; // 5 seconds

                this.init();
            }

            init() {
                this.bindEvents();
                this.startAutoSlide();
                this.updateSlider();
            }

            bindEvents() {
                // Dot navigation
                this.dots.forEach((dot, index) => {
                    dot.addEventListener('click', () => this.goToSlide(index));
                });

                // Arrow navigation
                if (this.prevBtn) {
                    this.prevBtn.addEventListener('click', () => this.prevSlide());
                }
                if (this.nextBtn) {
                    this.nextBtn.addEventListener('click', () => this.nextSlide());
                }

                // Pause auto-slide on hover
                const sliderContainer = document.querySelector('.hero-slider');
                if (sliderContainer) {
                    sliderContainer.addEventListener('mouseenter', () => this.pauseAutoSlide());
                    sliderContainer.addEventListener('mouseleave', () => this.startAutoSlide());
                }
            }

            goToSlide(index) {
                this.currentSlide = index;
                this.updateSlider();
                this.restartAutoSlide();
            }

            nextSlide() {
                this.currentSlide = (this.currentSlide + 1) % this.slides.length;
                this.updateSlider();
                this.restartAutoSlide();
            }

            prevSlide() {
                this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
                this.updateSlider();
                this.restartAutoSlide();
            }

            updateSlider() {
                // Update slides
                this.slides.forEach((slide, index) => {
                    slide.classList.remove('active', 'prev');
                    if (index === this.currentSlide) {
                        slide.classList.add('active');
                    } else if (index === (this.currentSlide - 1 + this.slides.length) % this.slides.length) {
                        slide.classList.add('prev');
                    }
                });

                // Update dots
                this.dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === this.currentSlide);
                });
            }

            startAutoSlide() {
                this.pauseAutoSlide();
                this.autoSlideInterval = setInterval(() => {
                    this.nextSlide();
                }, this.autoSlideDelay);
            }

            pauseAutoSlide() {
                if (this.autoSlideInterval) {
                    clearInterval(this.autoSlideInterval);
                    this.autoSlideInterval = null;
                }
            }

            restartAutoSlide() {
                this.pauseAutoSlide();
                this.startAutoSlide();
            }
        }

        // Initialize slider when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            if (document.querySelector('.hero-slide')) {
                new HeroSlider();
            }
        });
    </script>

    <!-- Partners Slider Script -->
    <script>
        class PartnersSlider {
            constructor() {
                this.track = document.querySelector('.partners-track');
                this.items = document.querySelectorAll('.partner-item');
                this.currentIndex = 0;
                this.isAnimating = false;

                if (this.track && this.items.length > 0) {
                    this.init();
                }
            }

            init() {
                this.cloneItems();
                this.startAutoSlide();
                this.bindEvents();
            }

            cloneItems() {
                // Clone items for seamless loop
                this.items.forEach(item => {
                    const clone = item.cloneNode(true);
                    clone.classList.add('clone');
                    this.track.appendChild(clone);
                });
            }

            startAutoSlide() {
                setInterval(() => {
                    if (!this.isAnimating) {
                        this.nextSlide();
                    }
                }, 3000); // 3 seconds
            }

            nextSlide() {
                if (this.isAnimating) return;

                this.isAnimating = true;
                this.currentIndex++;

                // Reset to beginning when we reach the end of original items
                if (this.currentIndex >= this.items.length) {
                    setTimeout(() => {
                        this.currentIndex = 0;
                        this.track.style.transition = 'none';
                        this.track.style.transform = 'translateX(0)';
                        setTimeout(() => {
                            this.track.style.transition = 'transform 0.5s ease';
                            this.isAnimating = false;
                        }, 50);
                    }, 500);
                } else {
                    this.track.style.transform = `translateX(-${this.currentIndex * (100 / this.items.length)}%)`;
                    setTimeout(() => {
                        this.isAnimating = false;
                    }, 500);
                }
            }

            bindEvents() {
                // Pause on hover
                const slider = document.querySelector('.partners-slider');
                if (slider) {
                    slider.addEventListener('mouseenter', () => {
                        this.isAnimating = true;
                    });

                    slider.addEventListener('mouseleave', () => {
                        this.isAnimating = false;
                    });
                }
            }
        }

        // Initialize partners slider when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            if (document.querySelector('.partners-track')) {
                new PartnersSlider();
            }
        });
    </script>

    <!-- Persistent Chat Icon -->
    <div id="persistentChatIcon" class="fixed bottom-6 right-6 z-50" style="position: fixed !important; bottom: 24px !important; right: 24px !important;">
        <div class="bg-primary-600 hover:bg-primary-700 text-white rounded-full p-4 shadow-lg cursor-pointer transition-all duration-300 hover:scale-110 group">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
            </svg>
            <!-- Tooltip -->
            <div class="absolute bottom-full right-0 mb-2 px-3 py-1 bg-gray-800 text-white text-sm rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap">
                Start Chat
                <div class="absolute top-full right-4 w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800"></div>
            </div>
        </div>
    </div>

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

    <!-- Global Chat JavaScript -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const persistentChatIcon = document.getElementById('persistentChatIcon');
        const chatWidget = document.getElementById('chatWidget');
        const chatToggle = document.getElementById('chatToggle');
        const chatWindow = document.getElementById('chatWindow');
        const closeChat = document.getElementById('closeChat');
        const chatMessages = document.getElementById('chatMessages');
        const chatInput = document.getElementById('chatInput');
        const sendMessage = document.getElementById('sendMessage');
        const quickOptions = document.querySelectorAll('.quick-option');

        let isChatOpen = false;

        // Show chat widget when persistent icon is clicked
        persistentChatIcon.addEventListener('click', function() {
            persistentChatIcon.classList.add('hidden');
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

        // Close chat and show persistent icon
        closeChat.addEventListener('click', function() {
            chatWindow.classList.add('hidden');
            chatWidget.classList.add('hidden');
            persistentChatIcon.classList.remove('hidden');
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
</body>
</html>
