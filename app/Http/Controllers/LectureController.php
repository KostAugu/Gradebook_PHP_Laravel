<?php

namespace App\Http\Controllers;

use App;
use Model;
use App\Lecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class LectureController extends Controller
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
                
        try {
            $lectures = App\Lecture::sortable()->paginate($pagination);
        } catch (\Kyslik\ColumnSortable\Exceptions\ColumnSortableException $e) {
            dd($e);         //Later
        }

        $count = ($lectures->currentPage()-1)*$pagination+1;

        if ($per_page != null) {
            $lectures->appends(['per_page' => $per_page])->render();
        }        

        return view('lectures.index', ['lectures' => $lectures, 'count' => $count, 'per_page' => $per_page]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lectures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Lecture::create([        
            'name' => $request->input('name'),       
            'description' => $request->input('description')    
       ]);      
       //  $this->logger->log('new lecture record created');
       return redirect('/lectures')->with('success', 'The record entered successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Lecture $lecture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecture $lecture)
    {
        return view('lectures.edit', ["lecture" => $lecture]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lecture $lecture)
    {
        $lecture->name = $request->input('name');
        $lecture->description = $request->input('description');      
        $lecture->save();

        return back()->with('success', 'Record corrected successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecture $lecture)
    {
        $lecture->delete();
        return redirect('/lectures')->with('info', 'Record was deleted!');
    }
}
