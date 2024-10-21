<?php

use App\Http\Controllers\PdfController;
use App\Livewire\Auth\ForgotPage;
use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\Auth\ResetPasswordPage;
use App\Livewire\CancelPage;
use App\Livewire\CartsPage;
use App\Livewire\CategoriesPage;
use App\Livewire\CheckoutPage;
use App\Livewire\HomePage;
use App\Livewire\OrderDetailPage;
use App\Livewire\OrdersPage;
use App\Livewire\PdfPage;
use App\Livewire\ProductDetailPage;
use App\Livewire\ProductsPage;
use App\Livewire\SuccessPage;
use Illuminate\Support\Facades\Route;

// main feature
Route::get('/', HomePage::class);
Route::get('/categories', CategoriesPage::class);
Route::get('/products', ProductsPage::class);
Route::get('/carts', CartsPage::class);
Route::get('/products/{slug}', ProductDetailPage::class);



Route::middleware('guest')->group(function(){
  // auth feature
  Route::get('/login', LoginPage::class)->name('login');
  Route::get('/register', RegisterPage::class);
  Route::get('/forgot', ForgotPage::class)->name('password.request');
  Route::get('/reset/{token}', ResetPasswordPage::class)->name('password.reset');
});

Route::middleware('auth')->group(function() {
  Route::get('/logout', function() {
    auth()->guard()->logout();
    return redirect('/');
  });

  Route::get('/checkout', CheckoutPage::class);
  Route::get('/orders', OrdersPage::class);
  Route::get('/orders/{order_id}', OrderDetailPage::class)->name('my-orders.show');

  // alert
  Route::get('/success', SuccessPage::class)->name('success'); 
  Route::get('/cancel', CancelPage::class)->name('cancel');
});