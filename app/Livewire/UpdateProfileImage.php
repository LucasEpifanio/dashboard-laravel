<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class UpdateProfileImage extends Component
{
    use WithFileUploads;

    public $imagemPerfil;  
    public $styleButton;


    public function mount()
    {
        $this->styleButton = "none";
    }

    public function updatedImagemPerfil()
    {
        $this->styleButton = "block";
    } 
    public function salvarImagem()
{
    if ($this->imagemPerfil != null) {
        $this->imagemPerfil->storeAs('public/profile', $this->imagemPerfil->getClientOriginalName());

        User::where('id', Auth::user()->id)->update([
            'imagem' => $this->imagemPerfil->getClientOriginalName(),
        ]);

        // Atualize o componente Livewire
        return redirect()->to(route('profile.edit'));
    }
}

    public function render()
    {
        return view('livewire.update-profile-image');
    }
}
