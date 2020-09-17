@extends('layouts.master')


@section('content')

<div>
    @component('components.breadcrumbs')
    <a href="/" class="hover:text-teal-600">Početna strana</a>
    <i class="fa fa-chevron-right breadcrumb-separator"></i>
    <span>Otkazivanje</span>
    @endcomponent
</div>



<div class="container text-gray-700 mx-1 md:mx-3 my-2 text-md xl:text-xl p-2 md:p-2 w-full">
    <h2 class="w-full text-gray-700 text-3xl md:ml-48 font-bold leading-none p-4 my-4 "> OTKAZIVANJE PORUDŽBINE
    </h2>
</div>

<div class="w-full container text-gray-700 text-lg px-5 pb-5 pt-2">

    U slučaju odustaka od ugovora, potrošač ima pravo na povraćaj novca ili na zamenu za drugi proizvod.
    Cena robe biće vraćena kupcu nakon što roba bude vraćena u sedište trgovca. Trgovac ima pravo da uskrati vraćanje
    cene ukoliko utvrdi da roba nije u ispravnom stanju, zbog toga što je kupac robom neadekvatno ili nepravilno
    rukovao. Troškovi vraćanja robe padaju na teret kupca. Podaci koje date u ovom obrascu služe za evidentiranje izmena
    u prometu robe i Mobing ih neće upotrebljavati u druge svrhe. Ukoliko se potrošač odluči na zamenu za drugi
    proizvod, ovo pravo može ostvariti u skladu sa Uslovima kupovine istaknutim na sajtu MOB-ING. 
    <br><br>
    OBAVEŠTENJE IZ ČLANA 27. ZAKONA O ZAŠTITI POTROŠAČA: 
    <br><br>
    Potrošač ima pravo da odustane od ugovora zaključenog na daljinu, odnosno izvan
    poslovnih prostorija u roku od 14 dana. Pravo na odustanak potrošač ostvaruje popunjavanjem Obrazca za odustanak i
    slanjem popunjenog obrasca trgovcu u roku od 14 dana od dana prijema robe. U slučaju odustanka potrošač snosi samo
    troškove povraćaja robe.
    <br><br>
    <div class="pb-8">
        <a href="/docs/obrazac-za-odustanak-od-ugovora-na-daljinu.doc" class="hover:text-teal-400">
            <i class="fa fa-file-text-o" aria-hidden="true"></i>
            Obrazac za odustanak od ugovora</a>
    </div>
</div>
<div></div>
{{-- <div class="w-full container text-gray-700 text-lg px-5 pb-5 pt-2">
        Zakon za slučaj prodaje na daljinu ustanovljava pravo kupca, koji se smatra potrošačem (fizičko lice koje proizvod kupuje radi namirenja svojih individualnih potreba, a ne radi obavljanja profesionalne delatnosti), 
        da odustane od ugovora u roku od 14 dana od dana kada mu je proizvod predat. 
        Prilikom odustanka kupac može, ali ne mora da navede razloge zbog kojih odustaje.
        U slučaju odustaka od ugovora, potrošač ima pravo na povraćaj novca ili na zamenu za drugi proizvod.
    
    </div> --}}
{{-- <div class="w-full container text-gray-700 text-lg px-5 pb-5 pt-2">
        Cena se kupcu vraća po prijemu proizvoda, i nakon što se utvrdi da je proizvod neoštećen i ispravan.
        Kupac je u obavezi da zahtev za Odustanak od ugovora pošalje na e-mail adresu info@letoshop.rs ili zajedno sa robom koja je predmet odustajanja od kupovine, sa svim podacima vezano za povrat novca.
        Kupac je dužan da proizvod vrati bez odlaganja, a najkasnije u roku od 14 dana od dana kada je poslao obrazac/izjavu o odustanku koju je prethodno dobio prilikom preuzimanja njegove porudžbine. 
        Po isteku roka od 14 dana od dana kada je prijavio odustanak, proizvod se više ne moze vratiti.
    
    </div> --}}
{{-- <div class="w-full container text-gray-700 text-lg px-5 pb-5 pt-2">
        Prilikom povraćaja robe obavezno je vratiti u ispravnom i nekorišćenom stanju u originalnom neoštećenom pakavanju, pri čemu se mora priložiti račun-otpremnica I popunjen obrazac za odustajanje od kupovine,
koju je kupac prethodno dobio uz porudžbinu radi povrata novca.
Po prijemu proizvoda, utvrdiće se da li je proizvod ispravan i neoštećen. Kupac odgovara za neispravnost ili oštećenje proizvoda koji su rezultat neadekvatnog rukovanja proizvodom, 
tj. kupac je isključivo odgovoran za umanjenu vrednost proizvoda koja nastane kao posledica rukovanja robom na način koji nije adekvatan, odnosno prevazilazi ono što je neophodno da bi se ustanovila njegova priroda, 
karakteristike i funkcionalnost. Ukoliko se utvrdi da je nastupila neispravnost ili oštećenje proizvoda krivicom kupca, odbiće se vraćanje novca i proizvod će mu biti vraćen na njegov trošak.
Trgovac je dužan da potrošaču bez odlaganja vrati iznos koji je potrošač platio po osnovu ugovora, a najkasnije u roku od 14 dana od dana prijema obrasca/izjave o odustanku, a nakon prijema proizvoda.
Troškove vraćanja robe i novca – direktni troškovi, snosi kupac, sem u slučajevima kada kupac dobije neispravan ili pogrešan artikal. 


    </div>
      --}}
</div>
@endsection