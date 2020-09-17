@extends('layouts.master') 


@section('content') 

<div>
   @component('components.breadcrumbs')
  <a href="/" class="hover:text-teal-600">Početna strana</a>
  <i class="fa fa-chevron-right breadcrumb-separator"></i>
  <span>Poručivanje</span>
  @endcomponent 
</div>


<div class="container text-gray-700 mx-1 md:mx-3 my-2 text-md xl:text-xl p-2 w-full">
    <h2 class=" w-full text-gray-700 text-3xl md:ml-48 font-bold leading-none tracking-widest p-4 my-4 "> Politika upotrebe kolačića</h2>
  </div>
        
        <div class="container w-full text-gray-700 text-lg px-5 pb-8 pt-2 min-h-screen">
         
          Ova stranica objašnjava upotrebu kolačića (cookies) na ovom sajtu i politiku privatnosti. Ukoliko nastavite sa korišćenjem ovog sajta, saglasni ste sa našom upotrebom kolačića i politikom privatnosti.
          <br><br>
          <div class="spacer font-semibold">
          Šta su kolačići (cookies)?
          </div>
          Kolačići su male tekstualne datoteke koje se čuvaju u vašem računaru, tabletu, mobilnom uređaju  (zajednički nazvani „računar“), kako biste mogli da optimalno koristite naš sajt. Kolačići čuvaju u vašem računaru malu količinu podataka o vašoj poseti sajtu. Oni koje postavljamo i kojima pristupamo u vašem računaru poznati su kao „kolačići prvog lica“. Kolačiće takođe postavljaju i pristupaju im neki od naših dobavljača – treća lica, pa se oni nazivaju „kolačići trećeg lica“. Kolačići takođe mogu biti „trajni“ ili „sesijski“. 
          <br>
          Trajni kolačići ostaju u vašem računaru ili mobilnom uređaju i kada napustite internet, dok se kolačići sesije brišu čim zatvorite pretraživač.
          
          Postoji mogućnost da izaberete da li prihvatate kolačiće menjanjem postavki u vašem pretraživaču. Međutim, ukoliko blokirate ovu funkciju (ili podesite da ona bude blokirana, što se može učiniti u nekim pretraživačima), nećete steći potpun utisak o sajtu i neke funkcionalnosti možda neće raditi kao što je predviđeno.
          <br><br>
          <div class="spacer font-semibold">
            Kako onemogućiti kolačiće?
          </div>
          
          Vi odlučujete da li želite da sačuvate kolačiće na vašem računaru. Postavke kolačića mogu se kontrolisati i konfigurisati u vašem web pretraživaču.
          
          Isključivanjem kolačića ne dopuštate arhiviranje istih na vlastitom računaru. Podešavanje kolačića se mogu konfigurisati i menjati u izabranom internet pretraživaču. Kako biste videli podešavanja, odaberite pretraživač koji koristite (Chrome, Firefox, Internet Explorer 9, Internet Explorer 7 i 8, Operu ili Safari (stranice na engleskom jeziku)). Ukoliko onemogućite kolačiće, utoliko nećete biti u mogućnosti koristiti određene funkcionalnosti internet stranica.
        </div>
 @endsection 