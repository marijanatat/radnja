<div class="container">

    @foreach ($categories as $category)
            <div class="flex">
                <input type="checkbox" id="{{$category->id}}" value="{{$category->id}}" wire:model="requestedCategories">
                {{-- <li class="list-none">{{$category->name}}</li> --}}
                <label for="{{$category->id}}">{{$category->name}}</label>
            </div>
                <div class="flex-col pl-4">
                    @foreach ($category->children as $children)
                        <input type="checkbox" id="{{$children->id}}" value="{{$children->id}}" wire:model="requestedCategories">
                        <li class="list-none">{{$children->name}}</li>
                    @endforeach
                </div>
    @endforeach


   
    <h1>Requested Categories: {{implode(', ',$requestedCategories)}}</h1>
    <h1>Ids: {{implode(', ', Arr::flatten($categoryIds))}}</h1>

    @foreach ($products as $product)
        <div class="container list-none">
            <li>{{$product->name}}</li>
        </div>
    @endforeach
</div>
