<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function home()
    {
        return view ('home');
    }
    function register(Request $req)
    {
        if($req->submit=="Register")
        {
            $kc=uniqid().'.'.$req->photo->extension();
            $req->photo->move(public_path("uploads/"),$kc);
            $name=$req->name;
            $email=$req->email;
            $password=$req->password;
            $password = Hash::make($password);
            $mobile=$req->mobile;
            $gender = $req->gender;
            $req->validate([
                'name'=>'required|alpha',
                'email'=>'required|email',
                'mobile'=>'required|min:10|max:10'
            ]);
            $k=new User();
            $k->name=$name;
            $k->email=$email;
            $k->password=$password;
            $k->mobile=$mobile;
            $k->gender=$gender;
            $k->photo=$kc;
            $k->save();


            return redirect('login');
        }
        else
        {
            return view ('register');
        }
    }
    function login(Request $req)
    {
        if($req->submit=="Login")
        {
            $email=$req->email;
            $password = $req->password;
            $k=Auth::attempt(['email' => $email, 'password' => $password]);
            if($k)
            {

                if(Auth::User()->id)
                {
                    return redirect("dashboard");
                }
                // return redirect("dashboard");
            }
            else
            {
                echo "Invalid Login";
            }
        }
        else
        {
            return view ('login');
        }
    }
    function dashboard()
    {
        $data=User::find(Auth::User()->id);
        return view('dashboard',compact('data'));
    }
    function delete($id)
    {
        $k=User::find($id)->delete();
        return redirect("dashboard");
    }
    function edit($id)
    {
        $z = User::find($id);
        return view('edit',compact('z'));
    }
    function update(Request $req)
    {
        $name=$req->name;
        $email=$req->email;
        $mobile=$req->mobile;
        $gender = $req->gender;
        $id = $req->id;
        $k = User::find($id);
        $k->name=$name;
        $k->email=$email;
        $k->mobile=$mobile;
        $k->gender=$gender;
        $k->save();
        return redirect('dashboard');
    }
    function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
