<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EditRequest;
use App\Student as StudentEloquent;
use View;
use Validator;
use Auth;

class SchoolController extends Controller
{
    public function edit(){
        // $student_no
        // $student = StudentEloquent::where('no',$student_no)->firstOrFail();
        return View::make('edit');
    }

    public function update(EditRequest $request){
        $user = Auth::user();
        $user->name = $request->name;
        $user->student->tel = $request->tel;
        $user->student->save();

        return View::make('edit',[
            'msg'=>'修改成功'
        ]);
    }
    
}
