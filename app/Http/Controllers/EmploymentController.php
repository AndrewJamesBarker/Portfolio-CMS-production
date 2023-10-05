<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employment;

class EmploymentController extends Controller
{
    public function list()
    {
        return view('employment.list', [
            'employment' => Employment::all()
        ]);
    }

    public function addForm()
    {
        return view('employment.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'employer' => 'required',
            'url' => 'nullable|url',
            'content' => 'required',
            'started_at' => 'required',
            'ended_at' => 'nullable',
        
        ]);

        $employment = new Employment();
        $employment->title = $attributes['title'];
        $employment->employer = $attributes['employer'];
        $employment->url = $attributes['url'];
        $employment->content = $attributes['content'];
        $employment->started_at = $attributes['started_at'];
        $employment->ended_at = $attributes['ended_at'];
        $employment->save();

        return redirect('/console/employment/list')
            ->with('message', 'Employment has been added!');
    }

    public function editForm(Employment $employment)
    {
        return view('employment.edit', [
            'employment' => $employment,
        ]);
    }

    public function edit(Employment $employment)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'employer' => 'required',
            'url' => 'nullable|url',
            'content' => 'required',
            'started_at' => 'required',
            'ended_at' => 'nullable',
       
        ]);

        $employment->title = $attributes['title'];
        $employment->employer = $attributes['employer'];
        $employment->url = $attributes['url'];
        $employment->content = $attributes['content'];
        $employment->started_at = $attributes['started_at'];
        $employment->ended_at = $attributes['ended_at'];
    
        $employment->save();

        return redirect('/console/employment/list')
            ->with('message', 'Employment has been edited!');
    }

    public function delete(Employment $employment)
    {
        $employment->delete();
        
        return redirect('/console/employment/list')
            ->with('message', 'Employment has been deleted!');        
    }
}
