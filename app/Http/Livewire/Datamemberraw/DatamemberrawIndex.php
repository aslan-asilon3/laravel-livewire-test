<?php

namespace App\Http\Livewire\Datamemberraw;

use Livewire\Component;
use App\Models\Datamemberraw;

class DatamemberrawIndex extends Component
{
    public $datamemberraws;
    public $id_member;
    public $no_hp;
    public $updateMember;

    public function render()
    {
        // $this->datamemberraws = Datamemberraw::select('id_member','no_hp','status_cek_data')->get();
        return view('livewire.datamember.datamember-index');
    }
}
