<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title', 'My App')</title>
    <link rel=”stylesheet” href=”https://cdn.tailwindcss.com/3.4.1”>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <!-- Menggunakan Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel=”stylesheet” href=”/styles/tailwindcss3.4.1.js”>
    <link rel="stylesheet" href="/styles/style.css">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap');
</style>
<body>
    <header>
        @include('components.header')
    </header>

    <div>
        <main>
            @yield('content')
        </main>
    </div>

    <footer>
        @include('components.footer')
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>
</html>
