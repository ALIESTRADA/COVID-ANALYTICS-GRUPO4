<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();´
            $table->varchar(dateRep);
            $table->integer(day);
            $table->integer(month);
            $table->integer(year);
            $table->integer(cases);
            $table->integer(deaths);
            $table->varchar(countriesAndTerritories);
            $table->varchar(geoId);
            $table->varchar(countryterritoryCode);
            $table->varchar(popData2019);
            $table->varchar(continentExp);
            $table->varchar(acumulative_number_for_14_days_of_COVID);

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
        Schema::dropIfExists('data');
    }
}
