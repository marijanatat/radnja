<div class="container">

    <div class="flex">
        <div class="w-1/3">
        @foreach ($categories as $category)
            <div x-data="{open: false}">
                    <div class="flex-col">
                        <div class="duration-500 transform hover:translate-x-2" @click="open=!open">
                            {{-- <input class="w-4" type="checkbox" id="{{$category->id}}" value="{{$category->id}}" wire:model="requestedCategories"> --}}
                            <span class="font-bold text-sm text-gray-700 cursor-pointer">{{$category->name}}
                            <i x-show="!open" class="fa fa-angle-double-right text-gray-700 cursor-pointer" aria-hidden="true"></i>
                            <i x-show="open" class="fa fa-angle-double-down text-gray-700 cursor-pointer" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                            <div x-show.transition="open" x-cloak>
                                    
                                @foreach ($category->children as $children)

                                    <div class="flex-col">
                                        <div class="pl-6">
                                            <span class="uppercase italic text-sm font-bold text-gray-700">{{$children->name}}</span>
                                        </div>
                                    </div>
                                        @foreach ($children->children as $ch)

                                        <div class="flex-col">
                                            <label class="hover:bg-gray-300 pl-12 text-sm text-gray-700">
                                                <input class="w-4 pt-5" type="checkbox" id="{{$ch->id}}" value="{{$ch->id}}" wire:model="requestedCategories">
                                                <span>{{$ch->name}}</span>
                                            </label>
                                        </div>

                                        @endforeach
                                    @endforeach
                                    
                            </div>
                        </div>
                        @endforeach
                    </div>
            
            
            
            {{-- <div class="flex-col">
                <h1>Requested Categories: {{implode(', ',$requestedCategories)}}</h1>
                <h1>Ids: {{implode(', ', Arr::flatten($categoryIds))}}</h1>
                
            </div> --}}
            <div class="w-2/3 justify-center">
                @foreach ($products as $product)
                <div class="list-none">
                    <li>{{$product->name}}</li>
                </div>
                @endforeach
            </div>
    </div>
</div>