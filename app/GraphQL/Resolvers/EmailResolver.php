<?php

namespace App\GraphQL\Resolvers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class EmailResolver
{
    public function storeLabTestEmail($root, $args, Request $request)
    {
        // $rules = [
        //     'tests'              => 'required|array',
        //     'tests.xray'         => 'required|array',
        //     'tests.xray.*'       => 'string',
        //     'tests.ultrasound'   => 'required|array',
        //     'tests.ultrasound.*' => 'string',
        //     'other_tests'        => 'string',
        //     'patient_name'       => 'required|string',
        // ];

        // $validator = Validator::make($args, $rules);

        // if ($validator->fails()) {
        //     throw new \InvalidArgumentException($validator->errors()->first());
        // }

        $data = [
            'username'     => $request->user()->name,
            'tests'        => $args['tests'],
            'other_tests'  => $args['other_tests'],
            'patient_name' => $args['patient_name'],
            'footer'       => 'Akande Joshua',
        ];
        try {
            Mail::send('emails.medical-test', $data, function ($message) use ($request) {
                $message->to('homezonic@gmail.com')
                    ->subject($request->user()->name . ' medical data');
            });
        } catch (\Exception $e) {
            throw new \Exception('Failed to send email: ' . $e->getMessage());
        }

        return true;
    }
}
