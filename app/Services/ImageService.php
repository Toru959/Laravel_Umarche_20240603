<?php

namespace App\Services;
use Illuminate\Support\Facades\Storage;
use InterventionImage;

class ImageService{
    public static function upload($imageFile, $folderName){
        $fileName = uniqid(rand().'_');
        $extension = $imageFile->extension();
        $fileNameToStore = $fileName.'.'.$extension;

        Storage::putFileAs('public/'.$folderName.'/', $imageFile, $fileNameToStore);
        //Storage::putFile('public/'.$folderName.'/'. $imageFile); //リサイズなしの場合
        return $fileNameToStore;
    }
}