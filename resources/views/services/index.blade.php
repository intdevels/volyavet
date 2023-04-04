@extends('layout.app')
@section('title',$page_section->seo_title_inner)

@section('content')
    <div class="wrapper">
        <nav class="page-navigation">
            <ul class="page-navigation-list">

                @foreach (\Diglactic\Breadcrumbs\Breadcrumbs::generate('services',$page_section) as $breadcrumb)
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

        <section class="price-page">
            <div class="page-title">
                <h1>{{ $page_section->seo_title_inner }}</h1>
            </div>
            <div class="price-page__inner">
                <nav class="price-page__menu">
                    <ul class="price-page__menu-list">
{{--                        {{ dd(Route::currentRouteName()) }}--}}
                        @foreach($services as $service)
{{--                            {{ dd($loop) }}--}}
                            <li class="price-page__item">
                                <a href="{{ route('service-single',['slug' => $service->slug]) }}"
                                   class="price-page__link @if(isset($slug) && $slug == $service->slug) active @elseif(!isset($slug) && $loop->first) active @endif">
                                    {{ $service->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
                <div class="price-page__content">
                    @if(Route::is('services') && count($services) > 0)
                        <h2 class="price-page__title">{{ $services[0]->title }}</h2>
                        <p class="price-page__desc">{{ $services[0]->description }}</p>
                        <img class="price-page__img" src="{{ asset('storage/'.$services[0]->image) }}" alt="price">
                        <ul class="price-page__list">
                            <li class="price-page__list-head">
                                <div class="price-page__list-head__text">Название услуги</div>
                                <div class="price-page__list-head__price">Цена, ₽</div>
                            </li>
                            @foreach($services[0]->service_children as $child)
                                <li class="price-page__list-item">
                                    <div class="price-page__list-item__text">{{ $child->name }}</div>
                                    <div class="price-page__list-item__price">{{ $child->price }}</div>
                                </li>
                            @endforeach
                        </ul>
                    @elseif(Route::is('service-single'))
                        <h2 class="price-page__title">{{ $service_single->title }}</h2>
                        <p class="price-page__desc">{{ $service_single->description }}</p>
                        <img class="price-page__img" src="{{ asset('storage/'.$service->image) }}" alt="price">
                        <ul class="price-page__list">
                            <li class="price-page__list-head">
                                <div class="price-page__list-head__text">Название услуги</div>
                                <div class="price-page__list-head__price">Цена, ₽</div>
                            </li>
                            @foreach($service_single->service_children as $child)
                            <li class="price-page__list-item">
                                <div class="price-page__list-item__text">{{ $child->name }}</div>
                                <div class="price-page__list-item__price">{{ $child->price }}</div>
                            </li>
                            @endforeach

                        </ul>
                    @endif

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