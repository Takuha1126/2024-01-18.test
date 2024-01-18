<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerForm(Request $request){
        return view('register');
    }
    protected function adminValidator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:App\Models\AdminUser'],
            'password' => ['required', 'confirmed'],
        ]);
    }
     protected function registerDatabase(array $data)
    {
        return AdminUser::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        ]);
    }
    public function register(Request $request)
    {
        $this->adminValidator($request->all())->validate();

        $user = $this->adminRegisterDatabase($request->all());

        if ($user) {
            return view('register', ['registered' => true, 'registered_email' => $user->email]);
        }
    }
    
}
