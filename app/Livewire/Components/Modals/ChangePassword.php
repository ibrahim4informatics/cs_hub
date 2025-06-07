<?php

namespace App\Livewire\Components\Modals;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ChangePassword extends Component
{

    public ?string $old_password = "";
    public ?string $new_password = "";

    public function close()
    {
        $this->dispatch("closeChangePasswordModal");
    }

    public function save()
    {

        $this->validate([
            "new_password" => ["required", "regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z\d]).{8,}$/"],
            "old_password" => ["required"]
        ]);
        $is_password_correct = Hash::check($this->old_password, User::find(Auth::id())->password);
        if (!$is_password_correct) {
            $this->addError("old_password", "the curent password is not correct");
        } else {

            User::find(Auth::id())->update(["password" => Hash::make($this->new_password)]);
            return redirect()->route("profile");
        }
    }
    public function render()
    {
        return view('livewire.components.modals.change-password');
    }
}
