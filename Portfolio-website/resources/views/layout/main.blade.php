<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Portfolio | {{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script>
        tailwind.config = {
            theme: {
                container: {
                    center: true,
                    padding: "16px"
                },
                extend: {
                    colors: {
                        clifford: '#da373d',
                    },
                    screens: {
                        "2xl": "1280px"
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-white text-black dark:text-white dark:bg-gray-800">
    @include('layout.Navbar')
    <main class="container min-h-screen py-10">
        @yield('content')
    </main>
    @include('layout.Footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>
