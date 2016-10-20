<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Главная', route('home'));
});

// Home > About
Breadcrumbs::register('about', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('О компании', route('about'));
});


// Home > News
Breadcrumbs::register('news.index', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Новости', route('news.index'));
});
// Home > News > Item
Breadcrumbs::register('news.item', function($breadcrumbs, $item) {
    $breadcrumbs->parent('news.index');
    $breadcrumbs->push($item->title, route('news.item'));
});


// Home > Links
Breadcrumbs::register('links.index', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Ссылки', route('links.index'));
});
// Home > Links > Cat
Breadcrumbs::register('links.cat', function($breadcrumbs, $category) {
    $breadcrumbs->parent('links.index');
    $breadcrumbs->push($category->title, route('links.cat', $category->sef));
});
// Home > Links > Cat > Item
Breadcrumbs::register('links.item', function($breadcrumbs, $category, $item) {
    $breadcrumbs->parent('links.cat', $category); //  $category = $category->sef from links.cat
    $breadcrumbs->push($item->title, route('links.item'));
});


// Home > FAQ
Breadcrumbs::register('faq.index', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Вопросы', route('faq.index'));
});
// Home > FAQ > Cat
Breadcrumbs::register('faq.cat', function($breadcrumbs, $category) {
    $breadcrumbs->parent('faq.index');
    $breadcrumbs->push($category->title, route('faq.cat', $category->sef));
});
// Home > FAQ > Cat > Item
Breadcrumbs::register('faq.item', function($breadcrumbs, $category, $item) {
    $breadcrumbs->parent('faq.cat', $category);
    $breadcrumbs->push($item->title, route('faq.item'));
});


// Home > Steklo
Breadcrumbs::register('steklo.index', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Изделия из стекла', route('steklo.index'));
});
// Home > Steklo > Cat
Breadcrumbs::register('steklo.cat', function($breadcrumbs, $category) {
    $breadcrumbs->parent('steklo.index');
    $breadcrumbs->push($category->title, route('steklo.cat', $category->sef));
});
// Home > Steklo > Cat > Item
Breadcrumbs::register('steklo.item', function($breadcrumbs, $category, $item) {
    $breadcrumbs->parent('steklo.cat', $category);
    $breadcrumbs->push($item->title, route('steklo.item'));
});


// Home > Furnitura
Breadcrumbs::register('furnitura.index', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Фурнитура', route('furnitura.index'));
});
// Home > Furnitura > Cat
Breadcrumbs::register('furnitura.cat', function($breadcrumbs, $category) {
    $breadcrumbs->parent('furnitura.index');

    foreach ($category->getAncestors() as $ancestor)  {
        if( $ancestor->level > 1 )
        $breadcrumbs->push($ancestor->title, route('furnitura.cat', $ancestor->path));
        }

    $breadcrumbs->push($category->title, route('furnitura.cat', $category->path));
});
// Home > Furnitura > Cat > Item
Breadcrumbs::register('furnitura.item', function($breadcrumbs, $category, $item) {
    $breadcrumbs->parent('furnitura.cat', $category); //  $category = $category->path from links.cat
    $breadcrumbs->push($item->title, route('furnitura.item'));
});


// Home > Uslugi
Breadcrumbs::register('uslugi.index', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Услуги', route('uslugi.index'));
});
// Home > Uslugi > Item
Breadcrumbs::register('uslugi.item', function($breadcrumbs, $item) {
    $breadcrumbs->parent('uslugi.index');
    $breadcrumbs->push($item->title, route('uslugi.item'));
});


// Home > Foto
Breadcrumbs::register('foto.index', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Фотогалерея', route('foto.index'));
});
// Home > Foto > Item
Breadcrumbs::register('foto.item', function($breadcrumbs, $item) {
    $breadcrumbs->parent('foto.index');
    $breadcrumbs->push($item->title, route('foto.item', $item->sef));
});


// Home > Contacts
Breadcrumbs::register('contacts', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Контакты', route('contacts'));
});

// Home > Sitemap
Breadcrumbs::register('sitemap', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Карта сайта', route('sitemap'));
});





/*
// Home > Blog
Breadcrumbs::register('blog', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Blog', route('blog'));
});

// Home > Blog > [Category]
Breadcrumbs::register('category', function($breadcrumbs, $category)
{
    $breadcrumbs->parent('blog');
    $breadcrumbs->push($category->title, route('category', $category->id));
});

// Home > Blog > [Category] > [Page]
Breadcrumbs::register('page', function($breadcrumbs, $page)
{
    $breadcrumbs->parent('category', $page->category);
    $breadcrumbs->push($page->title, route('page', $page->id));
});

*/

