<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UploadImageRequest; 
use App\Service\ImageService;
class ImageController  extends Controller
{
    public function index(){
        $images = ImageService::getImages(); 
        
        return view('question2.fileUpload', compact('images'));
    }
    public function uploadImage(UploadImageRequest $request){
        try {
            $images = ImageService::uploadImage($request->validated());
            return response()->json(['success' => true,'images'=>$images]);
        } catch (ValidationException $e) {
            $errors = $e->errors();
            return response()->json(['errors' => $errors], 422);
        }
    }
    }

