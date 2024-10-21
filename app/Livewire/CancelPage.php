<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Cancel - GadgetOne')]
class CancelPage extends Component
{
    public function render()
    {
        return view('livewire.cancel-page');
    }
}