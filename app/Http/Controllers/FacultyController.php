<?php

namespace App\Http\Controllers;

use App\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Faculty::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $f = new Faculty($request->all());
        $f->save();

        return $f;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faculty $faculty
     * @return \Illuminate\Http\Response
     */
    public function show($facultyId)
    {

        $result =  Faculty::find($facultyId);
        $result = Faculty::find($facultyId);

        if (!$result) {
            return response()->toJson([
                'message' => 'Record not found',
            ], 404);
        }

        return $result;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faculty $faculty
     * @return \Illuminate\Http\Response
     */
    public function edit(Faculty $faculty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Faculty $faculty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faculty $faculty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faculty $faculty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faculty $faculty)
    {

        Faculty::destroy($faculty);

    }
}
