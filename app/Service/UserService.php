<?php
namespace App\Service;
use App\Models\User;
/**
 * Service For User Operations 
 */
 class UserService {

/**
 * 
 *List All Users   
 */   
public static function getAllUsers(){
    $users = User::all(['name', 'email', 'created_at']);   
     return $users;
}
}

