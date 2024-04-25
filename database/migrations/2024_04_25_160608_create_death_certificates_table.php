<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('death_certificates', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('transaction_id')->unique();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->integer('day_of_birth');
            $table->string('month_of_birth');
            $table->integer('year_of_birth');
            $table->integer('day_of_death');
            $table->string('month_of_death');
            $table->integer('year_of_death');
            $table->string('city_town_of_death');
            $table->string('decedent_state_of_death');
            $table->string('country_of_death');
            $table->string('decedent_mother_firstname');
            $table->string('decedent_mother_middlename');
            $table->string('decedent_mother_lastname');
            $table->string('decedent_father_firstname');
            $table->string('decedent_father_middlename');
            $table->string('decedent_father_lastname');
            $table->string('contact_firstname');
            $table->string('contact_middlename');
            $table->string('contact_lastname');
            $table->string('ssn');
            $table->string('decedent_gender');
            $table->string('type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('death_certificates');
    }
};
