<?php

namespace App\Services;
use Illuminate\Support\Facades\Storage;
use InterventionImage;

class ImageServiceProvider{
    public static function upload($imageFile, $folderName){

        Storage::putFile('public/'.$folderName.'/'. $imageFile); //リサイズなしの場合
        return $fileNameToStore;
    }
}