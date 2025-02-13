<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.login')]
class Login extends Component
{
    public function render()
    {
        return view('livewire.auth.login');
    }
}
