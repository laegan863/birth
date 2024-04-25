<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\DeathCertificate;

class DeathCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $type)
    {
        // $data = $request->all();
        // dd($type,$data);

        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'day_of_birth' => 'required|min:1|max:31',
            'month_of_birth' => 'required|string|in:January,February,March,April,May,June,July,August,September,October,November,December',
            'year_of_birth' => 'required|integer|min:1900|max:2100',
            'day_of_death' => 'required|min:1|max:31',
            'month_of_death' => 'required|string|in:January,February,March,April,May,June,July,August,September,October,November,December',
            'year_of_death' => 'required|integer|min:1900|max:2100',
            'city_town_of_death' => 'required|string|max:255',
            'decedent_state_of_death' => 'required|string|max:255',
            'country_of_death' => 'required|string|max:255',
            'decedent_mother_firstname' => 'required|string|max:255',
            'decedent_mother_middlename' => 'required|string|max:255',
            'decedent_mother_lastname' => 'required|string|max:255',
            'decedent_father_firstname' => 'required|string|max:255',
            'decedent_father_middlename' => 'required|string|max:255',
            'decedent_father_lastname' => 'required|string|max:255',
            'contact_firstname' => 'required|string|max:255',
            'contact_middlename' => 'required|string|max:255',
            'contact_lastname' => 'required|string|max:255',
            'ssn' => 'nullable|string|max:255',
            'decedent_gender' => 'required|string|in:Male,Female',
            'type' => 'string|max:255',
            'transaction_id' => 'string|max:255',
        ]);

        do {
            $transaction_id = Str::random(10);
        } while (DeathCertificate::where('transaction_id', $transaction_id)->exists());
        
        $validatedData['type']=$type;
        $validatedData['transaction_id']=$transaction_id;

        // dd($validatedData);

        $store = DeathCertificate::create($validatedData);

        return redirect()->route('home.success', ['trans_id' => $transaction_id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(DeathCertificate $deathCertificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DeathCertificate $deathCertificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DeathCertificate $deathCertificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeathCertificate $deathCertificate)
    {
        //
    }
}
