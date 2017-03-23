<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Grades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('Grades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name', 30);
            $table->Integer('student_number');
            $table->Decimal('CL1');
            $table->Decimal('CL2');
            $table->Decimal('PE1');
            $table->Decimal('PE2');
            $table->Decimal('BM1');
            $table->Decimal('BM2');
            $table->Decimal('System1');
            $table->Decimal('System2');
            $table->Decimal('Pagbasa1');
            $table->Decimal('Pagbasa2');
            $table->Decimal('IT1');
            $table->Decimal('IT2');
            $table->Decimal('Stat1');
            $table->Decimal('Stat2');
            $table->Decimal('Web1');
            $table->Decimal('Web2');
            $table->Decimal('Soc1');
            $table->Decimal('Soc2');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Grades');
    }
}
