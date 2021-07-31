<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->fill($request->all());
        $student->save();
        return response('Thêm mới sinh viên thành công',200);
    }

    /**
     * Display the specified resource.
     *

     */
    public function list(Student $student)
    {
        $list = Student::all();
        return view('.list',[
            'list' =>$list
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *

     */
    public function edit($id)
    {
        $detail = Student::find($id);
        return view('edit',[
            'edit' => $detail
        ]);
    }

    /**
     * Update the specified resource in storage.
     *

     */
    public function update(Request $request, Student $student,$id)
    {
        $detail = Student::find($id);
        $detail->update($request->all());
        $detail->save();
        return redirect('/list');
    }

    /**
     * Remove the specified resource from storage.
     *

     */
    public function destroy($id)
    {
        $detail = Student::find($id);
        $detail->delete();
        return redirect('/list');
    }
}
