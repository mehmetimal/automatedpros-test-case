<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest; 
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AutController extends Controller
{
    public function register(RegisterRequest $request){
        try {
            $user = User::create($request->validated());
            return response()->json(['success' => true]);
        } catch (ValidationException $e) {
           
            $errors = $e->errors();

            return response()->json(['errors' => $errors], 422);
        }
    }
    }

