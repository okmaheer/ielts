<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('teeth');
        Schema::dropIfExists('teeth_quadrant');
        Schema::dropIfExists('teeth_number');
        Schema::dropIfExists('notes');
        Schema::dropIfExists('complaint_types');


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
    }
};
