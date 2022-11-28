<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserLive extends Component
{

    use WithPagination;

    public $selectedId = 0, $name = "", $lastName="", $email="";

    public $showForm = false;
    public $showGrid = true;
    public $actionForm = "";

    public function mount()
    {
        $this->name = "Miguel Angel";
        $this->lastName = "FreeMan";
        $this->email = "miguelangel@freeman.com";

    }
    public function render()
    {
        return view('livewire.user.user-live', ['response' => $this->load()]);
    }

    private function load()
    {
        $query = User::select();

        $query->orderBy('id', 'desc');

        $response = $query->paginate(8);

        return $response;
    }

    public function store()
    {

        $this->reset();

        $this->showForm = false;
        $this->showGrid = true;
    }

    public function add()
    {
        $this->actionForm = "Creando...";
        $this->resetExcept("actionForm");

        $this->showForm = true;
        $this->showGrid = false;
    }

    public function edit(User $value)
    {
        $this->actionForm = "Editando...";

        $this->selectedId = $value->id;

        $this->name     = $value->name;
        $this->lastName = $value->last_name;
        $this->email    = $value->email;

        $this->showForm = true;
        $this->showGrid = false;
    }


}
