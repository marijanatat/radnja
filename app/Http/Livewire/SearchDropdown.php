<?php

namespace App\Http\Livewire;

use App\Product;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = '';
    public $searchResults = [];

    public function render()
    {
        if (strlen($this->search) >= 2) {
            $this->searchResults = Product::where('name','like',"%$this->search%")
            ->orWhere('description','like',"%$this->search%")
            ->orWhere('details','like',"%$this->search%")->get();
        }

        return view('livewire.search-dropdown');
    }
}
