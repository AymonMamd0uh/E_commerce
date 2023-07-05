<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\HomeSlider;

class HomeComponent extends Component
{

    public function render()
    {
       $slides = HomeSlider::where('status',1)->get();
       $lproducts = Product::orderBy('created_at','DESC')->get()->take(8);
        return view('livewire.home-component',['slides'=>$slides,'lproducts'=>$lproducts]);
    }
}
