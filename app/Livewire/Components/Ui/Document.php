<?php

namespace App\Livewire\Components\Ui;

use App\Models\Favourite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Document extends Component
{
    public string $title;
    public int $id;
    public string $type;
    public string $module;
    public string $link;
    public bool $is_favourite;

    public function mount()
    {
        if (Auth::check()) {

            $fav = Favourite::where("user_id", Auth::id())->where("document_id", $this->id)->first();
            if ($fav) {
                $this->is_favourite = true;
            } else {
                $this->is_favourite = false;
            }
        }
    }

    public function add_fav()
    {

        if (!Auth::check()) {
            return redirect()->route("login");
        } else {

            if (!($this->is_favourite)) {
                $fav = new Favourite(["user_id" => Auth::id(), "document_id" => $this->id]);
                $fav->save();
                $this->is_favourite = true;
            } else {
                $f = Favourite::where("user_id", Auth::id())->where("document_id", $this->id)->first();
                if ($f) {
                    $f->delete();
                    $this->is_favourite = false;
                }
            }
        }

        return redirect(request()->header('Referer'));
    }
    public function render()
    {
        return view('livewire.components.ui.document');
    }
}
