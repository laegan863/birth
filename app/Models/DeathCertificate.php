<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeathCertificate extends Model
{
    use HasFactory;

    // Define the fillable attributes
    protected $fillable = [
        'transaction_id',
        'first_name',
        'middle_name',
        'last_name',
        'day_of_birth',
        'month_of_birth',
        'year_of_birth',
        'day_of_death',
        'month_of_death',
        'year_of_death',
        'city_town_of_death',
        'decedent_state_of_death',
        'country_of_death',
        'decedent_mother_firstname',
        'decedent_mother_middlename',
        'decedent_mother_lastname',
        'decedent_father_firstname',
        'decedent_father_middlename',
        'decedent_father_lastname',
        'contact_firstname',
        'contact_middlename',
        'contact_lastname',
        'ssn',
        'decedent_gender',
        'type',
    ];
    
}
