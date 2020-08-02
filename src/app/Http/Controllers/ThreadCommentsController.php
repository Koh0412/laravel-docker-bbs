<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadCommentsController extends Controller
{
    public function create(Request $request)
    {
        // 仮
        return redirect()->route('threads.index');
    }

    public function delete()
    {
        //
    }
}
