@extends('layout.app')

@section('title', $article->title_single )

@section('content')
    <div class="wrapper">
        <nav class="page-navigation">
            <ul class="page-navigation-list">

                @foreach (\Diglactic\Breadcrumbs\Breadcrumbs::generate('library-article',$article) as $breadcrumb)
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
        <section class="post-page">
            <div class="page-title">
                <h1>{{ $article->title_single }}</h1>
                <div class="page-title__date">{{ $article->date_of_publication }}</div>
            </div>
            <div class="post-page__inner">
                <div class="post-page__img">
                    <img src="{{ asset('storage/'.$article->image_single) }}" alt="dog">
                </div>
                <div class="post-page__content">
                    <div class="post-page__desc">
                        {!! $article->description !!}
                    </div>
                </div>
            </div>
            <div class="post-page__footer">
                <a href="{{ route('library') }}" class="btn">Назад к статьям</a>
            </div>

        </section>
        <section class="section">
            <div class="page-title">
                <h2>ВАМ МОЖЕТ БЫТЬ ИНТЕРЕСНО</h2>
            </div>
            <div class="swiper mySwiper slider">
                <div class="swiper-wrapper">
                    @foreach($interesting_articles as $interesting_article)
                        <div class="swiper-slide">
                            <div class="post">
                                <div class="post-img">
                                    <img src="{{ asset('storage/'.$interesting_article->image) }}">
                                </div>
                                <div class="post-content">
                                    <div class="post-default">
                                        <div class="post-title">
                                            {{ $interesting_article->title }}
                                        </div>
                                        <div class="post-date">{{ $interesting_article->date_of_publication }}</div>
                                    </div>
                                    <div class="post-hover">
                                        <a href="{{ route('library-article',['slug' => $interesting_article->slug]) }}" class="btn">Читать статью</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="swiper-navigation slider-navigation" >
                    <div class="slider-navigation__inner">
                        <div class="slider-button swiper-button-prev slider-button-prev">
                            <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.00016 13.7999C7.65705 14.143 7.10076 14.143 6.75766 13.7999L1.08601 8.12825C0.695488 7.73772 0.695489 7.10456 1.08601 6.71404L6.75766 1.04239C7.10076 0.699285 7.65705 0.699286 8.00016 1.04239C8.34326 1.3855 8.34326 1.94179 8.00016 2.28489L3.57101 6.71404C3.18049 7.10456 3.18049 7.73772 3.57101 8.12825L8.00016 12.5574C8.34326 12.9005 8.34326 13.4568 8.00016 13.7999Z" fill="#D1FDFF"/>
                            </svg>
                        </div>
                        <div class="slider-pagination"></div>
                        <div class="slider-button   swiper-button-next slider-button-next">
                            <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.999844 13.7999C1.34295 14.143 1.89924 14.143 2.24234 13.7999L7.91399 8.12825C8.30451 7.73772 8.30451 7.10456 7.91399 6.71404L2.24234 1.04239C1.89924 0.699285 1.34295 0.699286 0.999843 1.04239C0.656736 1.3855 0.656736 1.94179 0.999844 2.28489L5.42899 6.71404C5.81951 7.10456 5.81951 7.73772 5.42899 8.12825L0.999843 12.5574C0.656736 12.9005 0.656736 13.4568 0.999844 13.7999Z" fill="#D1FDFF"/>
                            </svg>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection