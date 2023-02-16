<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfoliosController extends Controller
{
    public function index() {
        return view('portfolios.index');
    }
    public function dashboard() {
        return view('portfolios.dashboard');
    }
    public function service() {
        return view('portfolios.service');
    }
    public function portfolio() {
        return view('portfolios.portfolio');
    }
    public function about() {
        return view('portfolios.about');
    }
    public function contact() {
        return view('portfolios.contact');
    }
}
