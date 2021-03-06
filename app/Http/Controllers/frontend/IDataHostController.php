<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IDataHostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dedicatedServer()
    {
        return view('frontend.dedicated-server');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function CloudServer()
    {
        return view('frontend.cloud-server');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function storageServer()
    {
        return view('frontend.storage-server');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function unlimitedHosting()
    {
        return "hi";
    }

    public function webHosting()
    {
        return "hi";
    }

    public function resellerHosting()
    {
        return "hi";
    }

    public function corporateEMailHosting()
    {
        return "hi";
    }

    public function wordpressHosting()
    {
        return "hi";
    }

    public function vpsHosting()
    {
        return "hi";
    }

    public function domain()
    {
         return view('frontend.domain');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
