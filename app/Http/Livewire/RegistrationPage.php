<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegistrationPage extends Component
{
    public function render()
    {
        return view('livewire.registration-page')->layout('layouts.auth');
    }
}
