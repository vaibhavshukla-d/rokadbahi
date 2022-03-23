<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */


    public function create(array $input)
    {
        Validator::make($input, [
            'type_of_customer' => [ 'string', 'max:255'],
            'type_of_business' => ['string', 'max:255'],
            'gender' => ['string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],

            'phone_no' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'landline_no' => ['string', 'max:255'],
            'pincode' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],

            'last_name' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'Date'],
            'pan_no' => ['required', 'string', 'max:255'],
            'gst_no' => ['required', 'string', 'max:255'],
            'company_name' => ['required', 'string', 'max:255'],
            'pf_number' => ['string', 'max:255'],
            'father_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'type_of_customer' => $input['type_of_customer'],
            'type_of_business' => $input['type_of_business'],
            'gender' => $input['gender'],
            'name' => $input['name'],

            'phone_no' => $input['phone_no'],
            'address' => $input['address'],
            'landline_no' => $input['landline_no'],
            'pincode' => $input['pincode'],
            'city' => $input['city'],
            'country' => $input['country'],
            'state' => $input['state'],


            'last_name' => $input['last_name'],
            'date_of_birth' => $input['date_of_birth'],
            'pan_no' => $input['pan_no'],
            'gst_no' => $input['gst_no'],
            'company_name' => $input['company_name'],
            'pf_number' => $input['pf_number'],
            'father_name' => $input['father_name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
