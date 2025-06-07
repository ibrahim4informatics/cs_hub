<?php

namespace App\Livewire\Components\Ui;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{

    public $is_auth = null;
    public $role = null;

    public function signout(){
        if($this->is_auth){
            Auth::logout();
            return redirect()->route("welcome");
        }
    }

    public function mount()
    {
        $this->is_auth = Auth::check();
        if (Auth::check()) {
            $this->role = User::find(Auth::id())->role;
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route("welcome");
    }
    public function render()
    {
        return view('livewire.components.ui.navbar');
    }
}
