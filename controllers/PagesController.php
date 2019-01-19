<?php
/**
 * Created by PhpStorm.
 * User: Marzban
 * Date: 1/19/2019
 * Time: 3:31 PM
 */

class PagesController
{
    public function home()
    {


        return view('index');
    }

    public function about()
    {
        $company = 'Laracasts';
        return view('about' , ['company' => $company]);
    }

    public function contact()
    {
        return view('contact');
    }
}