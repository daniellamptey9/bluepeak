<?php
/**
 * Laravel Application Entry Point
 * This file redirects all requests to the Laravel public directory
 */

// Redirect to Laravel public directory
header('Location: /public/', true, 301);
exit();
?>
