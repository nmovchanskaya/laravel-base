<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $group_id)
    {
        return view('student.create', [
            'group_id' => $group_id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student;

        $student->name = $request->name;
        $student->surname = $request->surname;
        $student->group_id = $request->group_id;
        $student->updated_at = time();
        $student->created_at = time();
 
        $student->save();
 
        return redirect('/groups/' . $request->group_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $group_id, string $student_id)
    {
        return view('student.show', [
            'student' => Student::find($student_id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
