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

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/Panier', function () {
    return view('cart');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/confirmation', function () {
    return view('confirmation');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/element', function () {
    return view('element');
});

Route::get('/features', function () {
    return view('features');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/single-blog', function () {
    return view('single-blog');
});

Route::get('/tracking', function () {
    return view('tracking');
});

// Front office
Route::get('/', 'ClientPagesController@Accueil');


route::post('login-page={page}', 'AuthController@AuthentificatedGoingToPage');
route::get('logout', 'AuthController@LogOut');

Route::get('/Produit/{product}', 'ClientPagesController@ProduitOverview');
route::get('/Descriptions', 'ClientPagesController@importDescriptions')->name('importDescriptions');
route::post('/AjoutPanier', 'ClientPagesController@AjoutPanier')->name("AjoutPanier");

Route::post('/StoreMessage', 'ClientPagesController@StoreMessage')->name('StoreMessage');

// Back office
route::get('/Admin/Accueil', 'AdminPagesController@Accueil');

route::get('/Admin/ListeProduits', 'AdminPagesController@ListeProduits');
route::get('/Admin/NouveauProduit', 'AdminPagesController@NouveauProduit');
route::post('/Admin/AjoutNouveauProduit', 'AdminPagesController@AjoutNouveauProduit')->name('AjoutNouveauProduit');
route::post('/Admin/AjoutDecriptionAuProduit', 'AdminPagesController@AjoutDecriptionAuProduit')->name('AjoutDecriptionAuProduit');
route::get('/Admin/importTypes', 'AdminPagesController@ImportTypes')->name('ImportTypes');


// route::get('/Admin/ListeProduits', 'AdminPagesController@ListeProduits');
route::get('/Admin/NosMarques', 'AdminPagesController@NosMarques');
route::post('/Admin/AjoutNouvelleMarque', 'AdminPagesController@AjoutNouvelleMarque')->name('AjoutNouvelleMarque');
route::get('/Admin/SupprimerMarque/{id_marque}', 'AdminPagesController@SupprimerMarque');
