<?php

namespace App\Http\Livewire;

use App\Product;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\WithPagination;

class SearchDropdown extends Component
{
    use WithPagination;

    public $search = '';
    public $searchResults = [];

    public function render()
    {
        if (strlen($this->search) >= 2) {
            $this->searchResults = Product::where('name','like','%' . $this->search . '%')
            ->orWhere('description','like','%' . $this->search . '%')
            ->orWhere('details','like','%' . $this->search . '%')->take(10)->get();
        }

        return view('livewire.search-dropdown');
    }

    public function searchProducts()
    {
        if(url()->previous() == url('shop') || request()->search || request()->category){
            $this->emit('searched', $this->search);
        } else {
            return redirect(route('shop.index', ['search' => $this->search]));
        }
    }
}
