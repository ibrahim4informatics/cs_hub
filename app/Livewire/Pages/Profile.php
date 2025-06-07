<?php

namespace App\Livewire\Pages;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{

    protected $listeners = [
        "closeEmailModal" => "closeChangeEmail",
        "closeChangePasswordModal"=>"closeChangePassword"
    ];

    public $user = null;
    public bool $showChangeEmailModal = false;
    public bool $showChangePasswordModal = false;

    public function mount()
    {
        $this->user = User::find(Auth::id());
    }

    public function showChangeEmail()
    {
        $this->showChangeEmailModal = true;
    }
    public function showChangePassword()
    {

        $this->showChangePasswordModal = true;
    }


    public function closeChangeEmail()
    {
        $this->showChangeEmailModal = false;
    }

    public function closeChangePassword()
    {
        $this->showChangePasswordModal = false;
    }

    public function signout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route("login");
    }
    public function render()
    {
        return view('livewire.pages.profile', []);
    }
}
