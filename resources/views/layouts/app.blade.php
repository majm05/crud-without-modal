<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD without Modal </title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .bg-soft-primary {
                background-color: #fff8ef!important;
            }
        </style>

        <livewire:styles />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="antialiased text-base font-normal bg-soft-primary">

        <main class="-mt-2">
            <div class="mx-auto">

                {{ $slot }}

            </div>
        </main>

        <livewire:scripts />
    </body>
</html>
