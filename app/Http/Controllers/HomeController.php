<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke()
    {
        return view('index');
    }

}
