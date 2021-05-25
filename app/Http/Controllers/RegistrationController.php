<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Registration;
use Illuminate\Support\Facades\Hash;
class RegistrationController extends Controller
{
    public function registeruser(Request $req){
       $data=$req->input();
       $formvalidation= $req->validate([
            'name' => 'required',
            'email' => 'required',
           
        ]);
    // $rules = [
    //     'name' => 'required',
    //     'email' => 'required',
    //     'password' => 'required',
    //     'phone' => 'required',
    //     'age' => 'required',
    // ];
    // $validator = Validator::make($req->all(),$rules);
    //    echo '<pre>';print_r($formvalidation);die;
        $register=new Registration;
        $register->name=$data['name'];
        $register->email=$data['email'];
        $register->password=Hash::make($data['password']);
        $register->phone=$data['phone'];
        $register->age=$data['age'];
        $insert=$register->save();
        if($insert){
            // echo '<pre>'; print_r(redirect());
            // return redirect()->route('login');
            return redirect('login')->with('status','Register user successfully');
        }else{
            return view('register',['data'=>$formvalidation]);
      }
    }
}
