<?php
/**
 * Create placeholder SVG logos for missing company logos
 */

// Microsoft logo
$microsoftLogo = '<?xml version="1.0" encoding="UTF-8"?>
<svg width="120" height="40" viewBox="0 0 120 40" xmlns="http://www.w3.org/2000/svg">
  <rect width="40" height="40" fill="#F25022"/>
  <rect x="40" width="40" height="40" fill="#7FBA00"/>
  <rect y="40" width="40" height="40" fill="#00A4EF"/>
  <rect x="40" y="40" width="40" height="40" fill="#FFB900"/>
</svg>';

// AWS logo
$awsLogo = '<?xml version="1.0" encoding="UTF-8"?>
<svg width="120" height="40" viewBox="0 0 120 40" xmlns="http://www.w3.org/2000/svg">
  <rect width="120" height="40" fill="#FF9900"/>
  <text x="60" y="25" text-anchor="middle" fill="white" font-family="Arial, sans-serif" font-size="14" font-weight="bold">AWS</text>
</svg>';

// Cisco logo
$ciscoLogo = '<?xml version="1.0" encoding="UTF-8"?>
<svg width="120" height="40" viewBox="0 0 120 40" xmlns="http://www.w3.org/2000/svg">
  <rect width="120" height="40" fill="#1BA0D7"/>
  <text x="60" y="25" text-anchor="middle" fill="white" font-family="Arial, sans-serif" font-size="14" font-weight="bold">Cisco</text>
</svg>';

// VMware logo
$vmwareLogo = '<?xml version="1.0" encoding="UTF-8"?>
<svg width="120" height="40" viewBox="0 0 120 40" xmlns="http://www.w3.org/2000/svg">
  <rect width="120" height="40" fill="#607078"/>
  <text x="60" y="25" text-anchor="middle" fill="white" font-family="Arial, sans-serif" font-size="12" font-weight="bold">VMware</text>
</svg>';

// Google Cloud logo
$googleCloudLogo = '<?xml version="1.0" encoding="UTF-8"?>
<svg width="120" height="40" viewBox="0 0 120 40" xmlns="http://www.w3.org/2000/svg">
  <rect width="120" height="40" fill="#4285F4"/>
  <text x="60" y="15" text-anchor="middle" fill="white" font-family="Arial, sans-serif" font-size="10" font-weight="bold">Google Cloud</text>
</svg>';

// Dell logo
$dellLogo = '<?xml version="1.0" encoding="UTF-8"?>
<svg width="120" height="40" viewBox="0 0 120 40" xmlns="http://www.w3.org/2000/svg">
  <rect width="120" height="40" fill="#007DB8"/>
  <text x="60" y="25" text-anchor="middle" fill="white" font-family="Arial, sans-serif" font-size="16" font-weight="bold">Dell</text>
</svg>';

// HP logo
$hpLogo = '<?xml version="1.0" encoding="UTF-8"?>
<svg width="120" height="40" viewBox="0 0 120 40" xmlns="http://www.w3.org/2000/svg">
  <rect width="120" height="40" fill="#0096D6"/>
  <text x="60" y="25" text-anchor="middle" fill="white" font-family="Arial, sans-serif" font-size="16" font-weight="bold">HP</text>
</svg>';

// Create placeholder images
file_put_contents('public/images/logos/microsoft.svg', $microsoftLogo);
file_put_contents('public/images/logos/aws.svg', $awsLogo);
file_put_contents('public/images/logos/cisco.svg', $ciscoLogo);
file_put_contents('public/images/logos/vmware.svg', $vmwareLogo);
file_put_contents('public/images/logos/google-cloud.svg', $googleCloudLogo);
file_put_contents('public/images/logos/dell.svg', $dellLogo);
file_put_contents('public/images/logos/hp.svg', $hpLogo);

// Create missing team image placeholder
$teamPlaceholder = '<?xml version="1.0" encoding="UTF-8"?>
<svg width="400" height="400" viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg">
  <rect width="400" height="400" fill="#E5E7EB"/>
  <circle cx="200" cy="150" r="60" fill="#9CA3AF"/>
  <rect x="120" y="230" width="160" height="120" rx="10" fill="#9CA3AF"/>
  <text x="200" y="380" text-anchor="middle" fill="#6B7280" font-family="Arial, sans-serif" font-size="16">Team Member</text>
</svg>';

file_put_contents('public/images/team/cto.jpg', $teamPlaceholder);

// Create missing healthcare image placeholder
$healthcarePlaceholder = '<?xml version="1.0" encoding="UTF-8"?>
<svg width="600" height="400" viewBox="0 0 600 400" xmlns="http://www.w3.org/2000/svg">
  <rect width="600" height="400" fill="#E5F3FF"/>
  <rect x="50" y="50" width="500" height="300" rx="10" fill="#B3D9FF"/>
  <circle cx="300" cy="200" r="40" fill="#4A90E2"/>
  <text x="300" y="350" text-anchor="middle" fill="#2C5282" font-family="Arial, sans-serif" font-size="18" font-weight="bold">Healthcare IT</text>
</svg>';

file_put_contents('public/images/unsplash/healthcare.jpg', $healthcarePlaceholder);

echo "Created placeholder logos and images successfully!\n";
?>
