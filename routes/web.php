<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $navbarLinks = [
        'characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'
    ];

    $comics = config('comics');

    $mainLinks = [

        [
            'title' => 'Digital Comics',
            'image' => 'resources/images/buy-comics-digital-comics.png'
        ],


        [
            'title' => 'Dc Merchandise',
            'image' => 'resources/images/buy-comics-merchandise.png'
        ],


        [
            'title' => 'Subscription',
            'image' => 'resources/images/buy-comics-subscriptions.png'
        ],


        [
            'title' => 'Comic Shop Location',
            'image' => 'resources/images/buy-comics-shop-locator.png'
        ],


        [
            "title" => 'Dc Power Visa',
            "image" => 'resources/images/buy-dc-power-visa.svg'
        ],

    ];
    return view('homepage', compact('navbarLinks', 'comics', 'mainLinks'));
});
