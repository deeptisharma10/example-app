<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
    function getName() {
        return '<h1>I am from controller</h1>';
    }



    function getDynamic($name) {
        return "hey $name";
    }

    function getChild($name){
        return "Child $name";
    }

    function getUserView($name){
        // echo "Hello $name";
        return view('getUser', ['name' => $name]);
    }

    function myAdmin($adminName){
        return view('admin.login', ['admin' => $adminName]);
    }
}
