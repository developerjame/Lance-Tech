<?php

namespace App\Http\Controllers;

use App\Models\Moderation;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ModerationController extends Controller
{

    //Show admin page
    public function admin(){
        return view('admin');
    }

    //Show add moderation form
    public function create(){
        return view('admin.create_moderation');
    }

    //Create and store moderation
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required', Rule::unique('moderations', 'name')],
            'description' => 'required',
            'price' => 'required'
        ]);

        Moderation::create($formFields);

        return redirect('/admin/moderation')->with('message', 'Account added successfully!');
    }

    //Edit moderation
    public function edit(Moderation $moderation){
        return view('admin.edit_moderation', ['moderation'=>$moderation]);
    }

    //Submit to update moderation
    public function update(Request $request, Moderation $moderation){
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        $moderation->update($formFields);

        return redirect('/admin/moderation')->with('message', 'Account updated successfully!');
    }

    //Show moderations
    public function moderation(){
        return view('admin.moderation', ['moderations'=>Moderation::latest()]);
    }

    //Delete moderation
    public function destroy(Moderation $moderation){
        $moderation->delete();

        return back()->with('message', 'Account deleted successfully!');
    }

     //Show single chat moderation account
     public function show(Moderation $moderation){
        return view('listings.show_moderation', ['moderation'=>$moderation]);
    }
}
