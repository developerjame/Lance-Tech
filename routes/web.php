<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AimodelController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DigiController;
use App\Http\Controllers\ModerationController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TableCountController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WritingaccountController;
use App\Models\Moderation;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Home page
Route::get('/', [DigiController::class, 'index']);

//Access contact page
Route::get('/contact', [DigiController::class, 'contact']);

//Access about us page
Route::get('/about-us', [DigiController::class, 'aboutUs']);

//Access services
Route::get('/section', [DigiController::class, 'services']);

//Create subscription
Route::post('/subscription', [SubscriptionController::class, 'subscribe']);

//Send messages
Route::post('/contacts', [ContactController::class, 'contact']);

//Show admin login form
Route::get('/login', [UserController::class, 'login'])->name('login');

//Authenticate admin
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//Show admin page
Route::get('/admin', [ContactController::class, 'admin'])->middleware('auth');

//Count rows in a table
Route::get('/admin', [TableCountController::class, 'countRows']);

//Show messages
Route::get('/admin/message', [ContactController::class, 'message']);

//Show subscriptions
Route::get('/admin/subscription', [SubscriptionController::class, 'subscription']);

//Show accounts
Route::get('/admin/account', [AccountController::class, 'account']);

//Show AI models
Route::get('/admin/aimodel', [AimodelController::class, 'aimodel']);

//Show moderations
Route::get('/admin/moderation', [ModerationController::class, 'moderation']);

//Show Writing Accounts
Route::get('/admin/writingaccount', [WritingaccountController::class, 'writingaccount']);

//Delete message
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy']);

//Delete account
Route::delete('/accounts/{account}', [AccountController::class, 'destroy']);

//Delete aimodel
Route::delete('/aimodels/{aimodel}', [AimodelController::class, 'destroy']);

//Delete moderation
Route::delete('/moderations/{moderation}', [ModerationController::class, 'destroy']);

//Delete writingaccount
Route::delete('/writingaccounts/{writingaccount}', [WritingaccountController::class, 'destroy']);

//logout admin
Route::post('/logout', [UserController::class, 'logout']);

//show add account page
Route::get('/accounts/create', [AccountController::class, 'createaccount'])->middleware('auth');

//show add AI Model page
Route::get('/aimodels/create', [AimodelController::class, 'create'])->middleware('auth');

//show add moderation page
Route::get('/moderations/create', [ModerationController::class, 'create'])->middleware('auth');

//show add writing account page
Route::get('/writingaccounts/create', [WritingaccountController::class, 'create'])->middleware('auth');

//Create and store account
Route::post('/accounts', [AccountController::class, 'store'])->middleware('auth');

//Create and store AI model
Route::post('/aimodels', [AimodelController::class, 'store'])->middleware('auth');

//Create and store moderation
Route::post('/moderations', [ModerationController::class, 'store'])->middleware('auth');

//Create and store writing account
Route::post('/writingaccounts', [WritingaccountController::class, 'store'])->middleware('auth');

//Edit account
Route::get('/accounts/{account}/edit', [AccountController::class, 'edit'])->middleware('auth');

//Edit AI model
Route::get('/aimodels/{aimodel}/edit', [AimodelController::class, 'edit'])->middleware('auth');

//Edit moderation
Route::get('/moderations/{moderation}/edit', [ModerationController::class, 'edit'])->middleware('auth');

//Edit writing account
Route::get('/writingaccounts/{writingaccount}/edit', [WritingaccountController::class, 'edit'])->middleware('auth');

//Submit to update account
Route::put('/accounts/{account}', [AccountController::class, 'update']);

//Submit to update AI model
Route::put('/aimodels/{aimodel}', [AimodelController::class, 'update']);

//Submit to update moderation
Route::put('/moderations/{moderation}', [ModerationController::class, 'update']);

//Submit to update writingaccount
Route::put('/writingaccounts/{writingaccount}', [WritingaccountController::class, 'update']);

//Show single account
Route::get('/accounts/{account}', [AccountController::class, 'show']);

//Show single AI model
Route::get('/aimodels/{aimodel}', [AimodelController::class, 'show']);

//Show single chat moderation service
Route::get('/moderations/{moderation}', [ModerationController::class, 'show']);

//Show single writing account
Route::get('/writingaccounts/{writingaccount}', [WritingaccountController::class, 'show']);

