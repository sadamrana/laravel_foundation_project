<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Project;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function create(){

        $photos= Photo::all();
        $projects = Project::all();

        

        return view('/upload', compact('photos'));

    }

    public function store(Request $request){
        $size = $request->file('image')->getSize();
        $name = $request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('public/images', $name);
        $photo = new Photo();
        $photo->name= $name;
        $photo->size= $size;
        $photo->save();

        return redirect()->back();
    }
    public function photo_delete($id){

        $photodelete = Photo::find($id);

        $photodelete->delete();
        return back();

    }

    public function edit_photo(){

    }
}
