<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    /**
     * スレッドコメントへのリレーションを作成
     *
     * @return HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(ThreadComment::class);
    }

    /**
     * 紐づいたスレッドコメントの取得
     *
     * @return Collection
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }
}
