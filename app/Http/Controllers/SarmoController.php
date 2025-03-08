<?php

namespace App\Http\Controllers;

use App\Models\CreateUser;
use App\Models\Registerfirs;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function store2(Request $request){
        //validation
        $request->validate([
            'fullname'=>'required',
            'gender'=>'required',
            'nuit'=>'required',
            'numberofdocument'=>'required',
            'provinceofbirth'=>'required',
            'districofbirth'=>'required',
            'fullfathername'=>'required',
            'fullmothername'=>'required',
            'birthday'=>'required',
            'admissiondate'=>'required',
            'academiclevel'=>'required',
            'trainingarea'=>'required',
            'phone1'=>'required',
            'phone2'=>'required',
            'document'=>'required',
            'contract'=>'required',
        ]);

        //colecting data for database
        $worker=$request->input('fullname');
        $worker=$request->input('gender');
        $worker=$request->input('nuit');
        $worker=$request->input('numberofdocument');
        $worker=$request->input('provinceofbirth');
        $worker=$request->input('districofbirth');
        $worker=$request->input('fullfathername');
        $worker=$request->input('fullmothername');
        $worker=$request->input('birthday');
        $worker=$request->input('admissiondate');
        $worker=$request->input('academiclevel');
        $worker=$request->input('trainingarea');
        $worker=$request->input('phone1');
        $worker=$request->input('phone2');
        $worker=$request->input('document');
        $worker=$request->input('contract');

        if($worker=$request->file('document')->isValid() && $worker=$request->file('contract')->isValid()){
            $document=$request->file(key: 'document')->store(path: 'documents');
            $contract=$request->file(key: 'contract')->store(path: 'contracts');
            $worker = Registerfirs::create($request->all());

           return redirect()->route('login');
           //dd($worker);
       }
       return redirect()->route('register');
        

        
        
    
}

    public function store1(Request $request){
        //Insert new user data in table usertable
        $request->validate([
            'fullname'=>'required',
            'email'=>'required',
            'phonenumber'=>'required',
            'password'=>'required',
            'confirmpassword'=>'required'


        ]);
        
        $user = $request -> input('fullname');
        $user = $request -> input('email');
        $user = $request -> input('phonenumber');
        $user = Hash::make($request -> input('password'));
        $user = Hash::make($request -> input('confirmpassword'));
        
        if($user = $request -> input('password') == $user = $request -> input('confirmpassword')){
           
            $user = Createuser::create($request->all());
            return redirect()->route('login');
            
        } return redirect()->route('createuser')->with('');

       //return redirect()->route('login');
       //if('password' == 'confirmpassword'){
        //$user = Createuser::create($request->all());
       //}
        
      // $user = Createuser::create($request->all());

       //dd($user);



        
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
