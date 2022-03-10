<?php
use App\Http\Controllers\TodoListController;
use Illuminate\Support\Facades\Route;

Route::get('/',[TodoListController::class,'index'])->name('index');
Route::post('/',[TodoListController::class,'store'])->name('store');
Route::delete('/{todoList:id}',[TodoListController::class,'destroy'])->name('destroy');
Route::put('/todoList/{id}', [TodoListController::class,'updateTodoById'])->name('updateTodoById');
