<?php

namespace App\Http\Controllers;

use App\Models\Aimodel;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AimodelController extends Controller
{
    
    //Show admin page
    public function admin(){
        return view('admin');
    }

    //Show add AI model form
    public function create(){
        return view('admin.create_ai');
    }

    //Create and store AI model
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required', Rule::unique('aimodels', 'name')],
            'description' => 'required',
            'price' => 'required'
        ]);

        Aimodel::create($formFields);

        return redirect('/admin/aimodel')->with('message', 'AI Model added successfully!');
    }

    //Edit AI model
    public function edit(Aimodel $aimodel){
        return view('admin.edit_aimodel', ['aimodel'=>$aimodel]);
    }

    //Submit to update AI model
    public function update(Request $request, Aimodel $aimodel){
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        $aimodel->update($formFields);

        return redirect('/admin/aimodel')->with('message', 'AI model updated successfully!');
    }

    //Show AI Models
    public function aimodel(){
        return view('admin.aimodel', ['aimodels'=>Aimodel::latest()]);
    }

    //Delete AI Model
    public function destroy(Aimodel $aimodel){
        $aimodel->delete();

        return back()->with('message', 'AI Model deleted successfully!');
    }

     //Show single AI model
     public function show(Aimodel $aimodel){
        return view('listings.show_aimodel', ['aimodel'=>$aimodel]);
    }
}
