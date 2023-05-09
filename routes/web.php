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

    $footerLinks = [

        [
            'title' => 'DC Comics',
            'links' => ['Characters', 'Comics', 'Movies', 'TV', 'Games', 'Videos', 'News']
        ],


        [
            'title' => 'Shop',
            'links' => ['Shop Dc', 'Shop Dc Collectibles']
        ],


        [
            'title' => 'Dc',
            'links' => ['Terms Of Use', 'Privacy Policy(New)', 'Ad Choisese', 'Advertising', 'Jobs', 'Subscriptions', 'Talent WorkShops', 'CSPSC Certificates', 'Rating', 'Shop Help', 'Contact Us']
        ],


        [
            'title' => 'Sites',
            'links' => ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa']
        ],

    ];
    return view('homepage', compact('navbarLinks', 'comics', 'mainLinks', 'footerLinks'));
});
