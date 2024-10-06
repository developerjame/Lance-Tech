<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SubscriptionController extends Controller
{
    //Create subscription
    public function subscribe(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email', Rule::unique('subscription', 'email')]
        ]);

        Subscription::create($formFields);

        return redirect('/');
    }

    //Show subscriptions
    public function subscription(){
        return view('admin.subscription', ['subscriptions'=>Subscription::latest()]);
    }

}
