<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
class ProjectController extends Controller
{
    public function create(){


        $projects = Project::all();

        return view('projects', compact('projects'));
        return view('/projects');
    }

    public function edit(){
        

        return view('/editproject');
    }

    public function project_edit($id){

  $project = Project::find($id);
return view ('project_edit',compact('project'));
    }
public function edit_post(Request $request){
    
    if($request->hasFile('images')&& $request->images->isValid()){
        $extension = $request->images->extension();
        $orgname = $request->images->getClientOriginalName();
        $filename = date('Y_m_d').time().$orgname;
        $request->images->move('public',$filename);


 
        $m =   Project::where('id', $request->id)
        ->update([
       'name' => $request->name,
       'images' => $filename,
       'description' => $request->description,

        
        ]);
        return redirect('/projects');


        }else{
            $m =   Project::where('id', $request->id)
            ->update([
           'name' => $request->name,
           'description' => $request->description,
            
            ]);
            return redirect('/projects');


        }




   
}
    public function store(Request $request){
        if($request->hasFile('images')&& $request->images->isValid()){
            $extension = $request->images->extension();
            $orgname = $request->images->getClientOriginalName();
            $filename = date('Y_m_d').time().$orgname;
            $request->images->move('public',$filename);
            }else{
            $filename = 'no.jpg';
            }
 
        $create = Project::create([
        'name' => $request->name,
         'images' => $filename,
         'description' => $request->description,

        ]);
        return back();

    }

    public function delete($id){
        $delete_post =Project::find($id);
       
            $delete_post->delete();
        return back()->with('success', 'Project deleted successfully');
        
    }
}


