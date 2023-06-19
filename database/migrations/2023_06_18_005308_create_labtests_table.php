<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabtestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labtests', function (Blueprint $table) {
            $table->id();
            $table->string('testname');
            $table->string('categoryname');
        });

        // Now, Let me add default entries for X-ray category
        $xrayDefaultData = [
            ['testname' => 'Chest', 'categoryname' => 'X-ray'],
            ['testname' => 'Lumbo Sacral Vertebrae', 'categoryname' => 'X-ray'],
            ['testname' => 'Shoulder Joint', 'categoryname' => 'X-ray'],
            ['testname' => 'Pelvic Joint', 'categoryname' => 'X-ray'],
            ['testname' => 'Humerus', 'categoryname' => 'X-ray'],
            ['testname' => 'Fingers', 'categoryname' => 'X-ray'],
            ['testname' => 'Toes', 'categoryname' => 'X-ray'],
            ['testname' => 'Radius/Ulner', 'categoryname' => 'X-ray'],
            ['testname' => 'Foot', 'categoryname' => 'X-ray'],
            ['testname' => 'Tibia/Fibula', 'categoryname' => 'X-ray'],
            ['testname' => 'Ankle', 'categoryname' => 'X-ray'],
            ['testname' => 'Femoral', 'categoryname' => 'X-ray'],
            ['testname' => 'Hip Joint', 'categoryname' => 'X-ray'],
            ['testname' => 'Elbow Joint', 'categoryname' => 'X-ray'],
            ['testname' => 'Knee Joint', 'categoryname' => 'X-ray'],
            ['testname' => 'Scar Iliac Joint', 'categoryname' => 'X-ray'],
            ['testname' => 'Thoracic Inlet', 'categoryname' => 'X-ray'],
            ['testname' => 'Wrist Joint', 'categoryname' => 'X-ray'],
            ['testname' => 'Thoracic Lumbar Vertebrae', 'categoryname' => 'X-ray'],
            ['testname' => 'Cervical Vertebrae', 'categoryname' => 'X-ray'],
            ['testname' => 'Thoracic Vertebrae', 'categoryname' => 'X-ray'],
            ['testname' => 'Lumbar Vertebrae', 'categoryname' => 'X-ray'],
        ];

        // Ultrasound category
        $ultrasoundDefaultData = [
            ['testname' => 'Obstetric', 'categoryname' => 'Ultrasound'],
            ['testname' => 'Abdominal', 'categoryname' => 'Ultrasound'],
            ['testname' => 'Pelvis', 'categoryname' => 'Ultrasound'],
            ['testname' => 'Prostate', 'categoryname' => 'Ultrasound'],
            ['testname' => 'Breast', 'categoryname' => 'Ultrasound'],
            ['testname' => 'Thyroid', 'categoryname' => 'Ultrasound'],
        ];

        DB::table('labtests')->insert(array_merge($xrayDefaultData, $ultrasoundDefaultData));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('labtests');
    }
}
