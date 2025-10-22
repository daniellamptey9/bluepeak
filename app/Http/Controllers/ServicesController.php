<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of all services.
     */
    public function index()
    {
        $services = Service::active()->ordered()->get();
        $featuredServices = Service::active()->featured()->ordered()->take(3)->get();
        
        return view('services.index', compact('services', 'featuredServices'));
    }

    /**
     * Display the specified service.
     */
    public function show(Service $service)
    {
        // Get related services (same category or featured)
        $relatedServices = Service::active()
            ->where('id', '!=', $service->id)
            ->featured()
            ->ordered()
            ->take(3)
            ->get();

        return view('services.show', compact('service', 'relatedServices'));
    }

    /**
     * Display services by category.
     */
    public function category($category)
    {
        $categoryMap = [
            'infrastructure' => 'Infrastructure Management',
            'cloud-security' => 'Cloud & Security',
            'consulting-support' => 'Consulting & Support'
        ];

        $categoryTitle = $categoryMap[$category] ?? 'Services';
        
        // For now, we'll show all services since we don't have category field
        // In a real application, you'd filter by category
        $services = Service::active()->ordered()->get();
        
        return view('services.category', compact('services', 'categoryTitle', 'category'));
    }

    /**
     * Display individual service pages by slug.
     */
    public function service($slug)
    {
        $serviceMap = [
            // IT Services
            'it-support' => 'IT Support',
            'cybersecurity' => 'Cyber Security',
            'cybersecurity-awareness-training' => 'Cyber Security Awareness Training',
            'it-remote-support' => 'IT Remote Support',
            'maintenance-contracts' => 'Maintenance Contracts',
            'small-business-it-support' => 'Small Business IT Support',
            'it-helpdesk' => 'IT Helpdesk',
            'managed-services' => 'Managed IT Services',
            
            // Cloud Services
            'office-365' => 'Office 365',
            'office-365-support' => 'Office 365 Support',
            'office-365-backup' => 'Office 365 Backup',
            'microsoft-teams' => 'Microsoft Teams',
            'microsoft-azure' => 'Microsoft Azure',
            'azure-virtual-machines' => 'Azure Virtual Machines',
            'azure-storage' => 'Azure Storage',
            'azure-backup' => 'Azure Backup',
            'google-workspace' => 'Google Workspace',
            'amazon-web-services' => 'Amazon Web Services',
            'cloud-migration' => 'Cloud Migration',
            
            // Sectors
            'healthcare' => 'Healthcare',
            'law-firms' => 'Law Firms',
            'finance' => 'Finance',
            'manufacturing' => 'Manufacturing',
            'construction' => 'Construction',
            
            // Legacy services
            'infrastructure-management' => 'Infrastructure Management',
            '24-7-support' => '24/7 Support',
            'data-backup-recovery' => 'Data Backup & Recovery',
            'cloud-solutions' => 'Cloud Solutions',
            'network-security' => 'Network Security',
            'it-consulting' => 'IT Consulting',
            'system-monitoring' => 'System Monitoring'
        ];

        $serviceTitle = $serviceMap[$slug] ?? 'Service';
        
        // Get related services
        $relatedServices = Service::active()
            ->featured()
            ->ordered()
            ->take(3)
            ->get();
        
        return view('services.service', compact('serviceTitle', 'relatedServices', 'slug'));
    }

    /**
     * Display the cloud services overview page.
     */
    public function cloudServices()
    {
        $cloudServices = [
            [
                'slug' => 'office-365',
                'title' => 'Office 365',
                'description' => 'Complete Microsoft Office 365 solutions for productivity and collaboration',
                'image' => 'https://images.unsplash.com/photo-1611224923853-80b023f02d71?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'features' => ['Email & Calendar', 'Document Collaboration', 'Cloud Storage', 'Mobile Access']
            ],
            [
                'slug' => 'office-365-support',
                'title' => 'Office 365 Support',
                'description' => 'Dedicated Office 365 support and training for your team',
                'image' => 'https://images.unsplash.com/photo-1611224923853-80b023f02d71?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'features' => ['Setup & Migration', 'User Training', 'Troubleshooting', 'Optimization']
            ],
            [
                'slug' => 'office-365-backup',
                'title' => 'Office 365 Backup',
                'description' => 'Complete Office 365 data backup solutions for business continuity',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'features' => ['Exchange Backup', 'OneDrive Protection', 'SharePoint Backup', 'Fast Recovery']
            ],
            [
                'slug' => 'microsoft-teams',
                'title' => 'Microsoft Teams',
                'description' => 'Collaboration and communication platform for modern teams',
                'image' => 'https://images.unsplash.com/photo-1587560699334-cc4ff634909a?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'features' => ['Video Conferencing', 'File Sharing', 'Team Chat', 'Integration']
            ],
            [
                'slug' => 'microsoft-azure',
                'title' => 'Microsoft Azure',
                'description' => 'Cloud migration and Azure services for scalable infrastructure',
                'image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'features' => ['Cloud Migration', 'Virtual Machines', 'Storage Solutions', 'Security']
            ],
            [
                'slug' => 'azure-virtual-machines',
                'title' => 'Azure Virtual Machines',
                'description' => 'Scalable cloud computing infrastructure for your applications',
                'image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'features' => ['Windows & Linux', 'Auto Scaling', 'High Availability', 'Cost Optimization']
            ],
            [
                'slug' => 'azure-storage',
                'title' => 'Azure Storage',
                'description' => 'Secure cloud storage solutions for your business data',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'features' => ['Blob Storage', 'File Shares', 'Database Storage', 'Backup Solutions']
            ],
            [
                'slug' => 'azure-backup',
                'title' => 'Azure Backup',
                'description' => 'Cloud-based backup and recovery for business continuity',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'features' => ['Automated Backups', 'Cross-Region Replication', 'Fast Recovery', 'Compliance']
            ],
            [
                'slug' => 'google-workspace',
                'title' => 'Google Workspace',
                'description' => 'Google\'s productivity and collaboration suite for businesses',
                'image' => 'https://images.unsplash.com/photo-1611224923853-80b023f02d71?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'features' => ['Gmail Business', 'Google Drive', 'Docs & Sheets', 'Meet & Chat']
            ],
            [
                'slug' => 'amazon-web-services',
                'title' => 'Amazon Web Services',
                'description' => 'AWS cloud computing services for scalable business solutions',
                'image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'features' => ['EC2 Instances', 'S3 Storage', 'RDS Databases', 'Cloud Security']
            ],
            [
                'slug' => 'cloud-migration',
                'title' => 'Cloud Migration',
                'description' => 'Seamless migration to cloud platforms with minimal disruption',
                'image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'features' => ['Assessment & Planning', 'Data Migration', 'Application Migration', 'Training & Support']
            ]
        ];

        return view('services.cloud', compact('cloudServices'));
    }

    /**
     * Display the sectors overview page.
     */
    public function sectors()
    {
        $sectors = [
            [
                'slug' => 'healthcare',
                'title' => 'Healthcare',
                'description' => 'HIPAA-compliant IT solutions for healthcare providers and medical practices',
                'image' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'features' => ['HIPAA Compliance', 'EHR Support', 'Telemedicine', '24/7 Monitoring'],
                'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'
            ],
            [
                'slug' => 'law-firms',
                'title' => 'Law Firms',
                'description' => 'Secure IT solutions for legal practices and law firms',
                'image' => 'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'features' => ['Document Security', 'Case Management', 'Client Confidentiality', 'Compliance'],
                'icon' => 'M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3'
            ],
            [
                'slug' => 'finance',
                'title' => 'Finance',
                'description' => 'IT solutions for financial services and banking institutions',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'features' => ['Data Security', 'Regulatory Compliance', 'Payment Processing', 'Risk Management'],
                'icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
            ],
            [
                'slug' => 'manufacturing',
                'title' => 'Manufacturing',
                'description' => 'IT support for manufacturing businesses and industrial operations',
                'image' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'features' => ['Industrial Networks', 'Production Management', 'IoT Integration', 'Quality Control'],
                'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'
            ],
            [
                'slug' => 'construction',
                'title' => 'Construction',
                'description' => 'IT support for construction companies and building contractors',
                'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                'features' => ['Project Management', 'Mobile Solutions', 'Field Communication', 'Document Management'],
                'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'
            ]
        ];

        return view('services.sectors', compact('sectors'));
    }
}