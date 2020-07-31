<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    /**
     * スレッド一覧
     *
     * @return View
     */
    public function index(): View
    {
        $threads = Thread::all();
        return view('threads.index', ['threads' => $threads]);
    }

    /**
     * 各スレッドページ
     *
     * @param integer $id
     * @return View
     */
    public function show(int $id): View
    {
        $thread = Thread::find($id);
        return view('threads.show', ['thread' => $thread]);
    }

    /**
     * スレッドの作成
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function create(Request $request): RedirectResponse
    {
        $properties = [
            'title' => $request->title
        ];

        Thread::newRecord($properties);
        return redirect()->route('threads.index');
    }

    public function delete()
    {
        //
    }
}
