<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class GalleryController extends Controller
{
    public function gallery()
    {
        $projects = Project::get();
        return view('gallery', compact('projects'));
    }
}
