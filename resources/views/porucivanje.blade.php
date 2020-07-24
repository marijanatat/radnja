 @extends('layouts.mix')

@section('porucivanje') 

<div class="breadcrumbs">
    <a href="/" class="ml-16 text-gray-600 font-bold text-xl">Home</a>
    <i class="fa fa-chevron-right breadcrumb-separator  text-gray-600   text-sm"></i>
    <span class="ml-2 text-blue-800 font-bold text-xl">Poručivanje</span>
</div> <!-- end breadcrumbs -->
     {{-- @component('components.breadcrumbs')
    <a href="/">Home</a>
    <i class="fa fa-chevron-right breadcrumb-separator"></i>
    <span>My Order</span>
    @endcomponent  --}}
    <div class="container ">
        <div class="mx-1 md:mx-5 my-3 text-md xl:text-xl   p-2 md:p-4 w-full">
        <h2 class=" w-full text-blue-800 text-4xl px-5 font-bold leading-none tracking-widest p-4">Kako poručiti</h2>
        </div>
        
        <div class="w-full text-blue-800 text-xl  pb-5 pt-2">
            Kada pronađete proizvod koji želite da kupite, kliknite na njegovu sličicu ili naziv pored, kako biste ušli na stranu sa detaljnim prikazom.
            <ul>
                Na strani sa detaljnim prikazom:
                <li> <i class="fa fa-minus mr-2" aria-hidden="true"></i>Možete izabrati koliko komada nekog proizvoda želite da poručite</li>
                <li><i class="fa fa-minus mr-2" aria-hidden="true"></i> Označite boju koju želite, ukoliko željeni artikal ima opciju za dodatni izbor</li>
                <li><i class="fa fa-minus mr-2" aria-hidden="true"></i>Kako bismo smanjili mogućnost greške pri isporuci preporučujemo da u napomenu unesete podatke o odabranoj boji artikla</li>
                <li><i class="fa fa-minus mr-2" aria-hidden="true"></i>Kliknite na polje „Dodaj u korpu“ da biste ubacili proizvod u svoju korpu za kupovinu</li>
            </ul>
            
        </div>
        <div class="w-full text-blue-800 text-xl  pb-5 pt-2">
            Prikazaće vam se formular za poručivanje. Odaberite željenu opciju:
        </div>
        <div class="w-full text-blue-800 text-xl  pb-5 pt-2">
            <ul>
                
                    <li style="flex justify-content-between items-center">
                      
                        <p class=""><span style=""><br>Nastavi kupovinu“, kada odaberete ovu opciju, možete da nastavite sa poručivanjem. U svakom trenutku klikom na „sadržaj korpe“ možete videti pregled vaše porudžbine. Korpa poseduje opciju da, ukoliko to poželite možete izbaciti proizvod iz nje.<br><br></span></p>
                    </li>
                
        
                    <li style="flex justify-content-between items-center font-blue-500 ">
                     
                        <p class=""><span style=""><br>Pre nego što odaberete opciju „Poruči“, molimo Vas da još jednom detaljno pregledate celu porudžbinu. Posle klika na polje „Poruči“, neophodno je da odaberete način plaćanja. Poželjno je takođe da u napomenu unesete sve što smatrate potrebnim, da bismo Vam na što kvalitetniji način isporučili robu. Kada popunite formular, kliknite dugme „Nastavi poručivanje“.
                           <br><br></span></p>
                    </li>

                    <li style="flex justify-content-between items-center font-blue-500 ">
                    
                        <p class=""><span style=""><br>Kada sve proverite, kliknite na polje „Potvrda porudžbine“. Dobićete stranu sa porukom da je Vaša porudžbina uspešno primljena.
                           <br><br></span></p>
                    </li>
                </div>
                
            </ul>
            
        
        </div>
        
        
    </div>
    
 @endsection 