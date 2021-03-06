<div class="w-full js-cookie-consent cookie-consent fixed bottom-0 z-50">

    <div class="flex flex-col md:flex-row justify-around md:px-16 items-center bg-gray-800 bg-opacity-75 md:bg-opacity-100 text-gray-100 p-3">
        <div class="cookie-consent__message md:w-2/3 text-sm md:text-base">
            {!! trans('cookieConsent::texts.message') !!}
           
        </div>
    
       
        <div class="flex flex-row space-x-8">
            <a href="{{route('cookies')}}" class="bg-boja p-2 mt-2 md:mt-0 focus:outline-none shadow-lg rounded-sm js-cookie-consent-agree cookie-consent__agree ">
                    {{ trans('cookieConsent::texts.prihvatam') }}
                </a>
            <button class="bg-orange-600 p-2 mt-2 md:mt-0 focus:outline-none shadow-lg rounded-sm js-cookie-consent-agree cookie-consent__agree ">
                {{ trans('cookieConsent::texts.agree') }}
            </button>
        </div>
    </div>

</div>
