<?php

namespace App\GraphQL\Mutations;

namespace App\Mail;

use Illuminate\Support\Facades\Mail;

class MedicalTestMutations
{
    public function submitMedicalTest($rootValue, array $args)
    {
        $tests       = $args['tests'];
        $otherTests  = $args['otherTests'];
        $patientName = $args['patientName'];

        $data = [
            'username'     => 'User',
            'tests'        => $tests,
            'other_tests'  => $otherTests,
            'patient_name' => $patientName,
            'footer'       => 'Akande Joshua',
        ];
        Mail::to('homezonic@gmail.com')->send(new MedicalTestDataMail($data));

        return 'Medical test data submitted successfully';
    }
}
