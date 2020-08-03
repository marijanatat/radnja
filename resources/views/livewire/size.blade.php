
<div class="bg-gray-300 border-solid border-1 border-gray-600 w-20 h-full rounded-t-lg">

    <div class="flex flex-col  items-start  ml-4 justify-center " >
        @foreach ($sizes as $size)
        <div class="flex flex-col w-12 max-h-full">
            <label class="inline-flex items-center  text-sm">
                <input type="checkbox" class="form-checkbox h-3 w-3 text-gray-600 text-sm " id="{{$size->id}}" value="{{$size->id}}" wire:model="requestedSizes">
                <li class="list-none ml-2">{{$size->value}}</li>
            </label>
        </div>
        @endforeach
    </div>
        <div x-data="{ open: false }" class="flex flex-col  items-start  ml-4 justify-center ">
            @foreach ($sizesAll as $size)
            <div class="flex flex-col w-12 max-h-full" x-show="open">
                <label class="inline-flex items-center  text-sm">
                    <input type="checkbox" class="form-checkbox h-3 w-3 text-gray-600 text-sm " id="{{$size->id}}" value="{{$size->id}}" wire:model="requestedSizes">
                    <li class="list-none ml-2">{{$size->value}}</li>
                </label>
            </div>
            @endforeach

            <button type="" @click="open = !open"  type="button" 
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded "  x-html="open ? `<i class='fa fa-angle-double-down'></i>` :`<i class='fa fa-angle-double-up'></i>`"> </button>

            {{-- <button type="" @click="open = !open"  type="button" 
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded " x-text="open ? 'Prikazi manje':'Prikazi vise'" x-html="open ? '<i class='fa fa-angle-double-down'></i>':'<i class='fa fa-angle-double-up'></i>'"> </button> --}}  
        </div>  

   
    {{-- <div>
        @foreach ($products as $product)
       
            <div class="container list-none">
                <li>{{$product->name}}</li>
            </div>
        @endforeach
    </div> --}}


   
</div>