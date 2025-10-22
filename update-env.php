<?php
/**
 * Environment Configuration Update Script
 * This script helps update the .env file with correct production settings
 */

echo "<h1>Environment Configuration Update</h1>";
echo "<h2>Current Issues Found:</h2>";
echo "<ul>";
echo "<li>❌ DB_HOST is set to 'http://wearebluebridge.com' (should be 'localhost')</li>";
echo "<li>❌ APP_ENV is set to 'local' (should be 'production')</li>";
echo "<li>❌ APP_DEBUG is set to 'true' (should be 'false')</li>";
echo "<li>❌ APP_URL is set to 'http://localhost' (should be 'https://wearebluebridge.com')</li>";
echo "<li>❌ APP_NAME is set to 'Laravel' (should be 'Bluebridge IT Solutions')</li>";
echo "</ul>";

echo "<h2>Required .env Configuration:</h2>";
echo "<pre>";
echo "APP_NAME=\"Bluebridge IT Solutions\"\n";
echo "APP_ENV=production\n";
echo "APP_KEY=base64:Vw+VnoCMGzeSrpGP6TMa3znIYh9ASYcIDzxd91EeRak=\n";
echo "APP_DEBUG=false\n";
echo "APP_URL=https://wearebluebridge.com\n";
echo "\n";
echo "DB_CONNECTION=mysql\n";
echo "DB_HOST=localhost\n";
echo "DB_PORT=3306\n";
echo "DB_DATABASE=weareblu_db\n";
echo "DB_USERNAME=weareblu_weareblu\n";
echo "DB_PASSWORD=@Mantse1\n";
echo "</pre>";

echo "<h2>Steps to Fix:</h2>";
echo "<ol>";
echo "<li>Log into your cPanel File Manager</li>";
echo "<li>Navigate to your website's root directory</li>";
echo "<li>Edit the .env file</li>";
echo "<li>Update the values as shown above</li>";
echo "<li>Save the file</li>";
echo "<li>Test your website</li>";
echo "</ol>";

echo "<h2>Alternative: Use cPanel Terminal</h2>";
echo "<p>If you have access to cPanel Terminal, you can run:</p>";
echo "<pre>";
echo "cd /home/yourcpaneluser/public_html\n";
echo "cp .env .env.backup\n";
echo "sed -i 's/APP_ENV=local/APP_ENV=production/' .env\n";
echo "sed -i 's/APP_DEBUG=true/APP_DEBUG=false/' .env\n";
echo "sed -i 's|APP_URL=http://localhost|APP_URL=https://wearebluebridge.com|' .env\n";
echo "sed -i 's/APP_NAME=Laravel/APP_NAME=\"Bluebridge IT Solutions\"/' .env\n";
echo "sed -i 's|DB_HOST=http://wearebluebridge.com|DB_HOST=localhost|' .env\n";
echo "</pre>";

echo "<p><strong>After updating the .env file, your website should work correctly!</strong></p>";
?>
