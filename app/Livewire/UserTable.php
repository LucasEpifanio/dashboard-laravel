<?php

namespace App\Livewire;

use App\Models\Servico;
use Livewire\Component;
use Livewire\WithPagination;

class UserTable extends Component
{
    use WithPagination;

    public string $newClient = "";
    public string $newService = "";
    public string $newStartDate = "";
    public string $newEndDate = "";
    public $perPage = 10;
    public $showNewClientModal = false;

    public function openNewClientModal()
    {
        $this->showNewClientModal = true;
    }

    public function closeNewClientModal()
    {
        $this->showNewClientModal = false;
    }

     public function createNewClient ()
     {
        $validatedData = $this->validate([
            'newClient' => 'required|string',
            'newService' => 'required|string',
            'newStartDate' => 'required|date',
            'newEndDate' => 'required|date',
        ]);

        sleep(1);

        dd($validatedData);
     }

     public function updatedPerPage()
    {
        $this->resetPage();

    }
    public function paginationView()
    {
        return 'livewire.setup.pagination';

    }
    public function render()
    {

        $clientes = Servico::paginate($this->perPage);

        sleep(1);

        return view('livewire.user-table',['clientes'=> $clientes]);

    }
}
