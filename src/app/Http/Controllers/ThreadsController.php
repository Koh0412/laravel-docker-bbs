<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    public function index()
    {
        return view('threads.index');
    }

    public function show(int $id)
    {
        return view('threads.show', ['id' => $id]);
    }

    public function create()
    {
        //
    }

    public function delete()
    {
        //
    }
}
