<?php

namespace App\Http\Controllers;
use App\Project;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\DateTimeZone;

class StudentController extends Controller
{
    //
    public function addThesis()
    {
        return view('student.Project.addProject');
    }

    public function saveThesis(Request $request)
    {
        $date = Carbon::now(new \DateTimeZone('Asia/Dhaka'));
        $student_id = Auth::guard('student')->user()->id;
        $student_name = Auth::guard('student')->user()->name;
        DB::table('projects')->insert([
            'student_id'=>$student_id,
            'student_name'=>$student_name,
            'project_title'=>$request->project_title,
            'short_description'=>$request->short_description,
            'abstract'=>$request->abstract,
            'keywords'=>$request->keywords,
            'instruction'=>$request->instruction,
            'link'=>$request->link,
            'created_at' => $date,
            'updated_at' => $date

        ]);

        return redirect()->back()->with('message','You Thesis Successfully Saved To Our Data Base');

    }
    public function manageThesis()
    {
        $student_id = Auth::guard('student')->user()->id;
        $projects = Project::where('student_id',$student_id)->get();
        return view('student.Project.manageProject',['projects'=>$projects]);
    }
    public function editThesis($id)
    {
        $projects = Project::where('id',$id)->get();
        return view('student.Project.editProject',['projects'=>$projects]);
    }
    public function updateThesis(Request $request)
    {
        $date = Carbon::now(new \DateTimeZone('Asia/Dhaka'));
        DB::table('projects')
            ->where('id',$request->id)
            ->update(['project_title'=> $request->project_title,
                'short_description'=> $request->short_description,
                'abstract'=> $request->abstract,
                'keywords' => $request->keywords,
                'instruction' => $request->instruction,
                'link' => $request->link,
                'updated_at' => $date
                ]);
        return redirect()->back()->with('message','Project Info Updated Successfully');
    }
}
