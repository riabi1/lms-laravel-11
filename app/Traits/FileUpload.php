<?php

namespace App\Traits;

use Exception;
use Illuminate\Http\UploadedFile;

trait FileUpload
{

    public function uploadFile(UploadedFile $file, string $directory = 'uploads'): string
    {

        try {
            $filename = 'lms_' . uniqid() . '.' . $file->getClientOriginalExtension();

            // move the file to storage
            $file->storeAs($directory, $filename, 'public');

            return '/' . $directory . '/' . $filename;
        } catch (Exception $e) {
            throw $e;
        }
    }
}
