<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container mx-auto">


        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Age
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Phone no
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            
                        </th>
                        <td class="px-6 py-4">
                           
                        </td>
                        <td class="px-6 py-4">
                           
                        </td>
                        <td class="px-6 py-4">
                           <a href="#">Block</a> | <a href="#">Unblock</a> | <a href="#">Delete</a>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                           
                        </th>
                        <td class="px-6 py-4">
                         
                        </td>
                        <td class="px-6 py-4">
                           
                        </td>
                        <td class="px-6 py-4">
                            <a href="#">Block</a> | <a href="#">Unblock</a> | <a href="#">Delete</a>
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            
                        </th>
                        <td class="px-6 py-4">
                           
                        </td>
                        <td class="px-6 py-4">
                            
                        </td>
                        <td class="px-6 py-4">
                            <a href="#">Block</a> | <a href="#">Unblock</a> | <a href="#">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>