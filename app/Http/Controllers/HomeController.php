<?php

namespace App\Http\Controllers;

use App\Project;
use App\Study;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function banglaAbstract()
    {
        return view('fontEnd.Summary.banglaAbstract');
    }
    public function banglaAbstractSummary(Request $request)
    {

        $str = $request->text;
        // print($str);
        $summary=exec("python /media/sujoy/9492D7E092D7C540/Development/Summary/AbstractBengali/execute.py ".escapeshellarg($str));
        return redirect()->back()->with('summary',$summary)->with('text',$str);
    }

    public function banglaExtract()
    {
        return view('fontEnd.Summary.banglaExtract');
    }

    public function banglaExtractSummary(Request $request)
    {

        $str = $request->text;
        //  print($str);
        $summary=exec("python /media/sujoy/9492D7E092D7C540/Development/Summary/ExtractiveBengali/test.py ".escapeshellarg($str));
        // print($j);
        return redirect()->back()->with('summary',$summary)->with('text',$str);
    }



    public function englishAbstract()
    {
        return view('fontEnd.Summary.englishAbstract');
    }

    public function englishSummary(Request $request)
    {

        $str = $request->text;
        // print($str);
        $summary=exec("python /media/sujoy/9492D7E092D7C540/Development/Summary/AbstractEnglish/execute.py ".escapeshellarg($str));
        return redirect()->back()->with('summary',$summary)->with('text',$str);
    }

    public function englishExtract()
    {
        return view('fontEnd.Summary.englishExtract');
    }

    public function englishExtractSummary(Request $request)
    {

        $str = $request->text;
        // print($str);
        $summary=exec("python /media/sujoy/9492D7E092D7C540/Development/Summary/ExtractiveEnglish/summary.py ".escapeshellarg($str));
        return redirect()->back()->with('summary',$summary)->with('text',$str);
    }
    



    public function thesis()
    {
        $projects = Project::all();
        return view('fontEnd.Thesis.thesis',['projects'=>$projects]);
    }

    public function viewThesis($id)
    {
        $viewProject = Project::where('id',$id)->get();
        return view('fontEnd.Thesis.viewThesis',['viewProject'=>$viewProject]);
    }

    public function resource()
    {
        return view('fontEnd.Resource.resource');
    }
    public function viewResource()
    {

    }
    public function contract()
    {
        return view('fontEnd.Contract.contract');
    }
    public function about()
    {
        return view('fontEnd.Contract.about');
    }
    public function sendMessage(Request $request)
    {
        $date = Carbon::now(new \DateTimeZone('Asia/Dhaka'));
        DB::table('comments')->insert([
           'name'=>$request->name,
           'email'=>$request->email,
           'contract'=>$request->contract,
           'message'=>$request->message,
            'created_at'=> $date,
            'updated_at'=> $date
        ]);
        return redirect()->back()->with('message','Message Sent Successfully');
    }

    public function study()
    {
        $study = Study::orderBy('id','desc')->get();
        return view('fontEnd.Study.study',['studies'=>$study]);
    }
    public function viewStudy($id)
    {
        $viewStudy = Study::where('id',$id)->get();
        return view('fontEnd.Study.viewStudy',['viewStudy'=>$viewStudy]);

    }
}
