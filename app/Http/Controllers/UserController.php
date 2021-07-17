<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){

        $email = $_POST['email'];
        $password = $_POST['password'];

        //$user = new stdClass();

        // $user->email =$email;
        // $user->password = $password;


        //$json = $request->input('json', null);
        //var_dump($json);

        var_dump($email, $password);
        die();
    }
}
