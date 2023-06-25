<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Session;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    //
    public function register(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'phone' => 'required|max:13',
        ]);
  
        if ($validator->fails()){
            return response()->json([
                    "status" => false,
                    "errors" => $validator->errors()
                ]);
        }
        $data = $request->all();

        $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'password' => Hash::make($data['password']),

      ]);
      Auth::login($user);
      return response()->json([
        "status" => true, 
        "redirect" => url("/")
    ]);

      
    }




    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'email' => 'required|email',

            'password' => 'required'

        ]);

  

        if ($validator->fails()){

            return response()->json([

                    "status" => false,

                    "errors" => $validator->errors()

                ]);

        } else {

            if (Auth::attempt($request->only(["email", "password"]))) {

                return response()->json([

                    "status" => true, 

                    "redirect" => url("/")

                ]);

            } else {

                return response()->json([

                    "status" => false,

                    "errors" => ["Invalid credentials"]

                ]);

            }

        }

    
    }
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
