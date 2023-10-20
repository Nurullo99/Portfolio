<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homes = Home::all();
        return view('admin.home.index',compact('homes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.create');
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
            'name' => "required",
            'title' => "required",
            'image' => "required",
        ]);
        $requestData = $request->all();

        if($request->hasFile('image')){
             $file = $request->file('image');
             $image_name = time().'.'.$file->getClientOriginalExtension();
             $file->move('images/',$image_name);
             $requestData['image'] = $image_name;
        }
         Home::create($requestData);
        return redirect()->route('admin.home.index')->with('success', 'Home created succuessfuly');
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
    public function edit(Home $home)
    {
        return view('admin.home.edit',compact('home'));
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
        $this->validate($request,[
            'name' => "required",
            'title' => "required",
            'image' => "required",
        ]);

        $data = Home::findOrFail($id);

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
            'image' => $request->image,
        ]);
        return redirect()->route('admin.home.index')->with('success',"home update successfuly");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Home::findOrFail($id);
        $path = 'images/'. $data->image;
        if(File::exists($path)) {
            File::delete($path);
        }
        $data->delete();
        return redirect()->route('admin.home.index')->with('success','home deleted successfully!');
    }
}
