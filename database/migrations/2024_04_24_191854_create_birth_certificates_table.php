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
        Schema::create('birth_certificates', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('type')->nullable();
            $table->string('date_applied')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('select_state')->nullable();
            $table->string('relationship')->nullable();
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('lastname')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('record_fname')->nullable();
            $table->string('record_mname')->nullable();
            $table->string('record_lname')->nullable();
            $table->string('record_suffix')->nullable();
            $table->string('flexRadioDefault')->nullable();
            $table->string('city_of_birth')->nullable();
            $table->string('city_zip_code')->nullable();
            $table->string('city_name')->nullable();
            $table->string('attr_month')->nullable();
            $table->string('attr_day')->nullable();
            $table->string('attr_year')->nullable();
            $table->string('parent_fname')->nullable();
            $table->string('parent_mname')->nullable();
            $table->string('parent_lname')->nullable();
            $table->string('parent_listed_fname')->nullable();
            $table->string('parent_listed_mname')->nullable();
            $table->string('parent_listed_lname')->nullable();
            $table->string('parent_listed_suffix')->nullable();
            $table->string('birth_certificate_applying')->nullable();
            $table->string('no_of_copy')->nullable();
            $table->string('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('birth_certificates');
    }
};
