@extends('layouts.mix')

@section('placanje') 

<div class="breadcrumbs">
    <a href="/" class=" text-white font-bold text-xl  ml-16">Home</a>
    <i class="fa fa-chevron-right breadcrumb-separator  text-white  text-s"></i>
    <span class="ml-2 text-blue-800 font-bold text-xl">Plaćanje</span>
</div>

 
    <div class="container ">
        <div class="mx-1 md:mx-5 my-3 text-md xl:text-xl   p-2 md:p-4 w-full">
        <h2 class=" w-full text-blue-800 text-4xl px-5 font-bold leading-none tracking-widest p-4 ">Plaćanje</h2>
        </div>
        
        <div class="w-full text-blue-800 text-2xl px-5 pb-5 pt-2">
            Proizvode koje želite da poručite putem internet prodavnice, možete platiti na više načina:
            <ul>
                <li>1. plaćanje pouzećem gotovinom prilikom preuzimanja pošiljke</li>
                <li> 2. plaćanjem u našem maloprodajnom objektu</li>
                <li>3. plaćanje preko računa</li>
            </ul>
            
        </div>
        <div class="w-full text-blue-800 text-xl px-5 pb-5 pt-2">
            <ul>
                
                    <li style="flex justify-content-between items-center">
                        <h2 class="" style=""><span class="font-black p-2 text-2xl " style=""><i class="fa fa-circle mr-2 text-xs"  aria-hidden="true"></i>Plaćanje pouzećem</span></h2>
                        <p class=""><span style=""><br>Prilikom preuzmanja pošiljke koju ste prethodno poručili putem našeg sajta www.blahblah.rs,plaćanje porudžbine se vrši isključivo u gotovini u dinarskoj valuti,kuriru naše partnerske kurirske službe AKS Express Kurir-Gavrila Principa bb,15000 Šabac,PIB 103575976,MB-17575708 koji Vam donosi pošiljku. <br><br>Ukoliko prilikom preuzimanja pošiljke uočite neke nelogičnosti vezano za iznos plaćanja,molimo kontaktirajte našu Online službu na telefon 063/555-555 ILI 065/347 80 22 ili pošaljite e-mail na info......@gmail.com sa navedenim nejasnoćama. <br><br></span></p>
                    </li>
                
        
                    <li style="flex justify-content-between items-center font-blue-500 ">
                        <h2 class="" style=""><span style="" class="font-black p-2 text-2xl"> <i class="fa fa-circle mr-2 text-xs"  aria-hidden="true"></i>Plaćanje preko računa</span></h2>
                        <p class=""><span style=""><br>Kada odaberete ovaj način plaćanja, molimo vas sačekajte da vas kontaktiramo i pošaljemo vam na mail predračun sa instrukcijama za plaćanje.
                            Možete platiti eBankingom, mBankingom ili odlaskom u poštu ili banku.
                            
                            Prilikom plaćanja molimo vas da navedete ime i prezime na koje ste poručili proizvode, kao i broj porudžbine.<br><br></span></p>
                        </li>
                </div>
                
            </ul>
            
        
        </div>
      
        
    </div>
    
@endsection