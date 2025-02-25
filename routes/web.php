<?php
// filepath: /c:/xampp/htdocs/wevdev/webdev/routes/web.php
use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index']);