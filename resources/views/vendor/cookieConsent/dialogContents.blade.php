<div class="w-full js-cookie-consent cookie-consent fixed bottom-0">

    <div class="flex justify-around items-center bg-gray-800 text-gray-100 p-3" style="opacity: 90%">
        <div class="cookie-consent__message">
            {!! trans('cookieConsent::texts.message') !!}
        </div>
    
        <button class="bg-orange-600 p-2 mr-8 focus:outline-none shadow-lg rounded-sm js-cookie-consent-agree cookie-consent__agree ">
            {{ trans('cookieConsent::texts.agree') }}
        </button>
    </div>

</div>
