@component('mail::message')
    
# Potvrda o uspešnoj registraciji na sajtu "Mob-ing online shop"

Poštovani,

uspešno ste završili proces registracije. Vaši podaci za pristup našem sajtu su u nastavku mejla.

**Email adresa:** {{ $user->email }} <br>
**Lozinka:** Lozinka za pristup našem sajtu je ona koju ste uneli prilikom registracije.

@component('mail::button', ['url' => config('app.url'), 'color' => 'green'])
Posetite nas 
@endcomponent

Hvala na poverenju.

Srdačan pozdrav, <br>
{{ config('app.name') }}
@endcomponent