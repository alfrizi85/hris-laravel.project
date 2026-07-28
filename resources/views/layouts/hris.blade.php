<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NovaCore Technologies</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<div class="flex min-h-screen">
    @include('partials.sidebar')

    {{-- Content --}}
    <main class="flex-1">
       
        @include('partials.navbar')

        <section class="p-8">

            @yield('content')

        </section>

        @include('partials.footer')
        
    </main>

</div>

</body>
</html>