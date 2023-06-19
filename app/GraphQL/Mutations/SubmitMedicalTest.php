<?php

namespace App\GraphQL\Mutations;

namespace App\Mail;

use Illuminate\Support\Facades\Mail;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class SubmitMedicalTestMutation
{
    public function submitMedicalTest($rootValue, array $args, GraphQLContext $context)
    {
        // Process the medical test submission logic
        $tests       = $args['input']['tests'];
        $otherTests  = $args['input']['otherTests'];
        $patientName = $args['input']['patientName'];

        // Send email
        $data = [
            'username'     => $context->user()->name,
            'tests'        => $tests,
            'other_tests'  => $otherTests,
            'patient_name' => $patientName,
            'footer'       => 'Akande Joshua',
        ];
        Mail::to('homezonic@gmail.com')->send(new MedicalTestDataMail($data));

        return 'Medical test data submitted successfully';
    }
}
