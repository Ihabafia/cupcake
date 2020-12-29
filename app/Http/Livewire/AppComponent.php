<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AppComponent extends Component
{
    /*public $dark;

    protected $listeners = [
        'darkOn'
    ];

    public function mount($dark = false)
    {
        $this->dark = $dark;
    }

    public function darkOn()
    {
        $this->dark = true;
    }*/

    public function render()
    {
        return view('livewire.app-component');
    }
}
