<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VacancyLevel extends Model
{
    private $remainingCount;

    public function __construct(int $remainingCount) {
        $this->remainingCount = $remainingCount;
    }

    public function mark(): string
    {
        if ($this->remainingCount === 0) {
            return '×';
        }
        if ($this->remainingCount < 5) {
            return '△';
        }
        return '◎';
    }

    // マジックメソッド　文字列に変換される際は以下のメソッドを実行
    public function __toString()
    {
        return $this->mark();
    }

}
