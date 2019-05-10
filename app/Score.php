<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student as StudentEloquent;

class Score extends Model
{
    protected $table = 'scores';//建表 表的設定在database\migrations裡

    public function student(){
        return $this->belongsTo(StudentEloquent::class);//成績對使用者，成績屬於一個學生
    }

    public function scopeOrderByTotal($query){
        return $query->orderBy('scores.total', 'DESC');
    }

    public function scopeOrderBySubject($query){
        return $query->orderBy('scores.chinese', 'DESC')
            ->orderBy('scores.english', 'DESC')
            ->orderBy('scores.math', 'DESC');
    }
}
