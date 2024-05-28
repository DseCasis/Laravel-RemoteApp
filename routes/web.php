<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RemoteDesktopController;
use App\Http\Controllers\CommandController;

Route::post('/open-explorer', [CommandController::class, 'openExplorer']);
Route::post('/open-browser', [CommandController::class, 'openBrowser']);
Route::post('/ssh/execute', [RemoteDesktopController::class, 'executeSSHCommand'])->name('ssh.execute');

Route::get('/', function () {
    return view('welcome');
});

