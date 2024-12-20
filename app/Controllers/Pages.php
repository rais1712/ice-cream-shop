<?php

namespace App\Controllers;
use App\Models\IceCreamModel;

class Pages extends BaseController
{
    public function loginPage()
    {
        return view('login');
    }

    public function aboutPage()
    {
        return view('about');
    }

    public function contactPage()
    {
        return view('contact');
    }

    public function homePage()
    {
        return view('home');
    }

    public function orderPage()
    {
        return redirect()->to('http://localhost:8080/home');
    }

    public function productPage()
    {
        return view('product');
    }

    public function registerPage()
    {
        return view('register');
    }
}
