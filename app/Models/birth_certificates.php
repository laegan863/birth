<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class birth_certificates extends Model
{
    use HasFactory;

    protected $fillable = [
    	'date_applied',
    	'transaction_id',
    	'type',
		'select_state',
		'relationship',
		'firstname',
		'middlename',
		'lastname',
		'phone',
		'email',
		'address_1',
		'address_2',
		'city',
		'state',
		'zip_code',
		'record_fname',
		'record_mname',
		'record_lname',
		'record_suffix',
		'flexRadioDefault',
		'city_of_birth',
		'city_zip_code',
		'city_name',
		'attr_month',
		'attr_day',
		'attr_year',
		'parent_fname',
		'parent_mname',
		'parent_lname',
		'parent_listed_fname',
		'parent_listed_mname',
		'parent_listed_lname',
		'parent_listed_suffix',
		'birth_certificate_applying',
		'no_of_copy',
		'status'
    ];
}
