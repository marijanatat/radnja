
<div class="breadcrumbs text-boja font-bold text-sm">
    <div class="breadcrumbs-container container">
        <div>
            {{ $slot }}
        </div>
        <div>
            {{-- @include('partials.search') --}}
            <livewire:search-dropdown>
        </div>
    </div>
</div> <!-- end breadcrumbs -->