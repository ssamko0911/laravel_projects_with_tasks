<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers as Web;

require __DIR__.'/auth.php';

Route::redirect('/', 'projects');

Route::get('projects/{project}/add-task', [Web\ProjectController::class, 'add'])->name('projects.add');

Route::resource('projects', Web\ProjectController::class);
Route::resource('tasks', Web\TaskController::class);

Route::get('/{file}', [Web\DownloadFileController::class, 'download'])->name('download');
