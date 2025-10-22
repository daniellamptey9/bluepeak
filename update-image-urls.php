<?php
/**
 * Update all external image URLs to use local images
 */

$replacements = [
    // Hero images
    'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80' => '/images/hero/it-infrastructure.jpg',
    'https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80' => '/images/hero/cloud-computing.jpg',
    'https://images.unsplash.com/photo-1563206767-5b18f218e8de?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80' => '/images/hero/cybersecurity.jpg',
    'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80' => '/images/hero/customer-support.jpg',
    
    // Service images (smaller versions)
    'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80' => '/images/services/it-infrastructure.jpg',
    'https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80' => '/images/services/cloud-services.jpg',
    'https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80' => '/images/services/cybersecurity.jpg',
    'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80' => '/images/services/it-support.jpg',
    
    // Team images
    'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80' => '/images/team/support-team.jpg',
    'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80' => '/images/team/ceo.jpg',
    'https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80' => '/images/team/cto.jpg',
    'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80' => '/images/team/coo.jpg',
    
    // Company logos
    'https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg' => '/images/logos/microsoft.svg',
    'https://upload.wikimedia.org/wikipedia/commons/9/93/Amazon_Web_Services_Logo.svg' => '/images/logos/aws.svg',
    'https://upload.wikimedia.org/wikipedia/commons/0/08/Cisco_logo_blue_2016.svg' => '/images/logos/cisco.svg',
    'https://upload.wikimedia.org/wikipedia/commons/9/9a/Vmware_logo_gry_RGB_300dpi.jpg' => '/images/logos/vmware.svg',
    'https://upload.wikimedia.org/wikipedia/commons/5/51/Google_Cloud_logo.svg' => '/images/logos/google-cloud.svg',
    'https://upload.wikimedia.org/wikipedia/commons/1/17/Dell_logo_2016.svg' => '/images/logos/dell.svg',
    'https://upload.wikimedia.org/wikipedia/commons/a/ad/HP_logo_2012.svg' => '/images/logos/hp.svg',
    
    // Industry images
    'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80' => '/images/unsplash/law-firms.jpg',
    'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80' => '/images/unsplash/banking-finance.jpg',
    'https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80' => '/images/unsplash/healthcare.jpg',
    'https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80' => '/images/unsplash/construction.jpg',
    
    // Case study images
    'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80' => '/images/unsplash/cloud-migration.jpg',
    'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80' => '/images/unsplash/healthcare-it.jpg',
    'https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80' => '/images/unsplash/cybersecurity-protection.jpg',
];

// Get all view files
$viewFiles = glob('resources/views/**/*.blade.php');

foreach ($viewFiles as $file) {
    $content = file_get_contents($file);
    $originalContent = $content;
    
    foreach ($replacements as $oldUrl => $newUrl) {
        $content = str_replace($oldUrl, $newUrl, $content);
    }
    
    if ($content !== $originalContent) {
        file_put_contents($file, $content);
        echo "Updated: $file\n";
    }
}

echo "Image URL replacement complete!\n";
?>
