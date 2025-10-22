<?php
/**
 * Image Download Script for Bluebridge IT Solutions
 * Downloads all external images and saves them locally
 */

// Create directories if they don't exist
$directories = [
    'public/images/hero',
    'public/images/services', 
    'public/images/team',
    'public/images/logos',
    'public/images/unsplash'
];

foreach ($directories as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
        echo "Created directory: $dir\n";
    }
}

// Function to download image
function downloadImage($url, $localPath) {
    if (file_exists($localPath)) {
        echo "Already exists: $localPath\n";
        return true;
    }
    
    $imageData = @file_get_contents($url);
    if ($imageData === false) {
        echo "Failed to download: $url\n";
        return false;
    }
    
    if (file_put_contents($localPath, $imageData)) {
        echo "Downloaded: $url -> $localPath\n";
        return true;
    } else {
        echo "Failed to save: $localPath\n";
        return false;
    }
}

// Hero images from home.blade.php
$heroImages = [
    'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80' => 'public/images/hero/it-infrastructure.jpg',
    'https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80' => 'public/images/hero/cloud-computing.jpg',
    'https://images.unsplash.com/photo-1563206767-5b18f218e8de?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80' => 'public/images/hero/cybersecurity.jpg',
    'https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80' => 'public/images/hero/customer-support.jpg',
];

// Service images
$serviceImages = [
    'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80' => 'public/images/services/it-infrastructure.jpg',
    'https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80' => 'public/images/services/cloud-services.jpg',
    'https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80' => 'public/images/services/cybersecurity.jpg',
    'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80' => 'public/images/services/it-support.jpg',
];

// Team images
$teamImages = [
    'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80' => 'public/images/team/support-team.jpg',
    'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80' => 'public/images/team/ceo.jpg',
    'https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80' => 'public/images/team/cto.jpg',
    'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80' => 'public/images/team/coo.jpg',
];

// Company logos
$logoImages = [
    'https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg' => 'public/images/logos/microsoft.svg',
    'https://upload.wikimedia.org/wikipedia/commons/9/93/Amazon_Web_Services_Logo.svg' => 'public/images/logos/aws.svg',
    'https://upload.wikimedia.org/wikipedia/commons/0/08/Cisco_logo_blue_2016.svg' => 'public/images/logos/cisco.svg',
    'https://upload.wikimedia.org/wikipedia/commons/9/9a/Vmware_logo_gry_RGB_300dpi.jpg' => 'public/images/logos/vmware.jpg',
    'https://upload.wikimedia.org/wikipedia/commons/5/51/Google_Cloud_logo.svg' => 'public/images/logos/google-cloud.svg',
    'https://upload.wikimedia.org/wikipedia/commons/1/17/Dell_logo_2016.svg' => 'public/images/logos/dell.svg',
    'https://upload.wikimedia.org/wikipedia/commons/a/ad/HP_logo_2012.svg' => 'public/images/logos/hp.svg',
];

// Industry images
$industryImages = [
    'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80' => 'public/images/unsplash/law-firms.jpg',
    'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80' => 'public/images/unsplash/banking-finance.jpg',
    'https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80' => 'public/images/unsplash/healthcare.jpg',
    'https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80' => 'public/images/unsplash/construction.jpg',
];

// Case study images
$caseStudyImages = [
    'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80' => 'public/images/unsplash/cloud-migration.jpg',
    'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80' => 'public/images/unsplash/healthcare-it.jpg',
    'https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80' => 'public/images/unsplash/cybersecurity-protection.jpg',
];

// Download all images
echo "Starting image download...\n\n";

$allImages = array_merge($heroImages, $serviceImages, $teamImages, $logoImages, $industryImages, $caseStudyImages);

$successCount = 0;
$totalCount = count($allImages);

foreach ($allImages as $url => $localPath) {
    if (downloadImage($url, $localPath)) {
        $successCount++;
    }
    sleep(1); // Be nice to the servers
}

echo "\nDownload complete!\n";
echo "Successfully downloaded: $successCount/$totalCount images\n";
echo "Images saved to public/images/ directory\n";
?>
