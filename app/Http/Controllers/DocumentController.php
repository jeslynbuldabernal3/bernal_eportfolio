<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

class DocumentController extends Controller
{
    public function show($filename)
    {
        $path = public_path('documents/' . $filename);

        if (!File::exists($path)) {
            abort(404);
        }

        $mime = File::mimeType($path);

        return response()->file($path, [
            'Content-Type'        => $mime,
            'Content-Disposition' => 'inline; filename="' . $filename . '"',
        ]);
    }
}
