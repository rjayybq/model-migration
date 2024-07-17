<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\SubjectGrade;
use Illuminate\Http\Request;

class StudentContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Select all Student Data
        //return Student::all();

            //AND
        //return Student::where('province','South Carolina')->get();

            //OR
        //return Student::where('province','Georgia')
                  //->orWhere('province', 'Maryland')
                 // ->orWhere('lname', 'Miller' )
                  //->get();

            //Select the Data Where in All start with P
       // return Student::Where('fname', 'like', '%p%')->get();

            //Order Ascending
         // return Student::orderBy('fname')->get();

            //Order Desascending
            //return Student::orderBy('fname', "desc")->get();

            // Limit Student Data
            //return Student::limit(7)->get();

            // Display Odd ID
           // return Student::whereIn('id', [1,3,5,7,9,11])->get();

            //Display Odd Even
            //return Student::whereNotIn('id', [1,3,5,7,9,11])->get();

            //Display the First Student data Province
           // return Student::where('province', 'Georgia')->first();

           
           // For Relationsip
          //  return Student::with('grades')->get();
          //
          return Student::with(['grades' => function($query){
                return $query->where('grade', '>=', 90);
          }])->get();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Display The Student ID
        //return Student::find($id);

        //Display the Fname and Lname
        //$student =  Student::find($id);
        //return $student->fname . ' ' .  $student ->lname;
        //return $student->fullname;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
}
