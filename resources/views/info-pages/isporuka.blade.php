@extends('layouts.master')


@section('content')

<div>
    @component('components.breadcrumbs')
    <a href="/" class="hover:text-teal-600">Početna strana</a>
    <i class="fa fa-chevron-right breadcrumb-separator"></i>
    <span>Isporuka</span>
    @endcomponent
</div>

<div class="container text-gray-700 mx-1 md:mx-3 my-2 p-2 md:p-2 w-full">
    <h2 class="w-full text-gray-700 text-3xl px-5 font-bold leading-none tracking-widest p-4 my-2">Isporuka</h2>
</div>

<div class="container w-full pb-3 pt-2 text-gray-700 text-lg">
    U zavisnosti od raspoložive količine određenog artikla i mogućnosti njegovog nabavljanja, a u skladu sa našom
    poslovnom politikom, očekivani rok isporuke proizvoda iz naše ponude od 3-5 radnih dana.


</div>
<div class="container w-full text-gray-700 text-lg">
    <div class=""><span style="">SVI PROIZVODI IZ ONLINE PONUDE DOSTUPNI SU ZA PORUČIVANJE, A AKO PAK NEKI MODEL NIJE,
            MOŽEMO VAM PONUDITI ZAMENSKI MODEL SLIČNIH KARAKTERISTIKA!<br><br></span></div>
</div>
<div class="container w-full text-gray-700 pb-4  text-lg">
    *Napomena: Ukoliko Vam je pošiljka stigla oštećena, najbolje je da u roku od 24 sata kontaktirate kurirsku službu
    koja je isporučila paket, kako bi napravili zapisnik. Ukoliko je roba stigla neoštećena, ali je neispravna,
    kontaktirajte nas kako bi Vam poslali zamenu.

    Kuriri pošiljke isporučuju svaki dan od 08 do 17h Prilikom preuzimanja pošiljke potrebno je pregledati paket da li
    slučajno postoje neka oštećenja. Ukoliko primetite da je transportna kutija oštećena u toj meri da je sadržaj
    ostećen ili nekompletan, odbijte prijem pošiljke i odmah nas obavestite telefonom na broj +381 637858499 ili na mail
    mobing.odzaci@outlook.com .Takođe, ukoliko Vam ne odgovara veličina proizvoda takođe nam se javite najkasnije 7 dana
    od prijema pošiljke da bismo se dogovorili o mogućnostima zamene i povrata.

</div>
<br><br>


</div>

@endsection