@extends('layouts.mix')

@section('placanje') 

{{-- <div class="breadcrumbs">
    <a href="/" class=" text-white font-bold text-xl  ml-16">Home</a>
    <i class="fa fa-chevron-right breadcrumb-separator  text-white  text-s"></i>
    <span class="ml-2 text-blue-800 font-bold text-xl">Plaćanje</span>
</div> --}}



 
    <div class=" ">
      
        <nav class="flex items-center justify-between flex-wrap  p-6   w-full  pin-t z-10 top-0 mt-0" style="background-color: rgb(13, 194, 185)">
            <div class="block lg:hidden">
              <button id="nav-toggle"
                class="flex items-center px-3 py-2  rounded text-gray-600 font-bold border border-red-900  hover:text-red-700 hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <title>Menu</title>
                  <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
              </button>
            </div>
        
            <div class="w-full flex-grow lg:flex lg:items-end lg:w-auto hidden pt-6 lg:pt-0" id="nav-content">
              <ul class="list-reset lg:flex justify-start flex-1 items-center">
                <li class="mr-3">
                  <a class="inline-block px-2  lg:px-4 py-2 text-white text-lg  lg:text-2xl hover:no-underline no-underline"
                    href="#">Home</a>
                </li>
                <li class="mr-3">
                  <a class="inline-block  px-2  lg:px-4  text-lg  lg:text-2xl no-underline hover:text-gray-800 hover:no-underline  py-2 "
                    href="#" style="color:gray">Shop</a>
                </li>
                <li class="mr-3">
                  <a class="inline-block px-2  lg:px-4  text-gray-500 text-lg  lg:text-2xl no-underline hover:text-gray-200 hover:no-underline py-2 "
                    href="#">About us</a>
                </li>
                <li class="mr-3">
                  <a class="inline-block  px-2  lg:px-4 text-gray-500 text-lg  lg:text-2xl no-underline hover:text-gray-200 hover:no-underline   py-2 "
                    href="#">Projects</a>
                </li>
                <li class="mr-3">
                  <a class="inline-block  px-2  lg:px-4 text-gray-500 text-lg  lg:text-2xl no-underline hover:text-gray-200 hover:no-underline   py-2 "
                    href="#">Contact</a>
                </li>
              </ul>
            </div>
          </nav>
      
            
      <div class="container mx-1 md:mx-5 my-3 text-md xl:text-xl   p-2 md:p-4 w-full">
          <h2 class=" w-full text-blue-800 text-4xl px-5 font-bold leading-none tracking-widest p-4 my-8 ">Plaćanje</h2>
        </div>
        
        <div class=" container w-full text-blue-800 text-2xl px-5 pb-5 pt-2">
            Proizvode koje želite da poručite putem internet prodavnice, možete platiti na više načina:
            <ul>
                <li>1. plaćanje pouzećem gotovinom prilikom preuzimanja pošiljke</li>
                <li> 2. plaćanjem u našem maloprodajnom objektu</li>
                <li>3. plaćanje preko računa</li>
            </ul>
            
        </div>
        <div class="container w-full text-blue-800 text-xl px-5 pb-5 pt-2">
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