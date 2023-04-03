@extends('layout.app')

@section('content')
    <div class="wrapper">
        <nav class="page-navigation">
            <ul class="page-navigation-list">
                <li class="page-navigation-item">
                    <a href="#">Главная</a>
                </li>
                <li class="page-navigation-item">
                    <span>Услуги и цены</span>
                </li>
            </ul>
        </nav>
        <section class="price-page">
            <div class="page-title">
                <h1>Услуги и цены </h1>
            </div>
            <div class="price-page__inner">
                <nav class="price-page__menu">
                    <ul class="price-page__menu-list">
                        <li class="price-page__item">
                            <a href="#" class="price-page__link">Анализы</a>
                        </li>
                        <li class="price-page__item">
                            <a href="#" class="price-page__link">Стационар</a>
                        </li>
                        <li class="price-page__item">
                            <a href="#" class="price-page__link">Приемы
                                и&nbsp;консультации</a>
                        </li>
                        <li class="price-page__item">
                            <a href="#" class="price-page__link">Визуальная
                                диагностика</a>
                        </li>
                        <li class="price-page__item">
                            <a href="#" class="price-page__link active">Вакцинации</a>
                        </li>
                        <li class="price-page__item">
                            <a href="#" class="price-page__link">Анестезия</a>
                        </li>
                        <li class="price-page__item">
                            <a href="#" class="price-page__link">Ритуальные услуги</a>
                        </li>
                        <li class="price-page__item">
                            <a href="#" class="price-page__link">Терапия</a>
                        </li>
                        <li class="price-page__item">
                            <a href="#" class="price-page__link">Хирургия</a>
                        </li>
                        <li class="price-page__item">
                            <a href="#" class="price-page__link">Стоматология</a>
                        </li>
                        <li class="price-page__item">
                            <a href="#" class="price-page__link">Репродуктология</a>
                        </li>
                        <li class="price-page__item">
                            <a href="#" class="price-page__link">Косметические процедуры</a>
                        </li>
                    </ul>
                </nav>
                <div class="price-page__content">
                    <h2 class="price-page__title">вакцинации</h2>
                    <p class="price-page__desc">Вакцинация – обязательная процедура для безопасности вашего питомца. С
                        помощью вакцинации можно избежать значительного количества инфекционных заболеваний <br> (у животных
                        формируется стойкий иммунитет). Вакцинацию важно проводить регулярно (примерно раз в год) под
                        наблюдением врача.</p>
                    <img class="price-page__img" src="{{ asset('assets/img/price.jpg') }}" alt="price">
                    <ul class="price-page__list">
                        <li class="price-page__list-head">
                            <div class="price-page__list-head__text">Название услуги</div>
                            <div class="price-page__list-head__price">Цена, ₽</div>
                        </li>
                        <li class="price-page__list-item">
                            <div class="price-page__list-item__text">Вакцинация кошки без бешенства  (Биофел PCH)</div>
                            <div class="price-page__list-item__price">1900</div>
                        </li>
                        <li class="price-page__list-item">
                            <div class="price-page__list-item__text">Вакцинация кошки без бешенства  (Мультифел-4)</div>
                            <div class="price-page__list-item__price">1500</div>
                        </li>
                        <li class="price-page__list-item">
                            <div class="price-page__list-item__text">Вакцинация кошки без бешенства  (Нобивак Tricat)</div>
                            <div class="price-page__list-item__price">2500</div>
                        </li>
                        <li class="price-page__list-item">
                            <div class="price-page__list-item__text">Вакцинация кошки комплексная (Мультифел-4 + Рабифел)</div>
                            <div class="price-page__list-item__price">2000</div>
                        </li>
                        <li class="price-page__list-item">
                            <div class="price-page__list-item__text">Вакцинация кошки без бешенства  (Биофел PCH)</div>
                            <div class="price-page__list-item__price">2100</div>
                        </li>
                        <li class="price-page__list-item">
                            <div class="price-page__list-item__text">Вакцинация собаки комплексная (Мультикан-6)</div>
                            <div class="price-page__list-item__price">1500</div>
                        </li>
                        <li class="price-page__list-item">
                            <div class="price-page__list-item__text">Вакцинация собаки комплексная (Мультикан-8)</div>
                            <div class="price-page__list-item__price">1900</div>
                        </li>
                        <li class="price-page__list-item">
                            <div class="price-page__list-item__text">Вакцинация кошки без бешенства  (Биофел PCH)</div>
                            <div class="price-page__list-item__price">1900</div>
                        </li>
                        <li class="price-page__list-item">
                            <div class="price-page__list-item__text">Вакцинация собаки комплексная с бешенством  (Биокан DHPPI+LR) </div>
                            <div class="price-page__list-item__price">2600</div>
                        </li>
                        <li class="price-page__list-item">
                            <div class="price-page__list-item__text">Вакцинация собаки комплексная с бешенством  (Эурикан DHPPI+RL) </div>
                            <div class="price-page__list-item__price">3500</div>
                        </li>
                        <li class="price-page__list-item">
                            <div class="price-page__list-item__text">Вакцинация против бешенства кошек (Рабифел)</div>
                            <div class="price-page__list-item__price">1000</div>
                        </li>
                        <li class="price-page__list-item">
                            <div class="price-page__list-item__text">Вакцинация против бешенства собак (Рабикс)</div>
                            <div class="price-page__list-item__price">3500</div>
                        </li>
                        <li class="price-page__list-item">
                            <div class="price-page__list-item__text">Вакцинация против бешенства собак (Рабикс)</div>
                            <div class="price-page__list-item__price">3500</div>
                        </li>
                        <li class="price-page__list-item">
                            <div class="price-page__list-item__text">Вакцинация против дерматофитозов кошек и собак (Вакдерм)</div>
                            <div class="price-page__list-item__price">400</div>
                        </li>
                    </ul>
                    <div class="price-page__footer">
                        <p class="price-page__footer-text">
                            Стоимость услуг на сайте не является публичной офертой и может отличаться от цен прейскуранта
                        </p>
                        <button class="btn">Записаться на приём</button>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection