<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User as UserEloquent;
use App\Score as ScoreEloquent;

class Student extends Model
{
    protected $table = 'students';

    public function user(){
        return $this->belongsTo(UserEloquent::class);//學生對到使用者，學生屬於一個使用者
    }

    public function score(){
        return $this->hasOne(ScoreEloquent::class);//學生有一個成績
    }
}
