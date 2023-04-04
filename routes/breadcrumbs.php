<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Главная', route('home'));
});

// Home > Contact
Breadcrumbs::for('contact', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Контакты', route('contacts'));
});

Breadcrumbs::for('services', function (BreadcrumbTrail $trail,\App\Models\Page $page) {
    $trail->parent('home');
    $trail->push($page->seo_title_inner, route('services'));
});


Breadcrumbs::for('library', function (BreadcrumbTrail $trail,\App\Models\News $news) {
    $trail->parent('home');
    $trail->push($news->title_library, route('library'));
});

Breadcrumbs::for('library-article', function (BreadcrumbTrail $trail,\App\Models\NewsArticle $article) {
    $trail->parent('library',$article->news);
    $trail->push($article->title_single, route('library-article',$article->slug));
});



// Home > Blog > [Category]
//Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
//    $trail->parent('blog');
//    $trail->push($category->title, route('category', $category));
//});