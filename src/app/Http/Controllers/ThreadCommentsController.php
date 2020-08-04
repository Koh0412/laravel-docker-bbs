<?php

namespace App\Http\Controllers;

use App\Models\ThreadComment;
use Illuminate\Http\Request;

class ThreadCommentsController extends Controller
{
    public function create(Request $request)
    {
        // 仮
        $properties = [
            'name' => $request->name,
            'contents' => $request->contents,
            'thread_id' => $this->getUrlParameter('id'),
        ];
        ThreadComment::newRecord($properties);
        return redirect()->route('threads.index');
    }

    public function delete()
    {
        //
    }
}
