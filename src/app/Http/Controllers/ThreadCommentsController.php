<?php

namespace App\Http\Controllers;

use App\Models\ThreadComment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ThreadCommentsController extends Controller
{
    /**
     * スレッドコメントの作成
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function create(Request $request): RedirectResponse
    {
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
