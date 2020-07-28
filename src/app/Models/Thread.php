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
    public function newRecord(array $data): void
    {
        $this->title = $data['title'];
        $this->save();
    }
}
