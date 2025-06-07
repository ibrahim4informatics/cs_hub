<?php

namespace App\Livewire\Pages;

use App\Models\Document;
use App\Models\Module;
use Livewire\Component;

class Documents extends Component
{

    private $documents = null;
    private $modules = null;

    public ?string $type = null;
    public ?int $module_id =  0;
    public ?string $search = null;


    public function mount(){
        if(request()->query("module")){
            $this->module_id = (int) request()->query("module");
        }

        if(request()->query("type")){
            $this->type = request()->query("type");
        }


        if(request()->query("q")){
            $this->search = request()->query("q");
        }

        $query = Document::query();

        $query->when(request()->query("module"), function ($q, $module_id){
            $q->where("module_id", (int) $module_id);
        });

        $query->when(request()->query("type"), function ($q, $type){
            $q->where("type",$type);
        });


        $query->when(request()->query("q"), function ($q, $_q){
            $q->where("title", "like", "%" . $_q . "%");
        });

        $this->documents = $query->paginate(20);
        $this->modules = Module::all();

    }

    public function filter(){
        return redirect()->route("documents", ["q"=>$this->search, "module"=>$this->module_id, "type"=>$this->type]);
    }

    public function clear(){
        return redirect()->route("documents");
    }
    public function render()
    {
        return view('livewire.pages.documents', ["documents"=>$this->documents, "modules"=> $this->modules]);
    }
}
