// app/Http/Controllers/FileController.php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        // Your file management logic goes here
        $files = Storage::files('public');

        // Return view with data
        return view('files.index', ['files' => $files]);
    }

    // Other controller methods (if any) can go here
}
