<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChoiseController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\PlayQuizController;
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

// 最初の画面
Route::get('/', function () {
    return view('index');
})->name("indexroute");

// 何をするかの選択時
Route::post('/firstchoise',[ChoiseController::class,"firstchoise"]
)->name("firstroute");

// クイズを作る
Route::get('/createquiz',[QuizController::class,"create_quiz"]
)->name("createroute");

// クイズを編集する
Route::get('/editquiz',[QuizController::class,"edit_quiz"]
)->name("editroute");

// テーマの設定ページへ
Route::get('/configquiz',[ConfigController::class,"config_theme"]
)->name("configroute");

// テーマ作成
Route::post("/configquiz/create",[ConfigController::class,"create_theme"])
->name("create_theme_route");

// テーマ編集
Route::patch("/configquiz/edit",[ConfigController::class,"edit_theme"])
->name("edit_theme_route");

// クイズ作成→投稿
Route::post("/post_createquiz",[QuizController::class,"post_create_quiz"])
->name("post_create_route");

// クイズで遊ぶ前段階
Route::get('quiz/beforequiz',[PlayQuizController::class,"before_play_quiz"]
)->name("before_quiz_route");

// クイズで遊ぶ
Route::get("quiz/playquiz",[PlayQuizController::class,"play_quiz"])
->name("play_quiz_route");



// お知らせのページ
// Route::get("sign{naiyou}{page}{js_needless}",[ChoiseController::class,"view_sign"])
// ->name("sign_route");