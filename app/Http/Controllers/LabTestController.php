<?php

namespace App\Http\Controllers;

use App\Models\LabTest;

class LabTestController extends Controller
{
    /**
     * Get the list of all lab tests.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $labTests = LabTest::all();

        return response()->json($labTests);
    }

    /**
     * Get the lab tests based on a specific category.
     *
     * @param  string  $category
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function showByCategory($category)
    {
        $labTests = LabTest::where('categoryname', $category)->get();

        return response()->json($labTests);
    }
}
