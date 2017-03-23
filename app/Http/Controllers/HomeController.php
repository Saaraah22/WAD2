<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Grades;
use App\Http\Controllers\HomeController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('welcome');
    }

    public function AddStudent()
    {
        return view('AddStudent');
    }
    public function FinishLog()
    {
        return view('welcome');
    }
    public function StudentRegistered(Request $request)
    {
        $full_name = $request->full_name;
        $student_number = $request->student_number;
      $CL1 = $request->CL1;
       $CL2 = $request->CL2;
       $PE1 = $request->PE1;
       $PE2 = $request->PE2;
       $BM1 = $request->BM1;
       $BM2 = $request->BM2;
       $System1 = $request->System1;
       $System2 = $request->System2;
       $Pagbasa1 = $request->Pagbasa1;
       $Pagbasa2 = $request->Pagbasa2;
       $IT1 = $request->IT1;
       $IT2 = $request->IT2;
       $Stat1 = $request->Stat1;
       $Stat2 = $request->Stat2;
       $Web1 = $request->Web1;
       $Web2 = $request->Web2;
       $Soc1 = $request->Soc1;
       $Soc2 = $request->Soc2;
    
        $student = new Grades; 
      $student->full_name = $full_name;
      $student->student_number = $student_number;
      $student->CL1 = $CL1;
      $student->CL2 = $CL2;
      $student->PE1 = $PE1;
      $student->PE2 = $PE2;
      $student->BM1 = $BM1;
      $student->BM2 = $BM2;
      $student->System1 = $System1;
      $student->System2 = $System2;
      $student->Pagbasa1 = $Pagbasa1;
      $student->Pagbasa2 = $Pagbasa2;
      $student->IT1 = $IT1;
      $student->IT2 = $IT2;
      $student->Stat1 = $Stat1;
      $student->Stat2 = $Stat2;
      $student->Web1 = $Web1;
      $student->Web2 = $Web2;
      $student->Soc1 = $Soc1;
      $student->Soc2 = $Soc2;
      $student->save();

        \Session::flash('flash_message','Student has been added!');
        return redirect('show');
    }
    public function show(){
        $users = Grades::all();
        return view('Show', compact('users'));
    }
    public function editStudent(Request $request, $id){
        $student = Grades::find($id);
        return view('/edit-student', compact('student'));
    }
    public function saveEdit(Request $request){
        $id = $request->id;
        $full_name = $request->full_name;
        $student_number = $request->student_number;
        $CL1 = $request->CL1;
       $CL2 = $request->CL2;
       $PE1 = $request->PE1;
       $PE2 = $request->PE2;
       $BM1 = $request->BM1;
       $BM2 = $request->BM2;
       $System1 = $request->System1;
       $System2 = $request->System2;
       $Pagbasa1 = $request->Pagbasa1;
       $Pagbasa2 = $request->Pagbasa2;
       $IT1 = $request->IT1;
       $IT2 = $request->IT2;
       $Stat1 = $request->Stat1;
       $Stat2 = $request->Stat2;
       $Web1 = $request->Web1;
       $Web2 = $request->Web2;
       $Soc1 = $request->Soc1;
       $Soc2 = $request->Soc2;

        $student = Grades::find($id);
        $student->id = $id;
        $student->full_name = $full_name;
        $student->student_number = $student_number;
        $student->CL1 = $CL1;
      $student->CL2 = $CL2;
      $student->PE1 = $PE1;
      $student->PE2 = $PE2;
      $student->BM1 = $BM1;
      $student->BM2 = $BM2;
      $student->System1 = $System1;
      $student->System2 = $System2;
      $student->Pagbasa1 = $Pagbasa1;
      $student->Pagbasa2 = $Pagbasa2;
      $student->IT1 = $IT1;
      $student->IT2 = $IT2;
      $student->Stat1 = $Stat1;
      $student->Stat2 = $Stat2;
      $student->Web1 = $Web1;
      $student->Web2 = $Web2;
      $student->Soc1 = $Soc1;
      $student->Soc2 = $Soc2;
        $student->save();
        
        //$student = Grades::find($id);
        \Session::flash('flash','Edited successfully');
        return view('View', compact('student'));
    }
    public function view(Request $request, $id)
    {
        $student = Grades::find($id);
        return view('View', compact('student'));
    }
    protected function validator(array $data)
    {
        $validator = Validator::make([
        'full_name' => 'required|max:255',
        'student_number' => 'required',
        'CL1' => 'required|max:2',
        'CL2' => 'required|max:2',
        'PE1' => 'required|max:2',
        'PE2' => 'required|max:2',
        'BM1' => 'required|max:2',
        'BM2' => 'required|max:2',
        'System1' => 'required|max:2',
        'System2' => 'required|max:2',
        'Pagbasa1' => 'required|max:2',
        'Pagbasa2' => 'required|max:2',
        'IT1' => 'required|max:2',
        'IT2' => 'required|max:2',
        'Stat1' => 'required|max:2',
        'Stat2' => 'required|max:2',
        'Web1' => 'required|max:2',
        'Web2' => 'required|max:2',
        'Soc1' => 'required|max:2',
        'Soc2' => 'required|max:2',
        ]);
        $validator->after(function($validator)
{
    if ($this->somethingElseIsInvalid())
    {
        $validator->errors()->add('field', 'Something is wrong with this field!');
    }
});

if ($validator->fails())
{
    //
}
    }

     public function toDelete(Request $request, $id){
        $student = Grades::find($id);
        $student->delete();
        \Session::flash('flash_message','Student has been deleted');
        return redirect('/show');
        
    }

}
 