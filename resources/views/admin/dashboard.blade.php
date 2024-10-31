<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container mx-auto mt-10">
        <h1 class="text-4xl font-bold">Admin Dashboard</h1>
        <div class="mt-5">
            <p>Total Users: {{ $usersCount }}</p>
            <p>Total Chefs: {{ $chefsCount }}</p>
            <p>Total Recipes: {{ $recipesCount }}</p>
        </div>
        <div class="mt-5">
            <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Manage Users</a>
            <a href="{{ route('admin.chefs.index') }}" class="btn btn-primary">Manage Chefs</a>
            <a href="{{ route('admin.recipes.index') }}" class="btn btn-primary">Manage Recipes</a>
            <a href="{{ route('admin.feedback.index') }}" class="btn btn-primary">Manage Feedback</a>
        </div>
    </div>
</body>
</html>
