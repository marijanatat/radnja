
<form action="{{ route('search') }}" method="GET" class="search-form flex">
    {{-- <i class="fa fa-search search-icon "></i> --}}
    <div>
        
        <img class="w-8 h-8 " src="https://img.icons8.com/color/48/000000/search.png"/> 
    </div>
    <input type="text" name="query" id="query" value="{{ request()->input('query') }}" class="search-box" placeholder="Search for product" required>
</form>