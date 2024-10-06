<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ContactController extends Controller
{
    //Send messages
    public function contact(Request $request){
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('contacts', 'email')],
            'textarea' => 'required'
        ]);

        Contact::create($formFields);

        return redirect('/');
    }

    //Show admin page
    public function admin(){
        return view('admin');
    }

    //Show message
    public function message(){
        return view('admin.message', ['contacts'=>Contact::latest()]);
    }

    //Delete message
    public function destroy(Contact $contact){
        $contact->delete();

        return back()->with('message', 'Message deleted successfully!');
    }

}
