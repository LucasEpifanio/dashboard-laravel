<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Notification as NotificationModel;

class Notification extends Component
{
    public function render()
    {
        // Lógica do componente
        return view('livewire.notification');
    }
}
