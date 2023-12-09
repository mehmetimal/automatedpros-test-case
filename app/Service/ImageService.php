<?php
namespace App\Service;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ImageService {
public static function getImages(){
   $images = Storage::files(env('IMAGE_PATH'));
   return $images;
}  
  
public static function uploadImage($image){
   try{
      $imageName = Str::random(20) . '.' .$image->getClientOriginalExtension();

      $image->storeAs(env('IMAGE_PATH'), $imageName);
 
      $images = Storage::files(env('IMAGE_PATH'));
      return $images;
   }catch(Exeption $e){
      dd($e->getMessage);
   }
      
}
}

