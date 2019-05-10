<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EditRequest;
use App\Student as StudentEloquent;
use View;
use Validator;

class SchoolController extends Controller
{
    public function edit($student_no){
        $student = StudentEloquent::where('no',$student_no)->firstOrFail();
        return View::make('edit',compact('student'));
    }

    public function update($student_no,EditRequest $request){
        $student = StudentEloquent::where('no',$student_no)->firstOrFail();
        $student->tel = $request->tel;
        $student->user->name = $request->name;
        $student->user->save();
        $student->save();

        return View::make('edit',[
            'student'=>$student,
            'msg'=>'修改成功'
        ]);
    }
    
}
