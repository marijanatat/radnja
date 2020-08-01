@extends('layouts.master') 


 @section('content') 

 <div class="text-gray-700 hover:text-green-900">
    @component('components.breadcrumbs')
   <a href="/">Home</a>
   <i class="fa fa-chevron-right breadcrumb-separator"></i>
   <span>Isporuka</span>
   @endcomponent 
</div>

<div class="container text-gray-700 mx-1 md:mx-3 my-2   p-2 md:p-2 w-full">
    <h2 class="w-full text-gray-700 text-3xl px-5 font-bold leading-none tracking-widest p-4 my-2 ">Isporuka</h2>
  </div>
        
        <div class= "container w-full   pb-3 pt-2 text-gray-700">
            U zavisnosti od raspoložive količine određenog artikla i mogućnosti njegovog nabavljanja, a u skladu sa našom poslovnom politikom, očekivani rok isporuke proizvoda iz naše ponude je 72h (do 3 radna dana). Artikle za kojima potražnja nije toliko učestala, kao i one kod kojih je uvozni proces komplikovaniji, na svojoj adresi možete očekivati sa nešto dužim rokom isporuke. 
           
     
        </div>
        <div class="container w-full text-gray-700">
            <p class=""><span style=""> SVI PROIZVODI IZ ONLINE PONUDE DOSTUPNI SU ZA PORUČIVANJE, A AKO PAK NEKI MODEL NIJE, MOŽEMO VAM PONUDITI ZAMENSKI MODEL SLIČNIH KARAKTERISTIKA!<br><br></span></p>
               
                <p class=""><span style=""> Ne morate da brinete da li proizvod koji želite imamo na stanju. Sve što je u ponudi u mogućnosti smo da isporučimo saglasno očekivanom roku isporuke naznačenom uz svaki proizvod. Ponuda i cene na našem sajtu ažurni su na dnevnom nivou. Na Vama je samo da odaberete, poručite i sačekate kurira za par dana na svojim vratima. Mogućnost greške, nažalost, ne možemo isključiti. Ali ukoliko do iste dođe, najkasnije u roku od 24h bićete kontaktirani od strane naših komercijalista i dobiti informaciju o nastaloj grešci. U suprotnom, poručene proizvode dobićete na svojoj adresi saglasno rokovima isporuke naznačenim uz njih.<br><br></span></p>
                   
        
        </div>
        <div class="container w-full text-gray-700 pb-4 ">
            *Napomena: Ukoliko Vam je pošiljka stigla oštećena, najbolje je da u roku od 24 sata kontaktirate kurirsku službu koja je isporučila paket, kako bi napravili zapisnik. Ukoliko je roba stigla neoštećena, ali je neispravna, kontaktirajte nas kako bi Vam poslali zamenu.

            Kuriri pošiljke isporučuju svaki dan od 08 do 17h. Nedeljom i praznicima ne vrše isporuku. Prilikom preuzimanja pošiljke potrebno je pregledati paket da li slučajno postoje neka oštećenja. Ukoliko primetite da je transportna kutija oštećena u toj meri da je sadržaj ostećen ili nekompletan, odbijte prijem pošiljke i odmah nas obavestite telefonom na broj +381 27 8150080 Ukoliko paket nije oštećen preuzmite pošiljku i platite iznos računa uvećan za troškove dostave.
           
        </div>
       
                
     
    </div>
    
@endsection