<?php

use App\Http\Controllers\RemoteDesktopController;
use Illuminate\Support\Facades\Route;

Route::post('/ssh/execute', [RemoteDesktopController::class, 'executeSSHCommand'])->name('ssh.execute');
