<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;
use View;
use App\Score as ScoreEloquent;

class BoardController extends Controller
{
    public function getIndex(){
        return View::make('board',[
            'score'=>ScoreEloquent::with('student')
                ->orderByTotal()
                ->orderBySubject()
                ->get()
        ]);
    }
    public function getName(){
        return Route::currentRouteAction();
    }
}
