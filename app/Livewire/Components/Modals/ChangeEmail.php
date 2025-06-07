<?php

namespace App\Livewire\Components\Modals;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChangeEmail extends Component
{

    public ?string $email = null;

    public function close(){
        $this->dispatch("closeEmailModal");
    }

    public function mount(){
        $this->email = User::find(Auth::id())->email;
    }

    public function save(){
        $this->validate(["email"=>["email", "required"]]);
        User::find(Auth::id())->update(["email"=>$this->email]);
        return redirect()->route("profile");
    }
    public function render()
    {
        return view('livewire.components.modals.change-email');
    }
}
