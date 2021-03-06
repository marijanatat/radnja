<div class="w-full py-8" style="background-color: rgb(20, 104, 107);">
    <div class="flex flex-col md:flex-row items-center md:items-start container">
        <div class="md:w-1/3 h-auto">
            <ul class="list-reset leading-normal">
                <div class="flex items-center">
                    <a href="/">
                        <li><img src="{{asset('./img/baby.svg')}}" alt="kolica za bebe"
                                class="w-12 h-12 bg-transparent p-2 rounded-md"></li>
                    </a>
                    <a href="/" class="">
                        <li class="text-xl sm:text-2xl xl:text-3xl text-white font-semibold">Mob-ing</li>
                    </a>
                </div>
                <li class="text-white text-base xl:text-xl"><i class="fa fa-address-card mr-2"
                        aria-hidden="true"></i>Kneza Mihaila 21</li>
                <li class="text-white text-base xl:text-xl"><i class="fa fa-home mr-2" aria-hidden="true"></i>Odžaci,
                    Srbija</li>
                <li class="text-white text-base xl:text-xl"><i class="fa fa-envelope mr-2"
                        aria-hidden="true"></i>mobing.odzaci@outlook.com</li>
                <li class="text-white text-base xl:text-xl  "><i class="fa fa-phone-square mr-2"
                        aria-hidden="true mt-2"></i>063/7858499 <br> <span class="ml-6">061/1403692</span> </li>

            </ul>
        </div>
        <div class="md:w-1/3 h-auto">
            <ul class="list-reset leading-normal mt-8">
                <a href="{{route('about')}}">
                    <li class="text-white text-base xl:text-xl hover:text-gray-500 "><i
                            class="fa fa-angle-double-right  mr-2" aria-hidden="true"></i>O nama</li>
                </a>
                <a href="{{route('porucivanje')}}">
                    <li class="text-white text-base xl:text-xl hover:text-teal-300"><i
                            class="fa fa-angle-double-right  mr-2 " aria-hidden="true"></i>Uputstvo za kupovinu</li>
                </a>
                <a href="{{route('placanje')}}">
                    <li class="text-white text-base xl:text-xl hover:text-teal-300"><i
                            class="fa fa-angle-double-right  mr-2 " aria-hidden="true"></i>Plaćanje</li>
                </a>
                <a href="{{route('isporuka')}}">
                    <li class="text-white text-base xl:text-xl hover:text-teal-300"><i
                            class="fa fa-angle-double-right  mr-2 " aria-hidden="true"></i>Isporuka</li>
                </a>
                <a href="{{route('reklamacije')}}">
                    <li class="text-white text-base xl:text-xl hover:text-teal-300"><i
                            class="fa fa-angle-double-right  mr-2 " aria-hidden="true"></i>Reklamacije</li>
                </a>
                <a href="{{route('otkazivanje')}}">
                    <li class="text-white text-base xl:text-xl hover:text-teal-300"><i
                            class="fa fa-angle-double-right  mr-2 " aria-hidden="true"></i>Otkazivanje porudžbine</li>
                </a>
                <a href="{{route('privatnost')}}">
                    <li class="text-white text-base xl:text-xl hover:text-teal-300"><i
                            class="fa fa-angle-double-right  mr-2 " aria-hidden="true"></i>Politika privatnosti</li>
                </a>
            </ul>

        </div>
        <div class="md:w-1/3 h-auto">
            <p class="text-white text-base hover:text-gray-500 pb-2 text-center mt-8 md:mt-0">Ovde nas možete pronaći:
            </p>
            <div class="mapouter ml-auto">
                <div class="gmap_canvas"><iframe class="mx-auto md:mx-0 w-72 lg:w-96 " width="384" height="256"
                        id="gmap_canvas"
                        src="https://maps.google.com/maps?q=Kneza%20Mihaila%2021%2C%20%D0%9E%D1%9F%D0%B0%D1%86%D0%B8&t=&z=17&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                        href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a></div>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 256px;
                        width: 384px;
                    }

                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 256px;
                        width: 384px;
                    }
                </style>
            </div>

        </div>


    </div>
</div>

<div>
    @include('partials.footers.copyright-footer')
</div>
