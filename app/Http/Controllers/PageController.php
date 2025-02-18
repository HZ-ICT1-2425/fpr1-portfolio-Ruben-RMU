<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * @return View
     * Shows the home/welcome page
     */
    public function welcome(): View
    {
        return view('welcome');
    }

    /**
     * @return View
     * Shows the about/profile page
     */
    public function profile(): View
    {
        return view('profile');
    }

    /**
     * @return View
     * Shows the dashboard page
     */
    public function dashboard(): View
    {
        return view('dashboard');
    }

    /**
     * @return View
     * Shows the FAQ page
     */
    public function faq(): View
    {
        return view('faq');
    }
}
