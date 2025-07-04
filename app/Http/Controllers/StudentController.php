<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

use DB;

class StudentController extends Controller
{

    public function __construct()
        {
            $this->stu=new Student();
        }

    public function stu_reports()
    {
        $data['students']=DB::table('students')->get();
        $data['users']=DB::table('users')->get();
        return view('admin.stu_reports')->with('data',$data);
    }

    public function add_students()
    {
        return view('admin.action.add_student');
    }

    public function insert_stu(Request $request)
    {
        $data['name'] = $request->input('name');
        $data['mobile_no'] = $request->input('mobile_no');
        $data['email'] = $request->input('email');
        $data['address'] = $request->input('address');

        $id=$this->stu->storeStu($data);

        return redirect('stu_report');
    }

   
}
