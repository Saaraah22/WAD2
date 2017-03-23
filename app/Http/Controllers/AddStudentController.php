<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AddStudentController extends Controller
{
    /**
     * Show the form to create a new blog post.
     *
     * @return Response
     */
    public function create()
    {
        return view('AddStudent');
    }

    /**
     * Store a new blog post.
     *
     * @param  Request  $request
     * @return Response
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
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
    }
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'full_name' => $data['full_name'],
	        'student_number' => $data['student_number'],
	        'CL1' => $data['CL1'],
	        'CL2' => $data['CL2'],
	        'PE1' => $data['PE1'],
	        'PE2' => $data['PE2'],
	        'BM1' => $data['BM1'],
	        'BM2' => $data['BM2'],
	        'System1' => $data['System1'],
	        'System2' => $data['System2'],
	        'Pagbasa1' => $data['Pagbasa1'],
	        'Pagbasa2' => $data['Pagbasa2'],
	        'IT1' => $data['IT1'],
	        'IT2' => $data['IT2'],
	        'Stat1' => $data['Stat1'],
	        'Stat2' => $data['Stat2'],
	        'Web1' => $data['Web1'],
	        'Web2' => $data['Web1'],
	        'Soc1' => $data['Soc1'],
	        'Soc2' => $data['Soc2'],   
        ]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
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

    }
}
}
