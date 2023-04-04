@extends('layout.app')

@section('title','Контакты')

@section('content')
    <div class="wrapper">
        <nav class="page-navigation">
            <ul class="page-navigation-list">

                @foreach (\Diglactic\Breadcrumbs\Breadcrumbs::generate('contact') as $breadcrumb)
                    @if(!$loop->last)
                        <li class="page-navigation-item">
                            <a href="{{$breadcrumb->url}}">{{ $breadcrumb->title }}</a>
                        </li>
                    @else
                        <li class="page-navigation-item">
                            <span>{{ $breadcrumb->title }}</span>
                        </li>
                    @endif
                @endforeach
            </ul>
        </nav>
        <section class="contacts-page">
            <div class="page-title">
                <h1>Контакты </h1>
            </div>
            <div class="contacts-page__inner">
                <div class="contacts-page__left">
                    <div class="contacts-page__info">
                        <div class="contacts-page__item">
                            <div class="contacts-page__item-title">
                                <h3>телефон для связи:</h3>
                            </div>
                            <div class="contacts-page__item-text">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M10 20C15.5228 20 20 15.5228 20 10C20 4.47715 15.5228 0 10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20ZM13.9996 13.536V11.9644C13.9996 11.9094 13.9797 11.8563 13.9428 11.8154C13.906 11.7745 13.8552 11.7487 13.8005 11.7431C13.6991 11.7333 13.6178 11.7236 13.556 11.7147C12.9399 11.6267 12.3405 11.4462 11.7783 11.1791C11.7349 11.1586 11.6856 11.154 11.639 11.1661C11.5925 11.1782 11.5517 11.2062 11.5237 11.2453L10.8393 12.2027C9.47294 11.6162 8.38407 10.5273 7.79768 9.16089L8.75674 8.47556C8.83673 8.41867 8.86429 8.31244 8.82207 8.22356C8.55453 7.66126 8.37353 7.06174 8.28521 6.44533C8.27632 6.38356 8.26698 6.30222 8.25676 6.2C8.25125 6.14515 8.22555 6.0943 8.18465 6.05734C8.14375 6.02038 8.09057 5.99994 8.03544 6H6.46397C6.35146 5.99995 6.24311 6.04258 6.16079 6.11929C6.07848 6.196 6.02832 6.30109 6.02044 6.41333C6.00667 6.60756 6 6.76622 6 6.88889C6 10.8164 9.18338 14 13.1107 14C13.2334 14 13.392 13.9929 13.5862 13.9796C13.6985 13.9717 13.8036 13.9215 13.8803 13.8392C13.957 13.7569 13.9996 13.6485 13.9996 13.536Z"
                                          fill="#D1FDFF"/>
                                </svg>
                                <a href="#">{{ $contact->phone }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="contacts-page__form">
                        <h2 class="contacts-page__form-title">закажите звонок:</h2>
                        <div class="input-group">
                            <input type="text" class="input-group__input" placeholder="Ваше имя">
                        </div>
                        <div class="input-group">
                            <input type="text" class="input-group__input" placeholder="Телефон">
                        </div>
                        <button class="btn btn-full">заказать звонок</button>
                    </div>
                </div>
                <div class="contacts-page__right">
                    <div class="contacts-page__info">
                        <div class="contacts-page__item">
                            <div class="contacts-page__item-title">
                                <h3>ждем вас по адресу :</h3>
                            </div>
                            <div class="contacts-page__item-text">
                                <svg width="18" height="23" viewBox="0 0 18 23" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 11.5C9.61875 11.5 10.1486 11.2746 10.5896 10.8238C11.0299 10.3738 11.25 9.8325 11.25 9.2C11.25 8.5675 11.0299 8.02585 10.5896 7.57505C10.1486 7.12502 9.61875 6.9 9 6.9C8.38125 6.9 7.85175 7.12502 7.4115 7.57505C6.9705 8.02585 6.75 8.5675 6.75 9.2C6.75 9.8325 6.9705 10.3738 7.4115 10.8238C7.85175 11.2746 8.38125 11.5 9 11.5ZM9 23C5.98125 20.3742 3.72675 17.935 2.2365 15.6825C0.7455 13.4309 0 11.3467 0 9.43C0 6.555 0.904875 4.26458 2.71463 2.55875C4.52363 0.852917 6.61875 0 9 0C11.3812 0 13.4764 0.852917 15.2854 2.55875C17.0951 4.26458 18 6.555 18 9.43C18 11.3467 17.2549 13.4309 15.7646 15.6825C14.2736 17.935 12.0188 20.3742 9 23Z"
                                          fill="#D1FDFF"/>
                                </svg>

                                <a href="#">{{ $contact->address }}</a>
                            </div>
                        </div>
                        <div class="contacts-page__item">
                            <div class="contacts-page__item-title">
                                <h3>время работы :</h3>
                            </div>
                            <div class="contacts-page__item-text">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.8225 0C4.8425 0 0 4.85333 0 10.8333C0 16.8133 4.8425 21.6667 10.8225 21.6667C16.8133 21.6667 21.6667 16.8133 21.6667 10.8333C21.6667 4.85333 16.8133 0 10.8225 0ZM15.1667 15.1667C15.0664 15.2671 14.9474 15.3468 14.8163 15.4011C14.6853 15.4555 14.5448 15.4835 14.4029 15.4835C14.261 15.4835 14.1205 15.4555 13.9895 15.4011C13.8584 15.3468 13.7394 15.2671 13.6392 15.1667L10.075 11.6025C9.97264 11.5022 9.8912 11.3825 9.83541 11.2505C9.77963 11.1185 9.75059 10.9767 9.75 10.8333V6.5C9.75 5.90417 10.2375 5.41667 10.8333 5.41667C11.4292 5.41667 11.9167 5.90417 11.9167 6.5V10.3892L15.1667 13.6392C15.5892 14.0617 15.5892 14.7442 15.1667 15.1667Z"
                                          fill="#D1FDFF"/>
                                </svg>
                                <p>Пн-Вс <br>
                                    9:00 - 21:00</p>
                            </div>
                        </div>
                        <div class="contacts-page__item">
                            <div class="contacts-page__item-title">
                                <h3>ПОЧТА :</h3>
                            </div>
                            <div class="contacts-page__item-text">
                                <svg width="20" height="17" viewBox="0 0 20 17" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 0.5H2C0.9 0.5 0 1.4 0 2.5V14.5C0 15.6 0.9 16.5 2 16.5H18C19.1 16.5 20 15.6 20 14.5V2.5C20 1.4 19.1 0.5 18 0.5ZM17.6 4.75L11.06 8.84C10.41 9.25 9.59 9.25 8.94 8.84L2.4 4.75C2.29973 4.69371 2.21192 4.61766 2.14189 4.52645C2.07186 4.43525 2.02106 4.33078 1.99258 4.21937C1.96409 4.10796 1.9585 3.99194 1.97616 3.87831C1.99381 3.76468 2.03434 3.65581 2.09528 3.5583C2.15623 3.46079 2.23632 3.37666 2.33073 3.311C2.42513 3.24533 2.53187 3.19951 2.6445 3.1763C2.75712 3.15309 2.87328 3.15297 2.98595 3.17595C3.09863 3.19893 3.20546 3.24453 3.3 3.31L10 7.5L16.7 3.31C16.7945 3.24453 16.9014 3.19893 17.014 3.17595C17.1267 3.15297 17.2429 3.15309 17.3555 3.1763C17.4681 3.19951 17.5749 3.24533 17.6693 3.311C17.7637 3.37666 17.8438 3.46079 17.9047 3.5583C17.9657 3.65581 18.0062 3.76468 18.0238 3.87831C18.0415 3.99194 18.0359 4.10796 18.0074 4.21937C17.9789 4.33078 17.9281 4.43525 17.8581 4.52645C17.7881 4.61766 17.7003 4.69371 17.6 4.75Z"
                                          fill="#D1FDFF"/>
                                </svg>
                                <a href="#">{{ $contact->email }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="map">
                        <img src="{{ asset('assets/img/map.jpg') }}" alt="map">
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection