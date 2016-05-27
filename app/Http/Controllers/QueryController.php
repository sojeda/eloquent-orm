<?php

namespace App\Http\Controllers;

use App\User;

class QueryController extends Controller
{
    public function eloquentAll()
    {
        $users = User::all();
        $title = 'Todos los usuarios (ALL)';
        return view('query.methods', compact('title', 'users'));
    }

    public function eloquentGet($gender)
    {
        $users = User::where('gender', $gender)->get();
        $title = 'Usuarios utilizando GET';
        return view('query.methods', compact('title', 'users'));
    }

    public function eloquentGetCustom()
    {
        $users = User::where('gender', 'f')->get(['id', 'name', 'biography']);
        $title = 'Utilizando Get Custom - con Array';
        return view('query.methods', compact('title', 'users'));
    }

    public function eloquentDelete($id)
    {
        $user = User::find($id);
        $user->delete();
        return view('query.delete');
    }

    public function eloquentList()
    {
        $users = User::orderBy('name', 'ASC')
            ->lists('name', 'id');
        return view('query.list', compact('users'));
    }

    public function eloquentFirstLast()
    {
        $first = User::first();
        $all   = User::all();
        $last  = $all->last();

        return view('query.first-last', compact('first', 'last'));
    }
}
