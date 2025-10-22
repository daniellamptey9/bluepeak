<?php
/**
 * Update service images array to use local images
 */

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
    
    // Sectors
    'healthcare' => '/images/unsplash/healthcare.jpg',
    'law-firms' => '/images/unsplash/law-firms.jpg',
    'finance' => '/images/unsplash/banking-finance.jpg',
    'manufacturing' => '/images/services/it-infrastructure.jpg',
    'construction' => '/images/unsplash/construction.jpg',
];

// Update the service.blade.php file
$file = 'resources/views/services/service.blade.php';
$content = file_get_contents($file);

// Create the new service images array
$newArray = "                    \$serviceImages = [\n";
foreach ($serviceImages as $key => $value) {
    $newArray .= "                        '$key' => '$value',\n";
}
$newArray .= "                    ];";

// Replace the old array with the new one
$pattern = '/\$serviceImages = \[.*?\];/s';
$content = preg_replace($pattern, $newArray, $content);

file_put_contents($file, $content);

echo "Updated service images array in service.blade.php\n";

// Also update the services/index.blade.php fallback images
$servicesFile = 'resources/views/services/index.blade.php';
$servicesContent = file_get_contents($servicesFile);

// Replace the fallback image URL
$servicesContent = str_replace(
    'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
    '/images/services/it-infrastructure.jpg',
    $servicesContent
);

file_put_contents($servicesFile, $servicesContent);

echo "Updated services index fallback images\n";
echo "Service images update complete!\n";
?>
