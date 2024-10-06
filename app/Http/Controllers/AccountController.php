<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AccountController extends Controller
{
    
    //Show admin page
    public function admin(){
        return view('admin');
    }

    //Show add account form
    public function createaccount(){
        return view('admin.create_account');
    }

    //Create and store account
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required', Rule::unique('accounts', 'name')],
            'description' => 'required',
            'price' => 'required'
        ]);

        Account::create($formFields);

        return redirect('/admin/account')->with('message', 'Session added successfully!');
    }

    //Edit account
    public function edit(Account $account){
        return view('admin.edit_account', ['account'=>$account]);
    }

    //Submit to update account
    public function update(Request $request, Account $account){
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        $account->update($formFields);

        return redirect('/admin/account')->with('message', 'Session updated successfully!');
    }

    //Show accounts
    public function account(){
        return view('admin.account', ['accounts'=>Account::latest()]);
    }

    //Delete account
    public function destroy(Account $account){
        $account->delete();

        return back()->with('message', 'Session deleted successfully!');
    }

    //Show single account
    public function show(Account $account){
        return view('listings.show_account', ['account'=>$account]);
    }

}
