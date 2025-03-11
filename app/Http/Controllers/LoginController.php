<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class LoginController extends Controller
{
        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            return view('login');
        }

        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            //
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
             $request->validate([
            'email'=>'required|email',
             'password'=>'required|min:6'
            ]);

            //$auth = Auth::attempt([
              //  'email'=>$request->email,
            //     'password'=>$request->password
            // ],
          //   [
             //    'email.requerired'=>'Fill email in this field',
                // 'email.email'=>'fill a valid email',
              //   'password.required'=>'Password required',
      //           'password.min'=>'Password must contein :min characters'
         //    ]);

         $user = $request->only('email', 'password');
         $autenteticated = Auth::attempt($user);

        
         

         if(!$autenteticated){
            return redirect()->route('login')->withError(['error'=>'Email or Password wrong!']);
         }
         
         return redirect()->route('register')->with('success', 'register');      
        
        }

        /**
         * Display the specified resource.
         */
        public function show()
        {
            //methods to show on a view workers informations
            $workers = DB::table('workertable')->get();
            

            return view('listworker', ['users' => $workers]);
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(string $id)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, string $id)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(string $id)
        {
            //
        }
}
