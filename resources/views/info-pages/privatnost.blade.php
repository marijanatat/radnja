@extends('layouts.master') 


 @section('content') 

 <div>
    @component('components.breadcrumbs')
   <a href="/" class="hover:text-teal-600">Početna strana</a>
   <i class="fa fa-chevron-right breadcrumb-separator"></i>
   <span>Privatnost</span>
   @endcomponent 
</div>

<div class="container text-gray-700 mx-1 md:mx-3 my-2 text-md xl:text-xl p-2 md:p-2 w-full">
    <h2 class=" w-full text-gray-700 text-3xl md:ml-48 font-bold leading-none tracking-widest p-4 my-2 ">Privatnost</h2>
    </div>
        
        <div class="w-full container text-gray-700 text-lg px-5 pb-8 pt-2">
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
   
@endsection
    
