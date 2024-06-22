<?php

namespace App\Services;
use Illuminate\Support\Facades\Storage;
use InterventionImage;

class ImageService{
    public static function upload($imageFile, $folderName){ 
        //dd($imageFile['image']);
        if(is_array($imageFile)){
            $file = $imageFile['image'];
        } else {
            $file = $imageFile;
        }

        $fileName = uniqid(rand().'_');
        $extension = $file->extension();
        $fileNameToStore = $fileName.'.'.$extension;

        Storage::putFileAs('public/'.$folderName.'/', $file, $fileNameToStore);
        //Storage::putFile('public/'.$folderName.'/'. $imageFile); //リサイズなしの場合
        return $fileNameToStore;
    }
}