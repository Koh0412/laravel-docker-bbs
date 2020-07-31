<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{

    /**
     * 新しいレコードの作成
     *
     * @param array $data
     * @return void
     */
    public static function newRecord(array $data): void
    {
        $thread = new Thread();
        $thread->title = $data['title'];
        $thread->save();
    }
}
