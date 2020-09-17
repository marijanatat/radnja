@extends('layouts.master') 


 @section('content') 

 <div>
    @component('components.breadcrumbs')
   <a href="/" class="hover:text-teal-600">Početna strana</a>
   <i class="fa fa-chevron-right breadcrumb-separator"></i>
   <span>Reklamacije</span>
   @endcomponent 
</div>

<div class="container text-gray-700 mx-1 md:mx-3 my-3 text-md xl:text-xl   p-2 w-full">
    <h2 class=" w-full text-gray-700 text-3xl md:ml-48 font-bold leading-none tracking-widest p-4 my-2 ">Reklamacije</h2>
  </div>
        
        <div class="w-full container text-gray-700 text-lg pt-1 px-5">
            <h2 class="spacer text-xl font-semibold text-gray-700">
                Reklamacije na oštećenje u transportu
            </h2>

            Veoma je važno da sva oštećenja u transportu, vidjliva na pakovanju proizvoda odmah prijavite kuriru koji vam isporuči robu. Svako oštećenje pri transportu kupac je dužan da prijavi u roku od 24h od prijema robe, pozivom na telefonski broj +381 63 7858499, ili slanjem e-mail-a sa svojim podacima (ime, prezime, telefon) na e-mail mobing.odzaci@outlook.com sa opisom uočenog oštećenja ili manjka delova.
            
            Ukoliko uočite takvo oštećenje, nemojte potpisati prijem pošiljke ili zamolite kurira da sačeka dok proverite da li oštećenje na pakovanju uslovilo i oštećenje samog proizvoda ili gubitak delova. Ukoliko proizvod nije oštećen, i svi delovi su na broju, potpišite prijem pošiljke.
            
            <br>
            <div class="spacer"></div>
            <h2 class="text-xl font-semibold text-gray-700">
                Reklamacije na podatke ili pogrešnu vrstu robe.
            </h2> <br>
            
            Ukoliko ste primili pošiljku i nakon otvaranja kutije ustanovili da isporučena roba neodgovara naručenoj ili podaci na računu nisu odgovarajući, molimo Vas da nas, najkasnije u roku od 24h od trenutka prijema pošiljke, pozovite telefonom na broj +381 63 7858499, ili pošaljete e-mail sa svojim podacima (ime, prezime, telefon) na mobing.odzaci@outlook.com i opišete kakav problem imate.
            
            Prilikom kontakta dogovorićemo se o vraćanju proizvoda putem pošte ili kurirske službe.
            
            U najkraćem mogućem roku, odgovorćemo potrošaču na izjavljenu reklamaciju elektronskim putem (e-mail) tako što ćemo potvrditi prijem reklamacije, odnosno saopštiti broj pod kojim je zavedena Vaša reklamacija u evidenciji primljenih reklamacija i obavestićemo Vas o daljem postupanju.
            <br><br> Rok za odgovor na reklamaciju je 8 dana a za rešavanje reklamacije je 15 dana od trenutka prijave iste.
            
            <br>Reklamacioni list možete preuzeti <a href="./docs/Reklamacioni-list1.xlsx"><span class="font-bold text-boja">ovde</span></a>.
            
            <br>Obrazac za Odustanak od kupovine možete preuzeti <a href="/docs/Izjava-o-odustanku.docx"><span class="text-boja font-bold">ovde</span></a>.
             <div class="spacer"></div>
            {{-- <ul>
                <li><i class="fa fa-minus mr-2 text-sm " aria-hidden="true"></i>Datumom prijema robe</li>
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
        --}}
                
        
    </div>
@endsection
    
