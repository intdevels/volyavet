@extends('layout.app')

@section('content')
    <div class="wrapper">
        <nav class="page-navigation">
            <ul class="page-navigation-list">
                <li class="page-navigation-item">
                    <a href="#">Главная</a>
                </li>
                <li class="page-navigation-item">
                    <span>О нас</span>
                </li>
            </ul>
        </nav>
        <section class="about-page">

        </section>

    </div>
    <div class="about-page__posts">
        <div class="wrapper">
            <div class="page-title">
                <h2>Каким животным мы помогаем</h2>
            </div>
            <p class="about-page-title__desc">
                Наша ветеринарная клиника многопрофильная, поэтому для любого вашего питомца мы подберём того врача, который знает, как найти к нему подход и сможет назначить подходящее лечение
            </p>
            <div class="about-page__list">
                <div class="about-page__item">
                    <div class="about-page__img">
                        <img src="{{ asset('assets/img/about-post-1.jpg') }}" alt="about-post">
                    </div>
                    <div class="about-page__title">кошки</div>
                </div>
                <div class="about-page__item">
                    <div class="about-page__img">
                        <img src="{{ asset('assets/img/about-post-2.jpg') }}" alt="about-post">
                    </div>
                    <div class="about-page__title">собаки</div>
                </div>
                <div class="about-page__item">
                    <div class="about-page__img">
                        <img src="{{ asset('assets/img/about-post-6.jpg') }}" alt="about-post">
                    </div>
                    <div class="about-page__title">кролики</div>
                </div>
                <div class="about-page__item">
                    <div class="about-page__img">
                        <img src="{{ asset('assets/img/about-post-3.jpg') }}" alt="about-post">
                    </div>
                    <div class="about-page__title">хомяки</div>
                </div>
                <div class="about-page__item">
                    <div class="about-page__img">
                        <img src="{{ asset('assets/img/about-post-4.jpg') }}" alt="about-post">
                    </div>
                    <div class="about-page__title">мыши</div>
                </div>
                <div class="about-page__item">
                    <div class="about-page__img">
                        <img src="{{ asset('assets/img/about-post-5.jpg') }}" alt="about-post">
                    </div>
                    <div class="about-page__title">хорьки</div>
                </div>
            </div>
        </div>

    </div>
    <div class="wrapper">
        @include('includes.contact-form')

    </div>
@endsection