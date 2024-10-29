<!-- resources/views/maintenance.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We'll Be Back Soon</title>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="max-w-lg text-center p-6 bg-white rounded-lg shadow-lg">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="mx-auto mb-4 w-20 h-20">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Coming Soon</h1>
        <p class="text-lg text-gray-600 mb-6">Our website is currently under maintenance. We’ll be back shortly. Thank you for your patience!</p>
        <p class="text-sm text-gray-400">&copy; {{ date('Y') }} Your Company Name</p>
    </div>
</body>
</html>
