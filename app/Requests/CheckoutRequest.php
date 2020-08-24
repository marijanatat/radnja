<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $emailValidation = auth()->user() ? 'required|email' : 'required|email|unique:users';

        return [
            'email' => $emailValidation,
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'postalcode' => 'required',
            'phone' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.unique' => 'Već imate registrovan nalog sa ovom email adresom. Molimo Vas <a href="/login">prijavite se</a> da bi nastavili proces narudžbe.',
            'email.required' => 'Email adresa je obavezna!',
            'email.email' => 'Morate uneti validnu email adresu!',
            'name.required' => 'Ime i prezime su obavezni!',
            'address.required' => 'Adresa je obavezna!',
            'city.required' => 'Mesto je obavezno!',
            'postalcode.required' => 'Poštanski broj je obavezan!',
            'phone.required' => 'Kontakt telefon je obavezan!',


        ];
    }
}
