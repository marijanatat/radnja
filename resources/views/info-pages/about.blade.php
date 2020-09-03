@extends('layouts.master') 


@section('content') 

<div class="">
   @component('components.breadcrumbs')
  <a href="/">Home</a>
  <i class="fa fa-chevron-right breadcrumb-separator"></i>
  <span>O nama</span>
  @endcomponent 
</div>

 
<div class="container">
   

    <div class="mb-2 text-gray-700">
        {{-- <h2 style="font-size:24px " class="text-gray-700 font-semibold mt-2 tracking-widest">Naša priča</h2>
        <div class="spacer"></div>
        <h2>Mobing Odžaci str</h2>
        <h3>Knez Mihailova 21</h3>
        <h3>063/7858499</h3>
        <div class="short-left-line">
            <div></div>
        </div> --}}
        <p> Naša radnja se nalazi u Odžacima. Mi smo već 11 godina tu za vas. Negujemo domaći kvalitet i pristupačne cene za celu porodicu.
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
{{-- {!!$map['html']!!} 
<div id="map"></div> --}}
      <div class="pb-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1398.1260028649447!2d19.257321988241856!3d45.50500542734718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssr!2srs!4v1594243180190!5m2!1ssr!2srs" width="1000" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
       
    </div>  
</div>


{{-- </body>
</html>  --}}
  @endsection  

