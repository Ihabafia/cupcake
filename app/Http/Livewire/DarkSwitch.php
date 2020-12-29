<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DarkSwitch extends Component
{
    /*public $darkMode;

    public function mount($darkMode = false)
    {
        $this->darkMode = $darkMode;
    }

    public function toggleMode($darkMode = false)
    {
        $this->darkMode = !$darkMode;

        if($this->darkMode){
            $this->dispatchBrowserEvent('dark', true);
        } else {
            $this->dispatchBrowserEvent('dark', false);
        }
    }*/

    public function render()
    {
        return view('livewire.dark-switch');
    }
}
