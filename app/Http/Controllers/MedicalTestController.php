<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MedicalTestController extends Controller
{
    public function store(Request $request)
    {
        $rules = [
            'tests'              => 'required|array',
            'tests.xray'         => 'required|array',
            'tests.xray.*'       => 'string',
            'tests.ultrasound'   => 'required|array',
            'tests.ultrasound.*' => 'string',
            'other_tests'        => 'string',
            'patient_name'       => 'required|string',
        ];

        $validatedData = $request->validate($rules);

        $data = [
            'username'     => $request->user()->name,
            'tests'        => $validatedData['tests'],
            'other_tests'  => $validatedData['other_tests'],
            'patient_name' => $validatedData['patient_name'],
            'footer'       => 'Akande Joshua',
        ];

        Mail::send('emails.medical-test', $data, function ($message) use ($request) {
            $message->to('peopleoperations@kompletecare.com,')
                ->subject($request->user()->name . ' medical data');
        });

        return response()->json(['message' => 'Medical test data submitted successfully']);
    }
}
