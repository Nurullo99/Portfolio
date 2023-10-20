<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'title'=> 'required',
            'name'=> 'required',
            'url' => 'required',
            'image' => 'required',
       ]);
       $requestData = $request->all();

       if($request->hasFile('image')){
        $file = $request->file('image');
        $image_name = time().'.'.$file->getClientOriginalExtension();
        $file->move('images/',$image_name);
        $requestData['image'] = $image_name;
       }

       Project::create($requestData);
       return redirect()->route('admin.projects.index')->with('success', 'Projects created succuessfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.projects.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit',compact('project'));
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
        $request->validate([
            'title'=> 'required',
            'name'=> 'required',
            'url' => 'required',
            'image' => 'required',
       ]);
       $data = Project::findOrFail($id);

        if($request->file('image')) {

            $path = 'images/'. $data->image;
            if(File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('images/', $filename);
            $request->image = $filename;

        }

        $data->update([
            'name'=> $request->name,
            'title'=> $request->title,
            'url' => $request->url,
            'image' => $request->image,
        ]);
       return redirect()->route('admin.projects.index')->with('success','Projects update succuessfuly'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Project::findOrFail($id);
        $path = 'images/'. $data->image;
        if(File::exists($path)) {
            File::delete($path);
        }
        $data->delete();
        return redirect()->route('admin.projects.index')->with('success','projects deleted successfully!');
    }
}
