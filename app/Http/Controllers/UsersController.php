<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller {

    public function index(){
    	$data = [
			'0' => [
				'first_name' => 'Jobayer',
				'last_name' => 'Sheikh',
			'	location' => 'Rangpur'
			],
			'1' => [
				'first_name' => 'Jobayer',
				'last_name' => 'Sheikh',
				'location' => 'Rangpur'
			]
		];
		//return $data;
		return view('admin.users.index', compact('data'));
    }

    public function create(){
    	return view('admin.users.create');
    }

    public function store(Request $request){
    	User::create($request -> all());
    	return 'insert sucess';
    	return $request -> all();
    }
}
