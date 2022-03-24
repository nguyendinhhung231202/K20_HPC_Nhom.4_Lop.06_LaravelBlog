<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){

    }
    public function blog(){
        return view('blog');
    }
    public function login(){
        return view ('login');
    }
    public function blogpost(){
        return view('blog-post');
    }
    public function register(){
        return view('register');
    }
    public function getAuthLogin(){
        return view('login');
    }
    public function postAuthLogin(){
        return view('login');
    }

    public function home(){
        return view('home');
    }

    public function login_in(){
        return view('login_in');
    }

    public function userLogin() {
        $email = $_REQUEST["email"];
        $password = $_REQUEST["password"];

           if ($email === "dinhhung231202@gmail.com")
           {
               if ($password ==="hung123") {


                    return ('dăng nhập thành công');

               }else {

                    return ('password sai rồi bn ơi');
               }
           }else {
                    return ('email ko chùng với tài khoản nào !login');
           }
    }

    // public function userLogin() {
    //     $email = $_REQUEST["email"];
    //     $password = $_REQUEST["password"];

    //        if ($email === "dinhhung231202@gmail.com")
    //        {
    //            if ($password ==="hung123") {

    //                 echo "đăng nhập thành công";
    //                 return view('blog-post');

    //            }else {
    //                 echo "password sai rồi bn ơi !";
    //                 return view('login');
    //            }
    //        }else {
    //                 echo "email ko chùng với tài khoản nào !";
    //                 return view('login');
    //        }
    // }

}

