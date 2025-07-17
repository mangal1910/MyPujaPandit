<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        return view("welcome");
    }

    function services()
    {
        return view("services");
    }
    function shop()
    {
        return view("shop");
    }
    function about() {
        return view("about");
    }
    function blog() {
        return view("blog");
    }
    function contact() {
        return view("contact");
    }
    function login() {
        return view("login");
    }
    function register() {
        return view("register");
    }
    function adminlogin() {
        return view("adminlogin");
    }

    function panditlogin() {
        return view("panditlogin");
    }
    function panditregister() {
        return view("panditregister");
    }
}
