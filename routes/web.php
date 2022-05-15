<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Crud;
use App\Http\Livewire\Showing;
use App\Http\Livewire\ListStudent;
use App\Http\Livewire\StudentForm;
use App\Http\Livewire\TestList;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('students', Crud::class);

Route::get('/show/{id}',Showing::class);

//Route::view('/show/{id}', 'livewire.showingdetail');

Route::get('/list',ListStudent::class);

//return view('livewire.list-student');


 Route::get('/test', TestList::class);
 
 // Creeyi controller StudentController o diri fih l action store; makaynch conttroller f livewire
 // Iwa hna saraha ma3rftch, livewire 3mrni khdmt bih ok 
//  Route::post("/ajout", App\Http\Livewire\TestList::class)->name("store-student");


 
//  Route::get('/ajout', function() {
//     return view('student.create');
//  })->name("ajout-etudiant");

Route::get("/test-student", StudentForm::class)->name('test-student');
//Route::get("/formulaire", StudentForm::class)->name('formulaire');




 