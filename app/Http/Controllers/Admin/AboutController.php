<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        return view('admin.about.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
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
            'name' => 'required',
            'title'=> 'required',
            'address'=>'required',
            'phone'=>'required',
            'date'=>'required',
            'email'=>'required',
            'body' => 'required',
            'image' => 'required',
       ]);
       $requestData = $request->all();

       if($request->hasFile('image')){
            $file = $request->file('image');
            $image_name = time().'.'.$file->getClientOriginalExtension();
            $file->move('images/',$image_name);
            $requestData['image'] = $image_name;
       }
        About::create($requestData);
       return redirect()->route('admin.about.index')->with('success', 'About created succuessfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        return view('admin.about.show',compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('admin.about.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'title'=> 'required',
            'address'=>'required',
            'phone'=>'required',
            'date'=>'required',
            'email'=>'required',
            'body' => 'required',
            'image' => 'required',
       ]);
        $data = About::findOrFail($id);

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
            'name' => $request->name,
            'title'=> $request->title,
            'body' => $request->body,
            'date' => $request->date,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'image' => $request->image,
        ]);


  
       return redirect()->route('admin.about.index')->with('success',"about update successfuly");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = About::findOrFail($id);
        $path = 'images/'. $data->image;
        if(File::exists($path)) {
            File::delete($path);
        }
        $data->delete();
        return redirect()->route('admin.about.index')->with('success','about deleted successfully!');
    }
}
