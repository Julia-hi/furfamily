@extends('layouts.furfamily')

<header>
    <x-header />
</header>

@section('content')
<div class="flex-container mt-80">
    <div class="about-section">
        <div class="about-block about1">
            <h2>Добро пожаловать в Furfamily!</h2>
            <p>Furfamily - это котокафе в центре Белграда.
                Здесь очень много самых разных котиков и всегда
                чрезвычайно весело, проходят интересные мастер-классы
                c участием котиков, a ещё это идеальное место чтобы
                творчески поработать за ноутбуком c мурчащим котом на
                коленках.
            </p>
        </div>
        <div class="about-block about2">
            <p>У нас можно выпить кофе в компании
                замечательных котиков, а можно найти себе настоящего хвостатого
                друга и забрать его в семью.</p>
        </div>
        <div class="about-block text-24 about3">
            <p>Ждем вас каждый день с <b>12:00 до 21:00</b></p>
        </div>
    </div>
    <div class="images-section">
        <div class="image-container image1"></div>
        <div class="image-container image2"></div>
        <div class="image-container image3"></div>
    </div>
</div>

<div class="mt-80">
    <h2>KOTINDER</h2></br>
    <div class="flex-container">
        <button> < </button>

                <div class="slider-block">

                    <div></div>

                </div>
                <button> > </button>
    </div>
</div>
<div class="flex-container mt-80">
    <h2>Наши зоны</h2>
    <div class=""></div>
</div>
<div class="flex-container mt-80">
    <h2>Команда</h2>
    <div class=""></div>
</div>
<div class="flex-container mt-80">

    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5660.5600205809715!2d20.471961193084695!3d44.815859886233625!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7abc06cb05b1%3A0x533aa42a98d9ee61!2sCviji%C4%87eva%2040%2C%20Beograd%2011060%2C%20Serbia!5e0!3m2!1ses!2ses!4v1711569316296!5m2!1ses!2ses" style="border:0; width: 90vw; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>

@endsection


