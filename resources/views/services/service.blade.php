@extends('layouts.app')

@section('title', $serviceTitle . ' - Professional IT Service')

@section('content')
<!-- Hero Section -->
<section class="section-padding bg-gradient-to-br from-secondary-50 to-primary-50">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                @php
                    $serviceCategories = [
                        // IT Services
                        'it-support' => 'IT Services',
                        'cybersecurity' => 'IT Services',
                        'cybersecurity-awareness-training' => 'IT Services',
                        'it-remote-support' => 'IT Services',
                        'maintenance-contracts' => 'IT Services',
                        'small-business-it-support' => 'IT Services',
                        'it-helpdesk' => 'IT Services',
                        'managed-services' => 'IT Services',
                        
                        // Cloud Services
                        'office-365' => 'Cloud Services',
                        'office-365-support' => 'Cloud Services',
                        'office-365-backup' => 'Cloud Services',
                        'microsoft-teams' => 'Cloud Services',
                        'microsoft-azure' => 'Cloud Services',
                        'azure-virtual-machines' => 'Cloud Services',
                        'azure-storage' => 'Cloud Services',
                        'azure-backup' => 'Cloud Services',
                        'google-workspace' => 'Cloud Services',
                        'amazon-web-services' => 'Cloud Services',
                        'cloud-migration' => 'Cloud Services',
                        
                        // Sectors
                        'healthcare' => 'Sectors',
                        'law-firms' => 'Sectors',
                        'finance' => 'Sectors',
                        'manufacturing' => 'Sectors',
                        'construction' => 'Sectors',
                    ];
                    $serviceCategory = $serviceCategories[$slug] ?? 'IT Services';
                @endphp
                <div class="inline-flex items-center px-4 py-2 bg-primary-100 rounded-full text-primary-700 text-sm font-medium mb-6">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    {{ $serviceCategory }}
                </div>
                <h1 class="text-4xl md:text-5xl font-bold mb-6 text-secondary-900">
                    {{ $serviceTitle }}
                </h1>
                <p class="text-xl text-secondary-600 mb-8 leading-relaxed">
                    Professional {{ $serviceTitle }} solutions designed to enhance your business operations and ensure optimal performance.
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
                @php
                                        $serviceImages = [
                        'it-support' => '/images/services/it-infrastructure.jpg',
                        'cybersecurity' => '/images/services/cloud-services.jpg',
                        'cybersecurity-awareness-training' => '/images/services/cybersecurity.jpg',
                        'it-remote-support' => '/images/services/it-support.jpg',
                        'maintenance-contracts' => '/images/services/it-infrastructure.jpg',
                        'small-business-it-support' => '/images/team/coo.jpg',
                        'it-helpdesk' => '/images/services/it-support.jpg',
                        'managed-services' => '/images/unsplash/banking-finance.jpg',
                        'office-365' => '/images/services/cloud-services.jpg',
                        'office-365-support' => '/images/services/cloud-services.jpg',
                        'office-365-backup' => '/images/unsplash/banking-finance.jpg',
                        'microsoft-teams' => '/images/services/cloud-services.jpg',
                        'microsoft-azure' => '/images/hero/cloud-computing.jpg',
                        'azure-virtual-machines' => '/images/hero/cloud-computing.jpg',
                        'azure-storage' => '/images/unsplash/banking-finance.jpg',
                        'azure-backup' => '/images/unsplash/banking-finance.jpg',
                        'google-workspace' => '/images/services/cloud-services.jpg',
                        'amazon-web-services' => '/images/hero/cloud-computing.jpg',
                        'cloud-migration' => '/images/unsplash/cloud-migration.jpg',
                        'healthcare' => '/images/unsplash/healthcare.jpg',
                        'law-firms' => '/images/unsplash/law-firms.jpg',
                        'finance' => '/images/unsplash/banking-finance.jpg',
                        'manufacturing' => '/images/services/it-infrastructure.jpg',
                        'construction' => '/images/unsplash/construction.jpg',
                    ];
                    $serviceImage = $serviceImages[$slug] ?? 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80';
                @endphp
                <img src="{{ $serviceImage }}" 
                     alt="{{ $serviceTitle }}" 
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
                    <div class="text-secondary-600 leading-relaxed mb-8">
                        @if($slug === 'it-support')
                            <p>Whether your business is a single user to a 100 user setup, BluePeak MSP offers a broad array of services, which will help you to maintain your IT systems on a day-to-day basis.</p>
                            <p>Our IT Support service provides comprehensive technical assistance to keep your business running smoothly. From troubleshooting hardware issues to software configuration, our expert team ensures your technology works for you, not against you.</p>
                        @elseif($slug === 'cybersecurity')
                            <p>Cyber security is the greatest threat to businesses today, do you feel your IT systems and your IT users are protected?</p>
                            <p>Our comprehensive cybersecurity service protects your business from evolving cyber threats. We implement multi-layered security measures including firewalls, antivirus protection, email security, and regular security assessments to keep your data and systems secure.</p>
                        @elseif($slug === 'cybersecurity-awareness-training')
                            <p>Empower your team with continuous, hands-on learning to stop cyber threats before they cause damage.</p>
                            <p>Our cybersecurity awareness training program educates your employees on the latest security threats and best practices. Through interactive training sessions, simulated phishing attacks, and regular updates, we help build a security-conscious culture within your organization.</p>
                        @elseif($slug === 'it-remote-support')
                            <p>Remote IT support enables us to fix most IT issues by connecting to your computer through our encrypted software. This means we can access your computers to provide maintenance and support without being physically in the room with you.</p>
                            <p>Our remote support service provides instant assistance for technical issues, software installations, system updates, and troubleshooting. With secure remote access, we can resolve problems quickly and efficiently, minimizing downtime for your business.</p>
                        @elseif($slug === 'maintenance-contracts')
                            <p>IT is such an integral part of any business and looking after its upkeep is of vital importance to your business. Downtime can be a major drain on your time and resources and cost you money when you should be concentrating on your own day job.</p>
                            <p>Our maintenance contracts provide proactive IT support to prevent issues before they occur. We offer regular system checkups, software updates, security patches, and preventive maintenance to keep your systems running optimally.</p>
                        @elseif($slug === 'small-business-it-support')
                            <p>At BluePeak MSP, our friendly qualified IT professionals are here to support your small business with IT solutions throughout Northamptonshire.</p>
                            <p>We understand the unique challenges small businesses face with limited IT resources. Our small business IT support service provides cost-effective solutions tailored to your specific needs, helping you compete with larger organizations while maintaining your budget.</p>
                        @elseif($slug === 'it-helpdesk')
                            <p>BluePeak MSP offers a dedicated IT helpdesk for small to medium sized businesses in and around the Northamptonshire area.</p>
                            <p>Our professional helpdesk support service provides your team with a single point of contact for all IT issues. With experienced technicians and streamlined processes, we ensure quick resolution times and minimal disruption to your daily operations.</p>
                        @elseif($slug === 'managed-services')
                            <p>BluePeak MSP offers reliable and cost-effective Managed IT Support tailored for businesses of all sizes. From 24/7 monitoring, cybersecurity, on-site and remote support, and expert IT management.</p>
                            <p>Our managed IT services act as your virtual IT department, handling everything from day-to-day maintenance to strategic planning. We provide comprehensive IT management that allows you to focus on growing your business while we handle the technology.</p>
                        @elseif($slug === 'office-365')
                            <p>Your business to go with Office 365. For many SMBs staying productive means working on the go. Office 365 enables small businesses to work remotely and connect employees in different locations.</p>
                            <p>We help you implement and optimize Microsoft Office 365 for your business. From initial setup and migration to ongoing support and training, we ensure your team gets the most out of this powerful productivity suite.</p>
                        @elseif($slug === 'office-365-support')
                            <p>Microsoft Office 365 is a subscription based online cloud solution that allows you to connect from anywhere with web-enabled apps. Your end users will be able to securely access and share email, documents, contacts, and calendars on PC, Mac or mobile devices.</p>
                            <p>Our Office 365 support service provides expert assistance with setup, configuration, troubleshooting, and optimization. We help you maximize the value of your Office 365 investment while ensuring security and compliance.</p>
                        @elseif($slug === 'office-365-backup')
                            <p>Complete Office 365 SkyKick Cloud Backup for Exchange & OneDrive. You can instantly find and rapidly restore that lost content, giving you peace of mind that no matter what happens your productivity is protected.</p>
                            <p>Our Office 365 backup service ensures your critical data is always protected. Even though Microsoft provides some backup capabilities, our comprehensive backup solution provides additional layers of protection and faster recovery options.</p>
                        @elseif($slug === 'microsoft-teams')
                            <p>Microsoft Teams enables seamless collaboration and communication for your business. Connect your team members, share files, conduct video meetings, and collaborate on projects in real-time.</p>
                            <p>We help you implement and optimize Microsoft Teams for your organization. From initial setup and user training to advanced features and integrations, we ensure your team can collaborate effectively from anywhere.</p>
                        @elseif($slug === 'microsoft-azure')
                            <p>BluePeak MSP are Microsoft Cloud Partners and as such are the perfect company to assist in the move to the Azure platform.</p>
                            <p>Our Microsoft Azure services help you leverage the power of cloud computing. From migration planning and implementation to ongoing management and optimization, we guide you through your cloud transformation journey.</p>
                        @elseif($slug === 'azure-virtual-machines')
                            <p>Azure Virtual Machines provide scalable cloud computing infrastructure for your business applications. Run your workloads in the cloud with the flexibility and control you need.</p>
                            <p>We help you design, deploy, and manage Azure Virtual Machines that meet your specific requirements. From Windows and Linux servers to specialized workloads, we ensure optimal performance and cost-effectiveness.</p>
                        @elseif($slug === 'azure-storage')
                            <p>Azure Storage provides secure, scalable cloud storage solutions for your business data. Store files, databases, and applications with enterprise-grade security and reliability.</p>
                            <p>Our Azure Storage services help you implement the right storage solution for your needs. From blob storage to file shares and databases, we ensure your data is secure, accessible, and cost-effective.</p>
                        @elseif($slug === 'azure-backup')
                            <p>Azure Backup provides cloud-based backup and recovery solutions for your critical business data. Protect your on-premises and cloud workloads with enterprise-grade backup services.</p>
                            <p>We implement and manage Azure Backup solutions that protect your data across all environments. With automated backups and fast recovery options, we ensure your business continuity is never compromised.</p>
                        @elseif($slug === 'google-workspace')
                            <p>Google Workspace provides a comprehensive suite of productivity and collaboration tools for modern businesses. Access Gmail, Drive, Docs, Sheets, and more from anywhere.</p>
                            <p>Our Google Workspace services help you implement and optimize this powerful platform. From initial setup and user migration to advanced features and security configurations, we ensure your team can work efficiently and securely.</p>
                        @elseif($slug === 'amazon-web-services')
                            <p>Amazon Web Services (AWS) provides a comprehensive cloud computing platform with a wide range of services for businesses of all sizes. Scale your infrastructure and applications with the world's leading cloud platform.</p>
                            <p>We help you leverage AWS services to build, deploy, and manage your applications in the cloud. From EC2 instances to S3 storage and advanced services, we provide the expertise you need to succeed with AWS.</p>
                        @elseif($slug === 'cloud-migration')
                            <p>Cloud migration can transform your business by improving scalability, reducing costs, and enhancing security. However, it requires careful planning and execution to ensure a smooth transition.</p>
                            <p>Our cloud migration services help you move your applications, data, and workloads to the cloud safely and efficiently. We assess your current environment, plan the migration strategy, and execute the move with minimal disruption to your business.</p>
                        @elseif($slug === 'healthcare')
                            <p>Healthcare organizations require specialized IT solutions that meet strict compliance requirements, including HIPAA regulations. Our healthcare IT services ensure your practice can focus on patient care while we handle your technology needs.</p>
                            <p>We provide secure, compliant IT infrastructure, electronic health records (EHR) support, telemedicine solutions, and 24/7 monitoring to ensure your systems are always available when patients need care. Our team understands the unique challenges of healthcare IT and provides solutions tailored to your practice.</p>
                        @elseif($slug === 'law-firms')
                            <p>Law firms handle sensitive client information and require secure, reliable IT systems to protect confidential data and maintain client trust. Our legal IT services are designed to meet the specific needs of legal practices.</p>
                            <p>We provide secure document management, case management software support, secure communication systems, and compliance solutions to help your firm operate efficiently while maintaining the highest security standards. Our team understands legal industry requirements and provides solutions that support your practice.</p>
                        @elseif($slug === 'finance')
                            <p>Financial services organizations require robust IT infrastructure to handle sensitive financial data, ensure regulatory compliance, and maintain customer trust. Our finance IT services provide the security and reliability your business needs.</p>
                            <p>We offer secure network infrastructure, compliance solutions, data encryption, secure payment processing support, and 24/7 monitoring to protect your financial data. Our team understands financial industry regulations and provides solutions that help you maintain compliance while growing your business.</p>
                        @elseif($slug === 'manufacturing')
                            <p>Manufacturing businesses rely on technology to optimize production, manage supply chains, and maintain quality control. Our manufacturing IT services help you leverage technology to improve efficiency and reduce costs.</p>
                            <p>We provide industrial network solutions, production management software support, inventory management systems, and IoT integration to help your manufacturing operations run smoothly. Our team understands manufacturing processes and provides technology solutions that support your production goals.</p>
                        @elseif($slug === 'construction')
                            <p>Construction companies need reliable IT systems to manage projects, coordinate teams, and handle complex logistics. Our construction IT services provide the technology foundation your business needs to succeed.</p>
                            <p>We offer project management software support, mobile device management for field teams, cloud-based collaboration tools, and secure data storage for project documentation. Our team understands construction industry challenges and provides solutions that help you manage projects more effectively.</p>
                        @else
                            <p>Professional {{ $serviceTitle }} solutions designed to meet your specific business needs. Our experienced team provides expert guidance and support to help you achieve your technology goals.</p>
                            <p>Contact us today to learn more about how our {{ $serviceTitle }} service can benefit your organization and help drive your business forward.</p>
                        @endif
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
                Explore other services that complement {{ $serviceTitle }}
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
