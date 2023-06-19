<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LabTest extends Model
{
    use HasFactory;

    protected $table    = 'labtests';
    protected $fillable = ['testname', 'categoryname'];
}
