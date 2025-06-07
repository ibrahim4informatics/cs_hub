<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Signup extends Component
{

    #[Validate("required|email")]
    public string $email = "";

    #[Validate("required|min:3|max:35")]
    public string $first_name = "";



    #[Validate("required|min:3|max:35")]
    public string $last_name = "";


    #[Validate(["required", "regex:/^(07|05|06)\d{8}$/"])]
    public string $phone = "";

    #[Validate(["required", "regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z\d]).{8,}$/"])]
    public string $password = "";

    #[Validate("required")]
    public string $confirm = "";



    public function submit()
    {

        $data = $this->validate();
        // dd("done");
        // dd($data);

        $userExist = User::where("email", $data["email"])->first();

        if ($userExist) {
            $this->addError("email", "email is used");
        } else {


            $user = new User([
                "email" => $data["email"],
                "password" => Hash::make($data["password"]),
                "name" => $data["first_name"],
                "last_name" => $data["last_name"],
                "phone" => $data["phone"],
            ]);

            $user->save();


            return redirect()->route("login");
        }
    }

    public function render()
    {
        return view('livewire.forms.signup');
    }
}
