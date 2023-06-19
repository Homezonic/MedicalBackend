<?php

namespace App\GraphQL\Mutations;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

final class SubmitData
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        // $rules = [
        //     'testname'     => 'required|string',
        //     'categoryname' => 'required|string',
        // ];

        // $validator = Validator::make($args, $rules);

        // if ($validator->fails()) {
        //     throw new \InvalidArgumentException($validator->errors()->first());
        // }

        $data = [
            'username'     => $request->user()->name,
            'testname'     => $args['testname'],
            'categoryname' => $args['categoryname'],
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

        return $data;
    }
}
