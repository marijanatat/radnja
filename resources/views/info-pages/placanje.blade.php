@extends('layouts.master') 


 @section('content') 

 <div class="text-gray-700 hover:text-green-900">
    @component('components.breadcrumbs')
   <a href="/">Home</a>
   <i class="fa fa-chevron-right breadcrumb-separator"></i>
   <span>Plaćanje</span>
   @endcomponent 
</div>
      
            
<div class="container text-gray-700 mx-1 md:mx-3 my-2 text-md xl:text-xl   p-2 md:p-2 w-full">
<h2 class=" w-full text-gray-700 text-3xl px-5 font-bold leading-none tracking-widest p-4 my-2 ">Plaćanje</h2>
</div>
        
        <div class=" container w-full text-gray-700 text-lg px-5 pb-5 pt-1">
            Proizvode koje želite da poručite putem internet prodavnice, možete platiti na više načina:
            <ul>
                <li>1. plaćanje pouzećem gotovinom prilikom preuzimanja pošiljke</li>
                <li> 2. plaćanjem u našem maloprodajnom objektu</li>
                <li>3. plaćanje preko računa</li>
            </ul>
            
        </div>
        <div class="container w-full text-gray-700 text-lg px-5 pb-5 pt-2">
            <ul>
                
                    <li style="flex justify-content-between items-center">
                      <h2 class="items-center text-base" style=""><span style="" class="font-black p-2 text-md"> <i class="fa fa-circle mr-2 text-xs"  aria-hidden="true"></i>Plaćanje pouzećem</span></h2>
                        <p class=""><span style=""><br>Prilikom preuzmanja pošiljke koju ste prethodno poručili putem našeg sajta www.mobing.rs,plaćanje porudžbine se vrši isključivo u gotovini u dinarskoj valuti,kuriru naše partnerske kurirske službe koji Vam donosi pošiljku. <br><br>Ukoliko prilikom preuzimanja pošiljke uočite neke nelogičnosti vezano za iznos plaćanja,molimo kontaktirajte nas na telefon 063/555-555 ILI 065/347 80 22 ili pošaljite e-mail na info......@gmail.com sa navedenim nejasnoćama. <br><br></span></p>
                    </li>
                
        
                    <li style="flex justify-content-between items-center text-gray-700 ">
                        <h2 class="items-center text-base" style=""><span style="" class="font-black p-2 text-md"> <i class="fa fa-circle mr-2 text-xs"  aria-hidden="true"></i>Plaćanje preko računa</span></h2>
                        <p class=""><span style=""><br>Kada odaberete ovaj način plaćanja, molimo vas sačekajte da vas kontaktiramo i pošaljemo vam na mail predračun sa instrukcijama za plaćanje.
                            Možete platiti eBankingom, mBankingom ili odlaskom u poštu ili banku.
                            
                            Prilikom plaćanja molimo vas da navedete ime i prezime na koje ste poručili proizvode, kao i broj porudžbine.<br><br></span></p>
                        </li>
                </div>
                
            </ul>
            
        
        </div>
      
        
    </div>
    
@endsection