<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class PagesController extends Controller
{
    public function index(){
    	//return 'Page not found';
    	if(View::exists('pages.index')){
    		return view('pages.index', ['text' => '<b>This is a text</b>']);
    	} else{
    		return 'Page not found';
    	}
    }

    public function profile(){
    	return view('pages.profile');
    }

    public function settings(){
    	return view('pages.settings');
    }

    public function blade(){
        return view('blade.bladetest');
    }
}
