<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    public function list()
    {
        return view('education.list', [
            'education' => Education::all()
        ]);
    }

    public function addForm()
    {
        return view('education.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'url' => 'nullable|url',
            'content' => 'required',
            'graduated_at' => 'required',
        
        ]);

        $education = new Education();
        $education->title = $attributes['title'];
        $education->url = $attributes['url'];
        $education->content = $attributes['content'];
        $education->graduated_at = $attributes['graduated_at'];
        $education->save();

        return redirect('/console/education/list')
            ->with('message', 'Education has been added!');
    }

    public function editForm(Education $education)
    {
        return view('education.edit', [
            'education' => $education,
        ]);
    }

    public function edit(Education $education)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'url' => 'nullable|url',
            'content' => 'required',
            'graduated_at' => 'required',
       
        ]);

        $education->title = $attributes['title'];
        $education->url = $attributes['url'];
        $education->content = $attributes['content'];
        $education->graduated_at = $attributes['graduated_at'];
    
        $education->save();

        return redirect('/console/education/list')
            ->with('message', 'Education has been edited!');
    }

}
