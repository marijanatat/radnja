<div class="might-like-section">
    <div class="container shadow-md ">
        <h2 class="text-gray-800 font-semibold pl-8">Pogledajte slične proizvode...</h2>
            <div class="grid col-1 md:grid-cols-2 xl:grid-cols-4 px-8  " >
                @foreach ($mightAlsoLike as $product)
                <a href="{{route('shop.show',$product->slug)}}" class="might-like-product mb-2 mr-2">
                    <img src="{{productImage($product->image)}}" alt="product"  style="height:150px;" class="mx-auto"> 
                    <div class="might-like-product-name">{{$product->name}}</div>
                    <div class="might-like-product-price">{{$product->presentPrice()}}</div>
                </a> 
                @endforeach
            </div>
    </div>
</div>