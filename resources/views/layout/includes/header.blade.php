<header class="header">
    <div class="wrapper">
        <div class="header-inner">
            <div class="header-logo">
                <img src="{{ asset('assets/img/logo.svg') }}" alt="">
            </div>
            <nav class="header-menu">
                <ul class="header-list">
                    <li class="header-item"><a href="#" class="header-link">Новости и акции</a></li>
                    <li class="header-item"><a href="{{ route('about-us') }}" class="header-link">О нас</a></li>
                    <li class="header-item"><a href="{{ route('services') }}" class="header-link">услуги и цены</a></li>
                    <li class="header-item"><a href="{{ route('library') }}" class="header-link">Библиотека</a></li>
                    <li class="header-item"><a href="#" class="header-link">Наша команда</a></li>
                    <li class="header-item"><a href="#" class="header-link">Отзывы</a></li>
                    <li class="header-item"><a href="{{ route('contacts') }}" class="header-link">Контакты</a></li>
                </ul>
            </nav>

            <form class="header-search search">
                <input type="text" class="search-input" placeholder="Поиск">
                <button class="search-btn">
                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                                d="M13.1655 10.8842H12.3632L12.0789 10.6171C13.1085 9.45347 13.6744 7.96795 13.6733 6.43159C13.6733 5.15955 13.2861 3.91606 12.5608 2.85839C11.8355 1.80072 10.8045 0.976371 9.59834 0.489579C8.39216 0.0027867 7.06491 -0.12458 5.78443 0.123584C4.50396 0.371748 3.32776 0.984298 2.40459 1.88377C1.48142 2.78325 0.852734 3.92925 0.598031 5.17685C0.343329 6.42446 0.474052 7.71764 0.973668 8.89286C1.47329 10.0681 2.31936 11.0726 3.40489 11.7793C4.49043 12.486 5.76667 12.8632 7.07223 12.8632C8.70726 12.8632 10.2103 12.2794 11.368 11.3097L11.6422 11.5868V12.3684L16.7199 17.3059L18.2331 15.8316L13.1655 10.8842ZM7.07223 10.8842C4.54353 10.8842 2.50228 8.89539 2.50228 6.43159C2.50228 3.9678 4.54353 1.97895 7.07223 1.97895C9.60094 1.97895 11.6422 3.9678 11.6422 6.43159C11.6422 8.89539 9.60094 10.8842 7.07223 10.8842Z"
                        />
                    </svg>
                </button>
            </form>
        </div>
    </div>
</header>