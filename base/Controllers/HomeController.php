<?php

class HomeController extends Controller
{
    /*
    * return view
    */
    public function index()
    {
        return $this->view('welcome',["name" => "Cogip"]);
    }
}