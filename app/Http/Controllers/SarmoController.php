<?php

namespace App\Http\Controllers;

use App\Models\CreateUser;

use Illuminate\Http\Request;

class SarmoController extends Controller
{
    public function welcome() {
        return view('welcome');
    }
    //for login methods
    public function login (){
        return view('login');
    }

    //for loggedin methods
    public function loggedin() {

        return view('loggedin');
    }
    //for register methods
    public function register() {

        return view('register');

    }
    //for prise or thanks method
    public function prise() {

        return view('prise');
    }

    public function calendar(){
        return view('calendar');
    }

    public function store(){
        return "In bulding";
    }

    public function store1(Request $request){
        //Insert new user data in table usertable
       $user = createuser::create($request->all());

       dd($user);


        
    }

    public function disciplinary_process(){
        return view('disciplinary_process');
    }

    public function appointement(){
        return view('appointement');
    }

    public function delete(){
        return "In bulding";
    }

    public function show(){
        return "In building";
    }

    public function search(){
        return "In building";
    }

    public function createuser(){
        return view('createuser');
    }

    public function recoverpassword(){
        return view('recoverpassword');
    }
}
