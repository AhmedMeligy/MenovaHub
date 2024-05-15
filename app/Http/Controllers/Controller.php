<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index()
{
    $numberOfCards = 3;
    return view('landing', compact('numberOfCards'));
}

}
