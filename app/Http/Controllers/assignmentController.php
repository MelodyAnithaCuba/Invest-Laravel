<?php

namespace App\Http\Controllers;

use App\Http\Requests\assignmentRequest;
use App\Models\assignment;
use Illuminate\Http\Request;

class assignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assignment=assignment::all();
        return response()->json($assignment);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(assignmentRequest $request)
    {
        $assignment=assignment::create($request->all());

        return response()->json([
            'message' =>"record saved successfully!",
            'assignment' =>$assignment
        ],200);
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
    public function update(assignmentRequest $request, assignment $assignment)
    {
        $assignment->update($request->all());

        return response()->json([
            'message'=> "record updated successfully!",
            'assignment' =>$assignment
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(assignment $assignment)
    {
        $assignment->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ],200);
    }
}
