@extends('layouts.master') 


 @section('content') 

 <div class="mt-20 text-gray-700">
    @component('components.breadcrumbs')
   <a href="/">Home</a>
   <i class="fa fa-chevron-right breadcrumb-separator"></i>
   <span>Reklamacije</span>
   @endcomponent 
</div>

<div class="container text-gray-700 mx-1 md:mx-3 my-3 text-md xl:text-xl   p-2 w-full">
    <h2 class=" w-full text-gray-700 text-3xl px-5 font-bold leading-none tracking-widest p-4 my-2 ">Reklamacije</h2>
  </div>
        
        <div class="w-full container text-gray-700 text-lg pt-1">
            Prilikom preuzimanja pošiljke molimo Vas da u prisustvu kurira proverite svoj paket. 
               Ukoliko na njemu ima vidljivih oštećenja (pocepani delovi i ugnječenje) paket ne bi trebalo da preuzmete. 
           U ovom slučaju molimo Vas da nam odmah pošaljete e-mail-a info.mobing@google.com i pozovete 065/555-555  sa:
            <ul>
                <li><i class="fa fa-minus mr-2 text-sm " aria-hidden="true"></i>Brojem primljene Račun-otpremnice</li>
                <li> <i class="fa fa-minus mr-2 text-sm " aria-hidden="true"></i>Imenom i prezimenom</li>
                <li><i class="fa fa-minus mr-2 text-sm" aria-hidden="true"></i>Kontakt telefonom</li>
                <li><i class="fa fa-minus mr-2 text-sm" aria-hidden="true"></i>Razlogom odbijanja pošiljke</li>
            </ul>
            
        </div>
        <div class="w-full container text-gray-700  text-lg">
            <p class=""><span style=""><br> U najkraćem mogućem roku, a najkasnije u roku od 8 dana od dana prijema reklamacije pisanim ili telefonskim putem, odgovorćemo vam na izjavljenu reklamaciju tj. 
                zamenu i obavestićemo Vas o daljem postupanju. Rok za rešavanje reklamacije je 15 dana od trenutka prijave iste (izuzetak su nameštaj i tehnička roba, kada je rok za rešavanje reklamacije 30 radnih dana). <br><br></span></p>
               
                <p class=""><span style=""> Pravo na reklamaciju imate ,od trenutka isporuke pošiljke, u skladu sa Zakonom o zaštiti potrošača (Sl glasnik RS 62/20144)
                    Prilikom evidendiranja Vaše Reklamacije, na mail će Vam biti poslata Dokumentacija vezano za povrat robe koju reklamirate. 
                    U pitanju su dokumenta POVRATNICE ili dokumentacija za POVRAT NOVCA koja će se u našem sistemu voditi pod određenim rednim brojem. 
                    U obavezi ste da navedenu dokumentaciju ištampate, popunite, spakujete sa Račun-otpremnicom i robom koju reklamirate. 
                    Tek kad se pošiljka sa reklamiranom robom vrati, ukoliko je reklamacija odobrena i opravdana, biće Vam  odgovoreno u skladu sa Vašim zahtevom za rešenje Reklamacije:<br><br></span></p>
                   
        
        </div>
        <div class="w-full container text-gray-700  text-lg pb-8 ">
            <h3 class="font-bold">Reklamacije zbog nesaobraznosti robe</h3><br>
            
            <div>Postupak reklamacije proizvoda zbog nesaobraznosti ugovoru, koja se pojavi u roku od dve godine od dana isporuke proizvoda potrošaču, se vrši na način opisan u delu „Uslovi korišćenja i prodaje“.</div>
            <div>Ukoliko se na kupljenom proizvodu pojave neusaglašenosti u smislu odredbi Zakona o zaštiti potrošača, molimo Vas da nas obavestite telefonom ili putem e-maila na info-mobing@shop.rs</div>
        </div>
       
                
        
    </div>
@endsection
    
