<?php

namespace App\GraphQL\Queries;

use App\Models\LabTest;

class LabTestQueries
{
    public function labTests()
    {
        return LabTest::all();
    }

    public function labTestsByCategory($rootValue, array $args)
    {
        $category = $args['category'];
        return LabTest::where('categoryName', $category)->get();
    }
}
