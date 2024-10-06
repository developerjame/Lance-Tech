<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Aimodel;
use App\Models\Contact;
use App\Models\Moderation;
use App\Models\Subscription;
use App\Models\Writingaccount;

class TableCountController extends Controller
{
    public function countRows(){
        $count1 = Contact::count();
        $count2 = Subscription::count();
        $count3 = Account::count();
        $count4 = Aimodel::count();
        $count5 = Moderation::count();
        $count6 = Writingaccount::count();

        return view('admin', compact('count1', 'count2', 'count3', 'count4', 'count5', 'count6'));
    }
}
