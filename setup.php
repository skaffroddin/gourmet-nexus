<?php

// Validate the token
if (!isset($_GET['token']) || $_GET['token'] !== getenv('SETUP_TOKEN')) {
    http_response_code(403);
    die('Unauthorized access');
}

// Define your project directory
$projectDir = __DIR__; // Adjust if needed

// Change to the project directory
chdir($projectDir);

// Run Composer install to install PHP dependencies
exec('composer install --no-dev --prefer-dist --optimize-autoloader', $output, $returnVar);
if ($returnVar !== 0) {
    echo "Failed to install PHP dependencies:\n";
    echo implode("\n", $output);
    exit(1);
}

// Run NPM install to install Node.js dependencies
exec('npm install', $output, $returnVar);
if ($returnVar !== 0) {
    echo "Failed to install Node.js dependencies:\n";
    echo implode("\n", $output);
    exit(1);
}

// Run the build command for Tailwind CSS (or other build commands)
exec('npm run build', $output, $returnVar);
if ($returnVar !== 0) {
    echo "Failed to build assets:\n";
    echo implode("\n", $output);
    exit(1);
}

// Generate the application key if needed
exec('php artisan key:generate', $output, $returnVar);
if ($returnVar !== 0) {
    echo "Failed to generate application key:\n";
    echo implode("\n", $output);
    exit(1);
}

// Final success message
echo "Setup completed successfully!";
