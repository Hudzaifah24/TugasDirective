<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View;
use Illuminate\Http\Request;

class DirectiveController extends Controller
{
    public function index($id)
    {
        return view('directive', compact('id'));
    }
}
