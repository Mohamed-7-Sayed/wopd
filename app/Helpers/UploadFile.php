<?php

namespace App\Helpers;

use Validator;
use App\Models\products;

trait UploadFile
{
    public function uploadFile($file, $destination, array $extra = null)
    {
        $extension = $file->getClientOriginalExtension();
        $destination = public_path($destination);
        $filr_name = $this->getRandomFileName($destination, $extension);
        $file->move($destination, $filr_name);
        return $filr_name;
    }

    private function getRandomFileName($destination, $ext)
    {
        $random_file_name = strtolower(uniqid());

        $file_name = $destination . '/' . $random_file_name . '.' . $ext;

        if (app('files')->exists($file_name)) {
            return $this->getRandomFileName($destination, $ext);
        }
        return $random_file_name . '.' . $ext;
    }
}
