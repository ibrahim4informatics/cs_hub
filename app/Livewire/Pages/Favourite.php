<?php

namespace App\Livewire\Pages;

use App\Models\Document;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Favourite extends Component
{

    public $documents = [];

    public function mount(){
        $favourites = User::find(Auth::id())->favourites;
        foreach ($favourites as $fav){
            array_push($this->documents, Document::find($fav->document_id));
        }
    }

    public function render()
    {
        return view('livewire.pages.favourite', ["documents"=>$this->documents]);
    }
}
