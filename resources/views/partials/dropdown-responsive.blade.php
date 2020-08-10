<div class="text-gray-700 md:hidden mb-2 h-auto text-lg overflow-hidden" >
  @foreach ($categories as $category)
      <div x-data="{open: false}">
              <div class="">
                  <div class="flex justify-between active:bg-gray-400 hover:bg-gray-300 items-center py-2" @click="open=!open">
                      {{-- <input class="w-4" type="checkbox" id="{{$category->id}}" value="{{$category->id}}" wire:model="requestedCategories"> --}}
                      <button class="cursor-pointer focus:outline-none uppercase">{{$category->name}}
                      </button>
                      <i x-show="!open" class="fa fa-angle-down cursor-pointer" aria-hidden="true"></i>
                      <i x-show="open" class="fa fa-angle-up cursor-pointer" aria-hidden="true"></i>
                  </div>
              </div>
                      <div x-show="open" x-cloak
                      x-transition:enter="transition-transform transition-opacity ease-out duration-300"
                      x-transition:enter-start="opacity-0 transform -translate-y-3"
                      x-transition:enter-end="opacity-100 transform translate-y-0"
                      x-transition:leave="transition ease-in duration-300"
                      x-transition:leave-end="opacity-0 transform -translate-y-3"    
                      >
                            
                          <div class="mt-4">
                            @foreach ($category->children as $children)

                                <div class="flex-col my-2">
                                    <div class="">
                                        <span class="uppercase italic">{{$children->name}}</span>
                                    </div>
                                </div>
                                    @foreach ($children->children as $ch)

                                    <a href="{{route('shop.index', ['category' => $ch->id])}}">
                                      <div class="flex-col hover:bg-gray-200 p-2">
                                          <button class="focus:outline-none"> - {{$ch->name}} </button>
                                      </div>
                                    </a>

                                    @endforeach
                                @endforeach
                          </div>
                              
                      </div>
                  </div>
        @endforeach
</div>
<hr class=" my-2 bg-gray-300" style="height: 2px;">
<div class="md:hidden">
  @include('partials.menus.main-right-responsive')
</div>