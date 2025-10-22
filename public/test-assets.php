<?php
// Simple test to see what asset() helper generates
echo "<h1>Asset Helper Test</h1>";
echo "<p>Testing what URLs Laravel asset() helper generates:</p>";

// Test different asset paths
$assets = [
    'app.css',
    'app.js', 
    'bluebridge.png',
    'it-infrastructure.jpg',
    'css/app-additional.css'
];

echo "<ul>";
foreach ($assets as $asset) {
    $url = '/public/' . $asset; // Simulate what asset() might generate
    echo "<li><a href='$url' target='_blank'>$asset -> $url</a></li>";
}
echo "</ul>";

echo "<h2>Direct Links:</h2>";
echo "<ul>";
foreach ($assets as $asset) {
    echo "<li><a href='/$asset' target='_blank'>$asset -> /$asset</a></li>";
}
echo "</ul>";
?>
