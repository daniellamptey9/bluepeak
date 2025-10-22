<?php
// Test database connection
echo "<h1>Database Connection Test</h1>";

// Load Laravel environment
require_once '../vendor/autoload.php';

try {
    // Try to connect to database
    $host = 'localhost';
    $dbname = 'weareblu_db';
    $username = 'weareblu_weareblu';
    $password = '@Mantse1';
    
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "<p style='color: green;'>✅ Database connection successful!</p>";
    
    // Test if tables exist
    $tables = ['services', 'team_members', 'testimonials', 'contact_messages'];
    
    foreach ($tables as $table) {
        $stmt = $pdo->query("SHOW TABLES LIKE '$table'");
        if ($stmt->rowCount() > 0) {
            echo "<p style='color: green;'>✅ Table '$table' exists</p>";
            
            // Count records
            $count = $pdo->query("SELECT COUNT(*) FROM $table")->fetchColumn();
            echo "<p style='color: blue;'>📊 Table '$table' has $count records</p>";
        } else {
            echo "<p style='color: red;'>❌ Table '$table' does not exist</p>";
        }
    }
    
} catch (PDOException $e) {
    echo "<p style='color: red;'>❌ Database connection failed: " . $e->getMessage() . "</p>";
}

echo "<hr>";
echo "<h2>Environment Check</h2>";

// Check if .env file exists
if (file_exists('../.env')) {
    echo "<p style='color: green;'>✅ .env file exists</p>";
} else {
    echo "<p style='color: red;'>❌ .env file missing</p>";
}

// Check if vendor directory exists
if (file_exists('../vendor')) {
    echo "<p style='color: green;'>✅ vendor directory exists</p>";
} else {
    echo "<p style='color: red;'>❌ vendor directory missing</p>";
}

// Check if bootstrap directory exists
if (file_exists('../bootstrap')) {
    echo "<p style='color: green;'>✅ bootstrap directory exists</p>";
} else {
    echo "<p style='color: red;'>❌ bootstrap directory missing</p>";
}
?>
