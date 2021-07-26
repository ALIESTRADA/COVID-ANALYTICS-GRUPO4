<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->integer(country_id);
            $table->varchar(dataRep);
            $table->integer(day);
            $table->integer(month);
            $table->integer(year);
            $table->integer(cases);
            $table->integer(deaths);
            $table->integer(acumulative_number_for_14_days_of_COVID);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entries');
    }
}
