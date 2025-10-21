<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Display the services page
     */
    public function services()
    {
        return view('services');
    }

    /**
     * Display the solutions page
     */
    public function solutions()
    {
        return view('solutions');
    }

    /**
     * Display the maintenance page
     */
    public function maintenance()
    {
        return view('maintenance');
    }

    /**
     * Display the projects page
     */
    public function projects()
    {
        return view('projects');
    }

    /**
     * Display the contact page
     */
    public function contact()
    {
        return view('contact');
    }
}
