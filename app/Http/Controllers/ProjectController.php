<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{

    public function __construct(){
        $this->middleware('admin.master' , ['except' => ['show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(20);
        return view('admin.project.index' , ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
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
            'before' => 'required|file|image|max:1024',
            'after' => 'required|file|image|max:1024',
            'title' => 'required|string',
            'client' => 'required|string',
            'about' => 'required|string|min:30'
        ]);
        
        $before_path = $request->file('before')->store('projects' , 'wood_uploads');
        $after_path = $request->file('after')->store('projects' , 'wood_uploads');

        Project::create([
            'before_path' => $before_path,
            'after_path' => $after_path,
            'title' => $request->title,
            'client' => $request->title,
            'about' => $request->about
        ]);

        return redirect()->route('projects.create')->with('status' , 'project uploaded successfully to the gallery');
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
    public function edit(Project $project)
    {
        return view('admin.project.edit', ['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'before' => 'sometimes|file|image|max:1024',
            'after' => 'sometimes|file|image|max:1024',
            'title' => 'required|string',
            'client' => 'required|string',
            'about' => 'required|string|min:30'
        ]);

        $prevBeforePath = $project->before_path;
        $prevAfterPath = $project->after_path; 

        if($request->hasFile('before')){
            $project->before_path = $request->file('before')->store('projects' , 'wood_uploads');
        }

        if($request->hasFile('after')){
            $project->after_path = $request->file('after')->store('projects' , 'wood_uploads');
        }

        $project->title = $request->title;
        $project->client = $request->client;
        $project->about = $request->about;

        $project->save();


        if($project->wasChanged('before_path')){
            Storage::disk('wood_uploads')->delete($prevBeforePath);
        }

        if($project->wasChanged('after_path')){
            Storage::disk('wood_uploads')->delete($prevAfterPath);
        }
        
        if(!$project->wasChanged()){
            return redirect()->route('projects.edit' , ['project' => $project->id])->with('noUpdate' , 'you changed nothing');
        }

        return redirect()->route('projects.edit' , ['project' => $project->id])->with('status' , 'project updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        Storage::disk('wood_uploads')->delete($project->before_path);
        Storage::disk('wood_uploads')->delete($project->after_path);
        $project->delete();
        return redirect()->route('projects.index')->with('status' , 'project deleted');
    }
}
