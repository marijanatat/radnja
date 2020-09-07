@extends('layouts.master') 


 @section('content') 

 <div>
    @component('components.breadcrumbs')
   <a href="/" class="hover:text-teal-600">Početna strana</a>
   <i class="fa fa-chevron-right breadcrumb-separator"></i>
   <span>Privatnost</span>
   @endcomponent 
</div>

<div class="container text-gray-700 mx-1 md:mx-3 my-2 text-md xl:text-xl   p-2 md:p-2 w-full">
    <h2 class=" w-full text-gray-700 text-3xl px-5 font-bold leading-none tracking-widest p-4 my-2 ">Privatnost</h2>
    </div>
        
        <div class="w-full container text-gray-700 text-lg pb-5 pt-2">
            <h2 class="spacer text-xl font-bold text-boja">
                VAŠA PORUDŽBINA JE POTPUNO SIGURNA!
            </h2>

            U kompaniji Mob-ing cenimo Vašu privatnost, zato o Vašim podacima izuzetno pažljivo brinemo. Sve posredovane informacije su sigurne, nećemo ih ni pod kojim uslovima ustupati trećem licu, što Vam osigurava potpuno sigurno i bezbedno poslovanje i saradnju sa kompanijom Mob-ing Odžaci.
            <br><br>
            <div class="spacer font-semibold text-boja">
                Zaštita privatnosti podataka
            </div>
            
            U ime Mob-ing Odžaci, obavezujemo se da ćemo čuvati privatnost svih naših kupaca. Da bismo uspešno obradili Vašu narudžbinu potrebni su nam Vaše ime i prezime, adresa, e-mail i telefon. Uz pomoć tih podataka bićemo u mogućnosti da Vam isporučimo željenu robu, kao i da Vas obavestimo o trenutnom statusu narudžbine. Prikupljamo samo neophodne, osnovne podatke o kupcima/ korisnicima i podatke neophodne za poslovanje i informisanje korisnika u skladu sa dobrim poslovnim običajima i u cilju pružanja kvalitetne usluge. 
           Svi podaci o korisnicima/kupcima se strogo čuvaju i dostupni su samo zaposlenima kojima su ti podaci nužni za obavljanje posla.
            Svi zaposleni u Mobing Odžaci odgovorni su za poštovanje načela zaštite privatnosti.
            
           <div class="spacer"></div>
            <h2 class="text-xl font-bold text-boja">
                SAGLASNOST I PROMENA USLOVA
                
            </h2>
            <br>
             Korišćenje naših servisa podrazumeva saglasnost korisnika sa navedenim uslovima korišćenja. Mob-ing Odžaci se obavezuje da će se pridržavati svega navedenog, a sve promene uslova postaju važeće tek nakon objavljivanja na ovoj stranici.
        </div>
        <div class="w-full container text-gray-700 text-lg pb-5 pt-2">
            {{-- Prikupljeni podaci se dele na lične i opšte infomacije. Mobing kao pružalac usluga internet stranice www.mob-ing.rs ulaže maksimalne napore radi zaštite Vaše privatnosti kad ste "online" kao korisnik. Kako biste lakše razumeli koje informacije prikupljamo i kako koristimo te informacije od Vas se traži da pažljivo pročitate ovu Izjavu. 
       
            <div class="w-full container text-gray-700 text-lg pb-5 pt-2">
            Zadržavamo diskreciono pravo da ovu Izjavu možemo izmeniti u svako doba i da tako izmenjen tekst postaje važeći odmah po objavi istog na internet stranici www.mob-ing.rs. Nastavak Vašeg korišćenja ove Internet stranice nakon izmena, podrazumeva da prihvatate sve uslove tako izmenjene Izjave. Stoga savetujemo korisnike da periodično ponovo detaljno pročitaju informacije sadržane u Izjavi, kako bi bili informisani o eventualnim promenama. 
            </div>
            <div class="w-full container text-gray-700 text-lg pb-5 pt-2">
              ˝Lične informacije˝ su informacije koje određuju tačno pojedinog korisnika. Prilikom korišćenja internet stranica www.mob-ing.rs možemo zahtevati od Vas neke lične informacije za korišćenje određene opcije, kao što su ime i prezime, adresa stanovanja, email adresa, telefonski broj, datum rođenja i sl. Pri korišćenju opcije naručivanja / rezervisanja ponude proizvoda možemo od Vas zahtevati da nam date informacije o broju Vaše kreditne kartice, datum važenja, kod za autorizaciju i druge informacije povezane sa tim. U zavisnosti od opcija koje želite da koristite na internet stranici www.mob-ing.rs neke informacije su određene kao obavezne, a neke kao dobrovoljne. U slučaju da obavezne informacije nisu dostupne za određenu opciju koja ih zahteva, neće Vam biti dozvoljeno korišćenje te opcije.
             <span>Lične informacije koristimo isključivo i samo kako bi Vam ponudili proizvode, unapredili rad internet stranice www.mob-ing.rs, osigurali proveru administrativnih zadataka, uspostavljanje kontakta sa Vama, poboljšali naše oglašivačke i promotivne rezultate i poboljšali našu ponudu proizvoda na tržištu, kao i u svrhu saradnje sa institucijama odgovornih za provođenje zakona. Zadržavamo pravo da Vaše lične informacije prikažemo samo financijskoj instituciji (banci). Yuglob se ograđuje od eventualnog korišćenja ličnih informacija od strane drugih lica u bilo koje druge svrhe od navedene, stoga ne može biti odgovorna za eventualnu štetu.</span>
           </div>

           
        
     
        
    </div> --}}
    {{-- <div class="w-full container  text-gray-700 text-lg pb-5 pt-2  ">
        Korišćenje naših servisa podrazumeva saglasnost korisnika sa navedenim uslovima korišćenja. Mob-ing sztr Odzaci se obavezuje da će se pridržavati svega navedenog, a sve promene uslova postaju važeće tek nakon objavljivanja na ovoj strani i slanja e-mail obaveštenja svim registrovanim korisnicima.
    </div> --}}
   
@endsection
    
