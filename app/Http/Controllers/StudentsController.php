<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests;
use View;
use App\Student as StudentEloquent;

class StudentsController extends Controller
{
    public function getStudentData($student_no){
        $student = StudentEloquent::where('no',$student_no)->firstOrFail();//查詢學生資料表中id欄位等於$student_no的資料，且回傳第一筆不然就失敗。
        return View::make('student',[
            'student' => $student,
            'user' => $student->user,
            'score' => $student->score,
            'subject' => null
        ]);
    }
    public function getStudentScore($student_no,$subject=null){
        $student = StudentEloquent::where('no',$student_no)->firstOrFail();
        return View::make('student',[
            'student' => $student,
            'user' => $student->user,
            'score' => $student->score,
            'subject' => $subject
        ]);
    }
}
