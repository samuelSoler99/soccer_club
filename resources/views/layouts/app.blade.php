<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Laravel App</title>
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a23e6feb03.js"></script>
    <!-- jQUERY CDN  -->
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100 text-gray-800 ">
<!-- Document body -->
<nav class="flex py-5 bg-indigo-500 text-white  ">
    <div class="w-1/2 px-12 mr-auto">
        <a href="{{redirect()->to('/')}}" class="text-2x1 font-bold"> Dashboard Laravel</a>
        <a href="{{ route('club.index')}}" class=" px-4 py-3 text-white bg-green-500 rounded-md">Clubs</a>
        <a href="" class="  px-4 py-3 text-white bg-green-500 rounded-md">Players</a>
        <a href="" class="  px-4 py-3 text-white bg-green-500 rounded-md">Trainers</a>
    </div>
</nav>
<main class="p-16 flex justify-center">
    @yield('content')
</main>
</body>
</html>
