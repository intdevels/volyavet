@extends('layout.app')

@section('content')
    <section class="page-error">
        <div class="wrapper page-error__wrapper">
            <div class="page-error__inner">
                <div class="page-error__left">
                    <div class="page-error__img">
                        <img src="{{ asset('assets/img/404-1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="page-error__content">
                    <p class="page-error__text">Упс! Этой страницы не существует. Приносим извинения за неудобства. </p>
                    <h1 class="page-error__title">404</h1>
                    <a href="/" class="btn btn-full page-error__link">На главную</a>
                </div>
                <div class="page-error__right">
                    <div class="page-error__img">
                        <img src="{{ asset('assets/img/404-2.jpg') }}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection