<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Furfamily</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/custom-style.css')}}">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    @include('layouts.admin-navigation')
    <div class="bg-gray-50 text-black/50">
        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <main class="mt-6">
                    <h2>KOTINDER</h2>
                    <table>
                        <thead>
                            <tr>
                                <td>Фото</td>
                                <td>Кличка</td>
                                <td>Возраст</td>
                                <td>Показывать</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cats as $cat)
                            <tr>
                                <td><img src="" alt=""></td>
                                <td>{{ $cat->name }}</td>
                                <td>{{ $cat->birthday }}</td>
                                <td>{{ $cat->isActive }}</td>
                                <td><button>Редактировать</button></td>
                                <td><button>Удалить</button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </main>


            </div>
        </div>
    </div>
</body>

</html>
