<?php

namespace App\Livewire\Forms;

use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Signin extends Component
{

    #[Validate(["required", "email"])]
    public string $email = "";

    #[Validate(["required", "regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z\d]).{8,}$/"])]
    public string $password = "";

    public function submit()
    {

        $data = $this->validate();


        // $user = User::where("email", $data["email"])->first();

        if (Auth::attempt($data)) {

            session()->regenerate();
            return redirect()->route("profile");

            
        } else {
            $this->addError("email", "invalid email or password");
            $this->addError("password", "invalid email or password");
        }
    }
    public function render()
    {
        return view('livewire.forms.signin');
    }
}
