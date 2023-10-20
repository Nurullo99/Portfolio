<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resumes = Resume::all();
        return view('admin.resume.index',compact('resumes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.resume.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => "required",
            'name' => "required",
            'years' => "required",
            'body' => "required",
        ]);

        $requestData = $request->all();
        Resume::create($requestData);
        return redirect()->route('admin.resume.index')->with('success','Resume created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Resume $resume)
    {
        return view('admin.resume.show',compact('resume'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Resume $resume)
    {
        return view('admin.resume.edit',compact('resume'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resume $resume)
    {
        $this->validate($request,[
            'title' => "required",
            'name' => "required",
            'years' => "required",
            'body' => "required",
        ]);
        $requestData = $request->all();
        $resume->update($requestData);
        return redirect()->route('admin.resume.index')->with('success',"Resume update successfuly");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resume $resume)
    {
        $resume->delete();
        return redirect()->route('admin.resume.index')->with('success','Resume deleted successfully!');
    }
}
