<?php

namespace App\Http\Controllers;

use App\Project;
use App\Student;
use App\Study;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function manageStudent()
    {
        $student = Student::all();
        return view('admin.Student.manageStudent',['students'=>$student]);

    }

    public function approveStudent($id)
    {
        DB::table('students')
            ->where('id',$id)
            ->update(['status'=> '1']);
        return redirect()->back();
//        ->with('message','You have Approved a New Students');
    }
    public function blockStudent($id)
    {
        DB::table('students')
            ->where('id',$id)
            ->update(['status'=> '0']);
        return redirect()->back();
//        ->with('message','You have Blocked Students');
    }
    public function deleteStudent($id)
    {
        DB::table('students')
            ->where('id',$id)
            ->delete();
        return redirect()->back()->with('message','You have Remove a Student');
    }

    public function studentResource()
    {
        $project = Project::all();
        return view('admin.Student.studentResource',['projects'=>$project]);

    }
    public function publishStudentResource($id)
    {
        DB::table('projects')
            ->where('id',$id)
            ->update(['status'=> '1']);
        return redirect()->back();
//        ->with('message','You have Approved a New Students');
    }
    public function unPublishStudentResource($id)
    {
        DB::table('projects')
            ->where('id',$id)
            ->update(['status'=> '0']);
        return redirect()->back();
//        ->with('message','You have Approved a New Students');
    }

    public function viewStudentResource($id)
    {
        $project = Project::where('id',$id)->get();
        return view('admin.Student.viewProject',['projects'=>$project]);
    }

    public function addStudyPost()
    {
        return view('admin.Study.addPost');
    }
    public function saveStudyPost(Request $request)
    {
        $date = Carbon::now(new \DateTimeZone('Asia/Dhaka'));
        DB::table('studies')->insert([
            'topic_title'=>$request->topic_title,
            'tag'=>$request->tag,
            'description'=>$request->description,
            'created_at' => $date,
            'updated_at' => $date

        ]);

        return redirect()->back()->with('message','Study Post Successfully Saved');

    }

    public function manageStudyPost()
    {
        $posts = Study::all();
        return view('admin.Study.managePost',['posts'=>$posts]);

    }

    public function editStudyPost($id)
    {
        $posts = Study::where('id',$id)->get();
        return view('admin.Study.editPost',['posts'=>$posts]);
    }

    public function updateStudyPost(Request $request)
    {
        $date = Carbon::now(new \DateTimeZone('Asia/Dhaka'));
        DB::table('studies')
            ->where('id',$request->id)
            ->update(['topic_title'=> $request->topic_title,
                'tag'=> $request->tag,
                'description' => $request->description,
                'updated_at' => $date
            ]);
        return redirect()->back()->with('message','Study Topic Updated Successfully');
    }

    public function deleteStudyPost($id)
    {
        Study::where('id',$id)->detete();
       return redirect()->back()->with('Post Deleted Successfully');
    }
}
