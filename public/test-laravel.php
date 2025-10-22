<?php
/**
 * Laravel Application Test
 * This file tests if Laravel is working properly
 */

echo "<h1>Laravel Application Test</h1>";
echo "<p>Testing Laravel configuration...</p>";

// Test 1: Check if autoloader exists
if (file_exists(__DIR__.'/../vendor/autoload.php')) {
    echo "<p>✅ Autoloader found</p>";
} else {
    echo "<p>❌ Autoloader NOT found</p>";
}

// Test 2: Check if bootstrap exists
if (file_exists(__DIR__.'/../bootstrap/app.php')) {
    echo "<p>✅ Bootstrap found</p>";
} else {
    echo "<p>❌ Bootstrap NOT found</p>";
}

// Test 3: Check if .env exists
if (file_exists(__DIR__.'/../.env')) {
    echo "<p>✅ Environment file found</p>";
} else {
    echo "<p>❌ Environment file NOT found - This is the problem!</p>";
}

// Test 4: Try to load Laravel
try {
    require __DIR__.'/../vendor/autoload.php';
    $app = require_once __DIR__.'/../bootstrap/app.php';
    echo "<p>✅ Laravel loaded successfully</p>";
    
    // Test routes
    $router = $app->make('router');
    $routes = $router->getRoutes();
    echo "<p>✅ Routes loaded: " . count($routes) . " routes found</p>";
    
} catch (Exception $e) {
    echo "<p>❌ Laravel failed to load: " . $e->getMessage() . "</p>";
}

echo "<hr>";
echo "<p><strong>Next Steps:</strong></p>";
echo "<ol>";
echo "<li>If environment file is missing, create .env file on server</li>";
echo "<li>If Laravel fails to load, check file permissions</li>";
echo "<li>Run: php artisan key:generate</li>";
echo "<li>Run: php artisan config:cache</li>";
echo "</ol>";
?>
