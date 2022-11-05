<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Result Management System</title>

    @vite('resources/css/app.css')
</head>
<body class="antialiased flex flex-col space-y-4 md:space-y-8">
<header class="bg-blue-500 p-4 text-white flex justify-between">
    <h1 class="text-xl font-bold">Department of Computer Science and Engineering, BSMRSTU</h1>
    <a href="{{route('results.index')}}"
       class="inline-block p-1 border rounded-md border-white hover:bg-white hover:text-blue-500">Home</a>
</header>
<main class="flex flex-col space-y-2 md:space-y-4">
    @yield('content')
</main>
<footer class="text-center mt-4 p-4 bg-gray-200">
    &copy; Dept. of CSE
</footer>
</body>
</html>

