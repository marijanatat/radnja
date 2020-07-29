


  <nav class="navbar flex items-center bg-transparent justify-between flex-wrap  p-1  w-full  pin-t fixed z-10 top-0 mt-0 "> 
    <div class="block lg:hidden">
      <button id="nav-toggle"
        class="flex items-center px-3 py-2  rounded text-gray-600 font-bold border border-red-900  hover:text-red-700 hover:border-white">
        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
      </button>
    </div>
    <!--dodatak-->
  
  <!--dodatak-->
     <div class="w-full flex-grow text-white lg:flex lg:items-end lg:w-auto hidden pt-6 lg:pt-0" id="nav-content">
      <ul class="list-reset lg:flex justify-start flex-1 items-center">
        <li>
          <div class="flex items-center ">
     
            <div class="flex  ">
            
                <a  href="/" ><img src="{{asset('./img/baby.svg')}}"
                        alt="kolica za bebe" style="" class="w-16 h-16 bg-transparent  hover:text-red-800 py-2 px-2 rounded-md"> </a>
            
            </div>
          <div class="flex-1 font-bold text-lg xl:text-2xl text-white px-2  lg:px-4 uppercase py-2 hover:text-gray-400">
            Mob-ing
          </div>
          </div>
      
          {{-- <a class="inline-block px-2  lg:px-4 py-2 text-white text-lg  lg:text-2xl hover:no-underline no-underline"
            href="/">Home</a> --}}
        </li>
        <li class="dropdown ">
          <button class="dropbtn inline-block px-2  lg:px-4 bg-transparent uppercase text-white  text-md  lg:text-base no-underline hover:text-gray-400 py-2 "
            href="#" >Bebe</button>
              <div class="dropdown-content ">
   
                  <div class="flex ">
                    <div class="div  w-1/2">
                      <span>Moda</span>
                      <div class="w-full hover:text-gray-300">
                        <a href="#"  id="item" style="color:gray">Zeke</a>
                      </div>
                      <a href="#" style="color:gray" >Bodići</a>
                      <a href="#" style="color:gray" >Pantalonice</a>
                    </div>
                
                   <div class="div w-1/2">
                    <span>Oprema</span>
                  
                      <a href="#" style="color:gray">Portikle</a>
                      <a href="#" style="color:gray">Pelene</a>
                      <a href="#" style="color:gray">Benkice</a>
                 </div>
                  </div>
               
              </div>
          
        </li>
        <li class="dropdown ">
          <button class="dropbtn inline-block px-2  lg:px-4 bg-transparent uppercase text-white  text-md  lg:text-base no-underline hover:text-gray-400 hover:no-underline py-2 "
            href="#" >Bate</button>
              <div class="dropdown-content ">
   
                  <div class="flex ">
                    <div class="div  w-1/2">
                      <span>Moda</span>
                      <div class="w-full">
                        <a href="#" style="color:gray" id="item">Majice</a>
                      </div>
                      <a href="#" style="color:gray">Duksevi</a>
                      <a href="#" style="color:gray">Trenerke</a>
                    </div>
                
                   <div class="div w-1/2">
                    <span>Veš</span>
                      <a href="#" style="color:gray">Gaće</a>        
                      <a href="#" style="color:gray">Potkošulje</a>                          
                      <a href="#" style="color:gray">Pidžame</a>

                 </div>
                  </div>
               
              </div>

        </li>

        <li class="dropdown ">
            <button class="dropbtn inline-block px-2  lg:px-2 bg-transparent uppercase text-white  text-md  lg:text-base no-underline hover:text-gray-400 hover:no-underline py-2 "
              href="#" >Seke</button>
                <div class="dropdown-content ">
     
                    <div class="flex ">
                      <div class="div  w-1/2">
                        <span>Moda</span>
                        <div class="w-full">
                          <a href="#" style="color:gray" id="item">Suknje</a>
                        </div>
                        <a href="#" style="color:gray ;font-size: 12px">Haljine</a>
                        <a href="#" style="color:gray">Helanke</a>
                      </div>
                  
                     <div class="div w-1/2">
                      <span>Veš</span>
                    
                        <a href="#" style="color:gray">Gaće</a>
                        <a href="#" style="color:gray">Potkošulje</a>
                        <a href="#" style="color:gray">Spavaćice</a>
                   </div>
                    </div>
                 
                </div>
            
          </li>
          <li class="dropdown ">
            <button class="dropbtn inline-block px-2  lg:px-4 bg-transparent uppercase text-white  text-md  lg:text-base no-underline hover:text-gray-400 hover:no-underline py-2 "
              href="#" >Žene</button>
                <div class="dropdown-content ">
     
                    <div class="flex ">
                      <div class="div  w-1/2">
                        <span>Moda</span>
                        <div class="w-full">
                          <a href="#" style="color:gray" id="item">Helanke</a>
                        </div>
                        <a href="#" style="color:gray">Haljine</a>
                        <a href="#" style="color:gray">Pantalone</a>
                      </div>
                  
                     <div class="div w-1/2">
                      <span>Veš</span>
                      <a href="#" style="color:gray">Gaće</a>
                      <a href="#" style="color:gray">Potkošulje</a>
                      <a href="#" style="color:gray">Spavaćice</a>
                   </div>
                    </div>
                 
                </div>
            
          </li>
          <li class="dropdown">
            <button class="dropbtn inline-block px-2  lg:px-4 bg-transparent uppercase text-white  text-md  lg:text-base no-underline hover:text-gray-400 hover:no-underline py-2 "
              href="#" >Muškarci</button>
                <div class="dropdown-content ">
     
                    <div class="flex ">
                      <div class="div  w-1/2">
                        <span>Moda</span>
                        <div class="w-full">
                          <a href="#" style="color:gray" id="item">Majice</a>
                        </div>
                        <a href="#" style="color:gray">Duksevi</a>
                        <a href="#" style="color:gray">Trenerkeaž>
                      </div>
                  
                     <div class="div w-1/2">
                      <span>Veš</span>
                      <a href="#" style="color:gray">Gaće</a>
                      <a href="#" style="color:gray">Potkošulje</a>
                      <a href="#" style="color:gray">Pidžame</a>
                   </div>
                    </div>
                 
                </div>
            
          </li>
          <li class="dropdown ">
            <button class="dropbtn inline-block px-2  lg:px-4 bg-transparent uppercase text-white  text-md  lg:text-base no-underline hover:text-gray-400 hover:no-underline py-2 "
              href="#" >Textil</button>
                <div class="dropdown-content ">
     
                   
                        <div class="w-full p-2">
                          <a href="#" style="color:rgb(20, 104, 107) !important" id="item">Peškiri</a>
                        </div>
                        <a class="p-2" href="#" style="color:rgb(20, 104, 107) !important">Sudne krpe</a>
                        <a class="p-2"href="#" style="color:rgb(20, 104, 107) !important">Posteljina</a>
                      </div>
               
                    </div>                                  
          </li>
        

         <div class="w-full flex-grow text-white lg:flex lg:items-end lg:w-auto hidden pt-6 lg:pt-0">
           
              @include('partials.menus.main-right') 
          
         </div>
       
      
      </ul>
    </div>
    
 
  </nav>
 