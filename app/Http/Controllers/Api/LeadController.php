<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\NewLeadMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Lead;
use Illuminate\Support\Facades\Validator;


class LeadController extends Controller
{
    public function store(Request $request)
    {

        // $data = $request->all();

        // $new_lead = new Lead();

        // $new_lead->fill($data);

        // $new_lead->save();

        // Mail::to('info@boolpress.com')->send(new NewLeadMail($new_lead));

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ]);
        }

        $lead = Lead::create($request->all());

        Mail::to($lead->email)->send(new NewLeadMail($lead));


        return response()->json(
            [
                'success' => true,
                'message' => 'Form inviato correttamente!',
            ]
        );
    }
}
