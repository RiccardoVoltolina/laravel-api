<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\NewLeadMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Lead;

class LeadController extends Controller
{
    public function store(Request $request){

        $data = $request->all();

        $new_lead = new Lead();

        $new_lead->fill($data);

        $new_lead->save();

        Mail::to('info@boolpress.com')->send(new NewLeadMail($new_lead));


    }
}
