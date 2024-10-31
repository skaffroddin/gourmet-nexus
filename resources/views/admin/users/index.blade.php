<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container mx-auto mt-10">
        <h1 class="text-4xl font-bold">Manage Users</h1>
        <table class="min-w-full border-collapse border border-gray-200">
            <thead>
                <tr>
                    <th class="border border-gray-300">Name</th>
                    <th class="border border-gray-300">Email</th>
                    <th class="border border-gray-300">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="border border-gray-300">{{ $user->name }}</td>
                        <td class="border border-gray-300">{{ $user->email }}</td>
                        <td class="border border-gray-300">
                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
