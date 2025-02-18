<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function welcome(): View
    {
        return view('welcome');
    }

    public function profile(): View
    {
        return view('profile');
    }

    public function dashboard(): View
    {
        return view('dashboard');
    }

    public function faq(): View
    {
        return view('faq');
    }
}
