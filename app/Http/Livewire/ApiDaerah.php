<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ApiDaerah extends Component
{
    public $provinsiId, $kotaId;
    public function provinsi()
    {   
        $provinsi = HTTP::get("https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json");
        return $provinsi->object();
    }

    public function render()
    {
        return view('livewire.api-daerah', ['provinsi' => $this->provinsi()]);
    }
}
