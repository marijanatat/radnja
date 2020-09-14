@extends('layouts.master') 


@section('content') 

<div class="">
   @component('components.breadcrumbs')
  <a href="/" class="hover:text-teal-600">Početna strana</a>
  <i class="fa fa-chevron-right breadcrumb-separator"></i>
  <span>O nama</span>
  @endcomponent 
</div>

 
<div class="container">
   

    <div class="mb-2 text-gray-700 text-lg px-5 pb-8">
        <br>
        <p>Naša radnja se nalazi u Odžacima. Mi smo već 11 godina tu za vas. Negujemo domaći kvalitet i pristupačne cene za celu porodicu.
            Mi imamo stalne mušterije koje nam veruje i koje nam se uvek vraćaju. <br></p>
         <br>
         Bićemo tu još dugo.</p>
         <br>
         <p>Ukoliko imate neko pitanje za nas ili želite da poručite neki od naših proizvoda slobodno nas kontaktirajte na naše brojeve telefona ili na email <a  href="mailto:mobing.odzaci@outlook.com" class="font-semibold italic text-boja ">mobing.odzaci@outlook.com</a>.</p>
         <br>
         <h2 class="text-2xl font-semibold">Podaci o firmi</h2>
         <div class="spacer"></div>

          <span class="font-semibold">Naziv: </span><span class="font-bold text-boja">MOB-ING</span> <br>
          <span class="font-semibold">Vlasnik:</span> <span class="text-boja">Vladimir Radosavljević </span><br>
          <span class="font-semibold">Adresa:</span> <span class="text-boja">Knez Mihajlova 21, 25250 Odžaci </span><br>
          <span class="font-semibold">Matični broj: </span><span class="text-boja">61547690</span> <br>
          <span class="font-semibold">PIB:</span> <span class="text-boja">106223247</span> <br>
          <span class="font-semibold">Telefon:</span> <span class="text-boja">0637858499</span>
    </div>
      <div class="pb-4 hidden md:block">
        <iframe src="https://maps.google.com/maps?q=Kneza%20Mihaila%2021%2C%20%D0%9E%D1%9F%D0%B0%D1%86%D0%B8&t=&z=17&ie=UTF8&iwloc=&output=embed" width="1000" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
       
    </div>  
</div>
@endsection  

