<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Writingaccount;
use Illuminate\Validation\Rule;

class WritingaccountController extends Controller
{

    //Show admin page
    public function admin(){
        return view('admin');
    }

    //Show add writingaccount form
    public function create(){
        return view('admin.create_writingaccount');
    }

    //Create and store account
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required', Rule::unique('writingaccounts', 'name')],
            'description' => 'required',
            'price' => 'required'
        ]);

        Writingaccount::create($formFields);

        return redirect('/admin/writingaccount')->with('message', 'Account added successfully!');
    }

    //Edit writing account
    public function edit(Writingaccount $writingaccount){
        return view('admin.edit_writingaccount', ['writingaccount'=>$writingaccount]);
    }

    //Submit to update writing account
    public function update(Request $request, Writingaccount $writingaccount){
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        $writingaccount->update($formFields);

        return redirect('/admin/writingaccount')->with('message', 'Account updated successfully!');
    }

    //Show Writing Accounts
    public function writingaccount(){
        return view('admin.writingaccount', ['writingaccounts'=>Writingaccount::latest()]);
    }

    //Delete writing account
    public function destroy(Writingaccount $writingaccount){
        $writingaccount->delete();

        return back()->with('message', 'Account deleted successfully!');
    }

     //Show single writing account
     public function show(Writingaccount $writingaccount){
        return view('listings.show_writingaccount', ['writingaccount'=>$writingaccount]);
    }
}
