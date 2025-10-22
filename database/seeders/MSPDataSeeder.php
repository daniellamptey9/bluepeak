<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MSPDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Services
        Service::create([
            'title' => 'Cloud Solutions',
            'description' => 'Scalable cloud infrastructure and migration services to modernize your business operations.',
            'long_description' => 'Our cloud solutions help businesses transition to the cloud seamlessly. We provide AWS, Azure, and Google Cloud services including migration, optimization, and ongoing management.',
            'is_featured' => true,
            'sort_order' => 1,
            'is_active' => true,
        ]);

        Service::create([
            'title' => 'Cybersecurity',
            'description' => 'Advanced security solutions to protect your business from evolving cyber threats.',
            'long_description' => 'Comprehensive cybersecurity services including threat detection, incident response, security audits, and employee training to keep your business secure.',
            'is_featured' => true,
            'sort_order' => 2,
            'is_active' => true,
        ]);

        Service::create([
            'title' => '24/7 Support',
            'description' => 'Round-the-clock technical support to ensure your systems are always running optimally.',
            'long_description' => 'Our dedicated support team provides 24/7 monitoring, maintenance, and technical assistance to minimize downtime and maximize productivity.',
            'is_featured' => true,
            'sort_order' => 3,
            'is_active' => true,
        ]);

        Service::create([
            'title' => 'Network Management',
            'description' => 'Complete network infrastructure design, implementation, and ongoing management.',
            'long_description' => 'From network design to implementation and maintenance, we ensure your network infrastructure is robust, secure, and optimized for performance.',
            'is_featured' => false,
            'sort_order' => 4,
            'is_active' => true,
        ]);

        Service::create([
            'title' => 'Data Backup & Recovery',
            'description' => 'Reliable backup solutions and disaster recovery planning to protect your critical data.',
            'long_description' => 'Comprehensive backup strategies and disaster recovery plans to ensure business continuity and data protection in any scenario.',
            'is_featured' => false,
            'sort_order' => 5,
            'is_active' => true,
        ]);

        Service::create([
            'title' => 'IT Consulting',
            'description' => 'Strategic IT consulting to align technology with your business goals.',
            'long_description' => 'Expert IT consulting services to help you make informed technology decisions and develop strategies that drive business growth.',
            'is_featured' => false,
            'sort_order' => 6,
            'is_active' => true,
        ]);

        // Team Members
        TeamMember::create([
            'name' => 'John Smith',
            'position' => 'CEO & Founder',
            'bio' => '15+ years of experience in IT leadership and strategic planning. John founded BluePeak MSP with a vision to provide exceptional IT services.',
            'email' => 'john@bluepeakmsp.com',
            'phone' => '(555) 123-4567',
            'linkedin' => 'https://linkedin.com/in/johnsmith',
            'sort_order' => 1,
            'is_active' => true,
        ]);

        TeamMember::create([
            'name' => 'Maria Johnson',
            'position' => 'CTO',
            'bio' => 'Expert in cloud architecture and cybersecurity solutions. Maria leads our technical team with over 12 years of experience.',
            'email' => 'maria@bluepeakmsp.com',
            'phone' => '(555) 123-4568',
            'linkedin' => 'https://linkedin.com/in/mariajohnson',
            'sort_order' => 2,
            'is_active' => true,
        ]);

        TeamMember::create([
            'name' => 'David Wilson',
            'position' => 'Lead Engineer',
            'bio' => 'Specializes in network infrastructure and system optimization. David ensures our clients\' systems run at peak performance.',
            'email' => 'david@bluepeakmsp.com',
            'phone' => '(555) 123-4569',
            'linkedin' => 'https://linkedin.com/in/davidwilson',
            'sort_order' => 3,
            'is_active' => true,
        ]);

        TeamMember::create([
            'name' => 'Sarah Chen',
            'position' => 'Security Specialist',
            'bio' => 'Cybersecurity expert with certifications in ethical hacking and security analysis. Sarah keeps our clients protected from threats.',
            'email' => 'sarah@bluepeakmsp.com',
            'phone' => '(555) 123-4570',
            'linkedin' => 'https://linkedin.com/in/sarahchen',
            'sort_order' => 4,
            'is_active' => true,
        ]);

        // Testimonials
        Testimonial::create([
            'client_name' => 'Sarah Chen',
            'client_company' => 'TechStart Inc.',
            'client_position' => 'CEO',
            'testimonial' => 'BluePeak MSP transformed our IT infrastructure completely. Their 24/7 support and proactive monitoring have been game-changers for our business.',
            'rating' => 5,
            'sort_order' => 1,
            'is_active' => true,
        ]);

        Testimonial::create([
            'client_name' => 'Michael Rodriguez',
            'client_company' => 'Global Solutions Ltd.',
            'client_position' => 'IT Director',
            'testimonial' => 'The team\'s expertise in cloud migration saved us months of work. Our systems are now more secure and efficient than ever.',
            'rating' => 5,
            'sort_order' => 2,
            'is_active' => true,
        ]);

        Testimonial::create([
            'client_name' => 'Emily Thompson',
            'client_company' => 'Innovation Corp.',
            'client_position' => 'Operations Manager',
            'testimonial' => 'Outstanding service and support. BluePeak MSP has become an integral part of our business operations.',
            'rating' => 5,
            'sort_order' => 3,
            'is_active' => true,
        ]);

        Testimonial::create([
            'client_name' => 'Robert Kim',
            'client_company' => 'Digital Dynamics',
            'client_position' => 'Founder',
            'testimonial' => 'Their cybersecurity services gave us peace of mind. We know our data is protected with BluePeak MSP.',
            'rating' => 5,
            'sort_order' => 4,
            'is_active' => true,
        ]);

        Testimonial::create([
            'client_name' => 'Lisa Anderson',
            'client_company' => 'Future Forward',
            'client_position' => 'CTO',
            'testimonial' => 'Professional, reliable, and always available when we need them. BluePeak MSP is our trusted technology partner.',
            'rating' => 5,
            'sort_order' => 5,
            'is_active' => true,
        ]);

        Testimonial::create([
            'client_name' => 'James Wilson',
            'client_company' => 'NextGen Enterprises',
            'client_position' => 'CEO',
            'testimonial' => 'The best IT decision we ever made. BluePeak MSP has helped us scale our technology infrastructure seamlessly.',
            'rating' => 5,
            'sort_order' => 6,
            'is_active' => true,
        ]);
    }
}
