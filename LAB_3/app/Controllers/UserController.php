<?php

namespace App\Controllers;

use App\Controllers\BaseController;
// use App\UserControllers\mysqli; 

// use App\Model\UserModel;


class UserController extends BaseController
{
 
    public function index()
    {
        return view('login');

    }
    public function adminlogin()
{
    return view('adminlogin');
    return redirect('adminDash');

}
public function signup()
{
    return view('signup');  

}

public function about()
{
    return view('about');  
}
public function contact()
{
    return view('contact');  
}
public function purchase1()
{
    return view('purchase1');  
}
public function purchase2()
{
    return view('purchase2');  
}
public function purchase3()
{
    return view('purchase3');  
}
public function salates()
{
    return view('salates');  
}
public function drinks()
{
    return view('drinks');  
}
public function rice()
{
    return view('rice');  
}
public function chicken()
{
    return view('chicken');  
}
public function menu_1()
{
    return view('menu_1');  
}
public function menu_2()
{
    return view('menu_2');  
}
public function menu_3()
{
    return view('menu_3');  
}
public function order()
{
    return view('order');  
}
}
