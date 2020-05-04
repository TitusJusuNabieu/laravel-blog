<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //
    public function index(){
        $title = 'Welcome to my Laravel Blog';
        // return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
        // return view('pages.index');
    }

    public function about(){
        $title ='Welcome to my About Page';
        return view('pages.about')->with('title',$title);
    }

    public function services(){
        
        $data = array(
            'title' => 'Welcome to my Service Page',
            'services' =>['Wed Development','Web Design','Mobile App Development','Desktop App Development']
        );
        return view('pages.services')->with($data);
    }

    public function welcome(){
        return view('welcome');
    }
}
