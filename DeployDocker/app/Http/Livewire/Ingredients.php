<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Ingredients extends Component
{
    public $postIngredients = [];

    public function mount() {

        $this->postIngredients = [
            ['ing_name' => '', 'quantity' => 1, 'units' => 1]
        ];
    }

    public function addIngredient()
    {
        $this->postIngredients[] = ['ing_name' => '', 'quantity' => 1, 'units' => ''];
    }

    public function removeIngredient($index)
    {
        unset($this->postIngredients[$index]);
        array_values($this->postIngredients);
    }

    public function render()
    {
        return view('livewire.ingredients');
    }
}
