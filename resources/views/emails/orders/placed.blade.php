@component('mail::message')
    
# Potvrda o prijemu porudžbine

Poštovani, Vaša porudžbina je primljena i trenutno je u obradi.
Hvala Vam što kupujete kod nas.

**Broj porudžbe:** {{ $order->id }} <br>
**Email naručioca:** {{ $order->billing_email }} <br>
**Ime naručioca:** {{ $order->billing_name }} <br>
**Iznos:** {{ presentPrice($order->billing_total) }} <br>

**Naručeni proizvodi:**

@foreach ($order->products as $product)
Naziv: {{ $product->name }} <br>
Cena: {{ presentPrice($product->price) }} <br>
Veličina: {{ $product->pivot->size }} <br>
Boja: {{ $product->pivot->color }} <br>
Količina: {{ $product->pivot->quantity }} <br>    
@endforeach


@component('mail::button', ['url' => config('app.url'), 'color' => 'green'])
Posetite naš sajt    
@endcomponent

Hvala na poverenju.

Srdačan pozdrav, <br>
{{ config('app.name') }}
Kneza Mihajla 21 <br>
25250 Odžaci
@endcomponent