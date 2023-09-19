<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
class NikOtomatis extends Component
{
    public $user, $tanggal_lahir, $user_id;

    public function buatNik()
    {
        $nik = $this->user_id.Str::replace("-","",$this->tanggal_lahir);
        return $nik;
    }
    
    public function render()
    {
        return view('livewire.nik-otomatis', ['nik' => $this->buatNik()]);
    }
}
