<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\main;

class MainPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $main = main::first();
        return view('portfolios.main', compact('main'));
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required | string',
            'sub_title' => 'required | string'
        ]);
        return 'abc';
    }


}
