// app/Http/Controllers/FileController.php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

public function download(Request $request)
{
    $file = $request->input('file');

    // Check if file exists
    if (Storage::exists($file)) {
        // Return file download response
        return Storage::download($file);
    } else {
        // Handle file not found
        return response()->json(['error' => 'File not found'], 404);
    }
}
