<?php

namespace App\Http\Controllers;

use App;
use Model;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $per_page = Input::get('per_page');

        if ($per_page != null) {            
            $pagination = $per_page;
        } else {
            $pagination = 10;
        }
                
        $students = App\Student::paginate($pagination);
        $count = ($students->currentPage()-1)*$pagination+1;

        if ($per_page != null) {
            $students->appends(['per_page' => $per_page])->render();
        }        

        return view('students.index', ['students' => $students, 'count' => $count, 'per_page' => $per_page]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create([        
            'name' => $request->input('name'),       
            'surname' => $request->input('surname'),    
            'email' => $request->input('email'), 
            'phone' => $request->input('phone'), 
       ]);      
       //  $this->logger->log('new lecture record created');
       return redirect('/students')->with('success', 'The record entered successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
