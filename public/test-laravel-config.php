<?php
// Test Laravel configuration
echo "<h1>Laravel Configuration Test</h1>";

// Check if we can load Laravel
try {
    require_once '../vendor/autoload.php';
    $app = require_once '../bootstrap/app.php';
    
    echo "<p style='color: green;'>✅ Laravel bootstrap successful</p>";
    
    // Check environment
    echo "<p>Environment: " . $app->environment() . "</p>";
    echo "<p>Debug mode: " . ($app->hasDebugModeEnabled() ? 'ON' : 'OFF') . "</p>";
    
    // Check database configuration
    $config = $app['config'];
    echo "<p>Database connection: " . $config->get('database.default') . "</p>";
    echo "<p>Database host: " . $config->get('database.connections.mysql.host') . "</p>";
    echo "<p>Database name: " . $config->get('database.connections.mysql.database') . "</p>";
    
} catch (Exception $e) {
    echo "<p style='color: red;'>❌ Laravel bootstrap failed: " . $e->getMessage() . "</p>";
}

echo "<hr>";
echo "<h2>File Structure Check</h2>";

$files = [
    '../.env' => '.env file',
    '../vendor/autoload.php' => 'Composer autoload',
    '../bootstrap/app.php' => 'Laravel bootstrap',
    '../app/Http/Controllers/HomeController.php' => 'HomeController',
    '../resources/views/home.blade.php' => 'Home view',
    '../routes/web.php' => 'Web routes'
];

foreach ($files as $file => $description) {
    if (file_exists($file)) {
        echo "<p style='color: green;'>✅ $description exists</p>";
    } else {
        echo "<p style='color: red;'>❌ $description missing</p>";
    }
}
?>
