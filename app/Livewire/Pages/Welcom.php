<?php

namespace App\Livewire\Pages;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Welcom extends Component
{

    public $is_auth = null;
    public function mount(){

        $this->is_auth = Auth::check();
    }


    public function render()
    {
        return view('livewire.pages.welcom');
    }
}
