// routes/web.php

use App\Http\Controllers\FileController;

Route::get('/', [FileController::class, 'index']);
