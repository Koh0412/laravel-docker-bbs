<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ThreadComment extends Model
{
    /**
     * 新しいレコードの作成
     *
     * @param array $data
     * @return void
     */
    public static function newRecord(array $data): void
    {
        $threadComment = new ThreadComment();

        $threadComment->name = $data['name'];
        $threadComment->contents = $data['contents'];
        $threadComment->thread_id = $data['thread_id'];

        $threadComment->save();
    }

    /**
     * スレッドへのリレーションを作成
     *
     * @return BelongsTo
     */
    public function thread(): BelongsTo
    {
        return $this->belongsTo(Thread::class);
    }
}
