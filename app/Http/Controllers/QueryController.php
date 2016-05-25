<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;

class QueryController extends Controller
{
    public function getAll()
    {
    	$users = User::all();
    	return view('query.all', compact('users'));
    }
}
