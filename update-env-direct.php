<?php
/**
 * Direct .env Update Script
 * This script will update your .env file with correct production settings
 */

$envFile = '.env';
$backupFile = '.env.backup';

// Read current .env file
if (!file_exists($envFile)) {
    die("Error: .env file not found!\n");
}

$envContent = file_get_contents($envFile);

// Create backup
file_put_contents($backupFile, $envContent);
echo "✅ Backup created: $backupFile\n";

// Update the .env content
$updates = [
    'APP_NAME=Laravel' => 'APP_NAME="Bluebridge IT Solutions"',
    'APP_ENV=local' => 'APP_ENV=production',
    'APP_DEBUG=true' => 'APP_DEBUG=false',
    'APP_URL=http://localhost' => 'APP_URL=https://wearebluebridge.com',
    'DB_HOST=http://wearebluebridge.com' => 'DB_HOST=localhost',
    'LOG_LEVEL=debug' => 'LOG_LEVEL=error',
    'MAIL_FROM_ADDRESS="hello@example.com"' => 'MAIL_FROM_ADDRESS="hello@wearebluebridge.com"'
];

foreach ($updates as $search => $replace) {
    $envContent = str_replace($search, $replace, $envContent);
    echo "✅ Updated: $search -> $replace\n";
}

// Write updated content back to .env
if (file_put_contents($envFile, $envContent)) {
    echo "\n🎉 .env file updated successfully!\n";
    echo "📝 Changes made:\n";
    echo "- APP_NAME: Laravel -> Bluebridge IT Solutions\n";
    echo "- APP_ENV: local -> production\n";
    echo "- APP_DEBUG: true -> false\n";
    echo "- APP_URL: http://localhost -> https://wearebluebridge.com\n";
    echo "- DB_HOST: http://wearebluebridge.com -> localhost\n";
    echo "- LOG_LEVEL: debug -> error\n";
    echo "- MAIL_FROM_ADDRESS: hello@example.com -> hello@wearebluebridge.com\n";
    echo "\n🚀 Your website should now work correctly!\n";
} else {
    echo "❌ Error: Could not write to .env file\n";
}
?>
