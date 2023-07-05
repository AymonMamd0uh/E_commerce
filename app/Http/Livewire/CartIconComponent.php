<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class CartIconComponent extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh'];
    public function render()
    {
        return view('livewire.cart-icon-component');
    }
}
