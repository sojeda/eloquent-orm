<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;

class QueryController extends Controller
{
    public function eloquentAll()
    {
    	$users = User::all();
    	$title = 'Todos los usuarios (ALL)';
    	return view('query.methods', compact('title','users'));
    }

    public function eloquentGet($gender)
    {
    	$users = User::where('gender',$gender)->get();
    	$title = 'Usuarios utilizando GET';
    	return view('query.methods', compact('title','users'));
    }
}
