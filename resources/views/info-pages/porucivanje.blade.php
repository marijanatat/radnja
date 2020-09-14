@extends('layouts.master') 


@section('content') 

<div>
   @component('components.breadcrumbs')
  <a href="/" class="hover:text-teal-600">Početna strana</a>
  <i class="fa fa-chevron-right breadcrumb-separator"></i>
  <span>Poručivanje</span>
  @endcomponent 
</div>


<div class="container text-gray-700 mx-1 md:mx-3 my-2 text-md xl:text-xl   p-2 md:p-2 w-full">
    <h2 class=" w-full text-gray-700 text-3xl px-5 font-bold leading-none tracking-widest p-4 my-4 ">Poručivanje</h2>
  </div>
        
        <div class="container w-full text-gray-700 text-lg px-5 pb-5 pt-2">
            Kada pronađete proizvod koji želite da kupite, kliknite na njegovu sličicu ili naziv pored, kako biste ušli na stranu sa detaljnim prikazom.
            <ul>
                Na strani sa detaljnim prikazom:
                <li> <i class="fa fa-minus mr-2 text-xs" aria-hidden="true"></i>Možete izabrati koliko komada nekog proizvoda želite da poručite</li>
                <li><i class="fa fa-minus mr-1 text-xs" aria-hidden="true"></i> Označite boju i veličinu koju želite, kao i broj komada koji želite.Ukoliko je to jedan komad nema potrebe da menjate već zadatu količinu.</li>
                <li><i class="fa fa-minus mr-2 text-xs" aria-hidden="true"></i>Kliknite na polje „Dodaj u korpu“ da biste ubacili proizvod u svoju korpu za kupovinu</li>
            </ul>
            
        </div>
        <div class=" container w-full text-gray-700 text-lg px-5 pb-2 pt-2">
            Prikazaće vam se podaci o već naručenom proizvodu. Proizvod u svakom trenutku možete da izbrišete ili sačuvate za kasnije. Imate mogućnost da nastavite kupovinu ili da završite kupovinu.Odaberite željenu opciju:
        </div>
        <div class=" container w-full text-gray-700 text-lg px-5 pb-2 pt-2">
            <ul>
                
                    <li style="flex justify-content-between items-center">
                      
                        <p class=""><span style=""><br>"Nastavi kupovinu“, kada odaberete ovu opciju, možete da nastavite sa poručivanjem. U svakom trenutku klikom na „sadržaj korpe“ možete videti pregled vaše porudžbine. Korpa poseduje opciju da, ukoliko to poželite možete izbaciti proizvod iz nje.<br><br></span></p>
                    </li>
                
        
                    <li style="flex justify-content-between items-center text-gray-700 ">
                     
                        <p class=""><span style=""><br>Ukoliko želite da završite kupovinu stisnite dugme "Završi kupovinu“ . Nakon toga ćete biti preusmereni na stranicu za popunjavanje vaših podataka. Pre nego što odaberete opciju „Naruči“, molimo Vas da još jednom detaljno pregledate celu porudžbinu i vaše podatke.  Poželjno je takođe da u napomenu unesete sve što smatrate potrebnim, da bismo Vam na što kvalitetniji način isporučili robu. 
                           <br><br></span></p>
                    </li>

                    <li style="flex justify-content-between items-center text-gray-700 ">
                    
                        <p class=""><span style=""><br>I na kraju dobićete  stranu sa porukom da je Vaša porudžbina uspešno primljena i mail o vašoj porudžbini.
                           <br><br></span></p>
                    </li>
                </div>
                
            </ul>
            
        
        </div>
        
        
    </div>
    
 @endsection 