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
        <div class="relative min-h-screen flex flex-col items-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <main class="mt-6">
                    <h1 class="text-center">Зона администратора</h1>
                    <h2>KOTINDER</h2>
                    <!-- Button trigger modal -->
                    <x-primary-button id="createBtn" class="ms-3 my-3" data-toggle="modal" data-target="#exampleModalCenter">
                        {{ __('Добавить котика') }}
                    </x-primary-button><br>

                    <!-- Modal -->
                    <div class="modal fade opacity-100 bg-modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title py-0" id="exampleModalCenterTitle">Новый котик:</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" class="fs-2">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="#">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Кличка" class="form-control rounded">
                                        </div>
                                        <div class="mt-3">
                                            <div class="form-group">
                                                <span>Дата рождения (чтобы показывать возраст)</span><br>
                                                <input type="date" name="birthday" class="rounded"><br>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="form-group form-check-inline">
                                                <input type="radio" id="male" name="gender" value="m" class="form-check-input" selected>
                                                <label for="male" class="form-check-label">Самец</label>
                                            </div>
                                            <div class="form-group form-check-inline">
                                                <input type="radio" id="female" name="gender" value="f" class="form-check-input">
                                                <label for="female" class="form-check-label">Самочка</label>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <span>Характер:</span><br>
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" name="ch1" id="ch1" class="form-check-input" value="gamer">
                                                <label class="form-check-label" for="ch4">Игривый</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" name="ch2" id="ch2" class="form-check-input" value="calm">
                                                <label class="form-check-label" for="ch4">Спокойный</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" name="ch3" id="ch3" class="form-check-input" value="lovely">
                                                <label class="form-check-label" for="ch4">Ласковый</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" name="ch4" id="ch4" class="form-check-input" value="lazy">
                                                <label class="form-check-label" for="ch4">Ленивый</label><br>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <span>Показывать в котиндер?</span>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="yes" name="is_active" selected>
                                                <label for="yes" class="form-check-label">Да</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" id="no" name="is_active">
                                                <label for="is_active" class="form-check-label">Нет</label>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <div class="custom-file">
                                                <label class="custom-file-label" for="photo">Фоточка</label><br>
                                                <input type="file" class="custom-file-input" id="photo" name="photo">
                                                <div class="invalid-feedback">Неверный формат файла</div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="mt-3">
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
                                        <button type="button" class="btn btn-success">Сохранить</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="my-3">
                        @if($cats->count()>0)
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
                        @else
                        <div>В базе данных котиков не обнаружено</div>

                        @endif
                    </div>
                </main>


            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery-3.7.1.js') }}"></script>
    <script>
$("#photo").fileinput({
    language: "ru",
    uploadUrl: "/file-upload-batch/2",
    allowedFileExtensions: ["jpg", "png", "gif"]
});
</script>
    <script src="{{ asset('js/bootstrap/bootstrap.js') }}"></script>
    <!-- <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/npm.js') }}"></script> -->
    <script src="{{ asset('js/admin-page.js') }}"></script>
</body>

</html>
