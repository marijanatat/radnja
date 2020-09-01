<div class="w-full js-cookie-consent cookie-consent fixed bottom-0 z-50">

    <div class="flex flex-col md:flex-row flex-wrap justify-around items-center bg-gray-800 text-gray-100 p-3">
        <div class="cookie-consent__message">
            {!! trans('cookieConsent::texts.message') !!}
        </div>
    
        <button class="bg-orange-600 p-2 focus:outline-none shadow-lg rounded-sm js-cookie-consent-agree cookie-consent__agree ">
            {{ trans('cookieConsent::texts.agree') }}
        </button>
    </div>

</div>
