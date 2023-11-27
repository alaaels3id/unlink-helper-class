<?php

use App\Http\Unlink;
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

Route::get('/', function () {
//    Unlink::multiPdf(['pdf_IzLVOXiBTMgs_2023-01-04.pdf', 'pdf_dsdsdXiBTMgs_2023-01-04.pdf']);

    Unlink::byExtension(public_path('storage/uploaded/test'),'php');

    return true;
});
