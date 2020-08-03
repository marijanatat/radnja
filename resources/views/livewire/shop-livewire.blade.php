<div class="container">

    <div class="flex">
        <div class="w-1/3">
        @foreach ($categories as $category)
            <div x-data="{open: false}">
                    <div class="flex-col">
                        <div class="duration-500 transform hover:translate-x-2" @click="open=!open">
                            {{-- <input class="w-4" type="checkbox" id="{{$category->id}}" value="{{$category->id}}" wire:model="requestedCategories"> --}}
                            <span >{{$category->name}}</span>
                            <template x-if="!open">
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            </template>
                            <template x-if="open">
                                <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                            </template>
                        </div>
                    </div>
                            <div x-show="open" x-cloak>
                                    @foreach ($category->children as $children)
                                        <div class="flex-col">
                                            <label class="hover:bg-gray-500 pl-6">
                                                <input class="w-4" type="checkbox" id="{{$children->id}}" value="{{$children->id}}" wire:model="requestedCategories">
                                                <span>{{$children->name}}</span>
                                            </label>
                                        </div>
                                        <div >
                                            @foreach ($children->children as $ch)
                                            <div class="flex-col">
                                                <label class="hover:bg-gray-500 pl-12">
                                                    <input class="w-4" type="checkbox" id="{{$ch->id}}" value="{{$ch->id}}" wire:model="requestedCategories">
                                                    <span>{{$ch->name}}</span>
                                                </label>
                                            </div>
                                            @endforeach
                                        </div>
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