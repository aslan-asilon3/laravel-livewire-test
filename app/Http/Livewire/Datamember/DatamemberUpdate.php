<?php

namespace App\Http\Livewire\Datamember;

use Livewire\Component;
use App\Models\Datamember;

class DatamemberUpdate extends Component
{
    public function update()
    {
        $this->validate([
            // 'selected_id' => 'required|numeric',
            'id_member' => 'required',
            'no_hp' => 'required'
        ]);

        if ($this->selected_id) {
            $record = Datamember::find($this->selected_id);
            $record->update([
                'id_member' => $this->id_member,
                'no_hp' => $this->no_hp
            ]);

            $this->resetInput();
            // $this->updateMode = false;
        }

    }

    public function render()
    {
        return view('livewire.datamember.datamember-update');
    }
}
