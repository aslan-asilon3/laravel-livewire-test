<?php

namespace App\Http\Livewire\Datamemberraw;

use Livewire\Component;
use App\Models\Datamemberraw;

class DatamemberrawTable extends Component
{
    public $datamemberraws;
    public $id_member;
    public $no_hp;
    public $status_cek_data;
    public $updateMemberRaw = false;

    public function render()
    {
        $this->datamemberraws = Datamemberraw::select('id_member','no_hp','status_cek_data')->get();
        return view('livewire.datamemberraw.datamemberraw-table');
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Datamemberraw::where('id', $id);
            $record->delete();
        }
    }

    public function store(){        
        // Validate Form Request
        $this->validate(); 

        try{
            // Create Datamember
            Datamemberraw::create([
                'id_member'=>$this->id_member,
                'no_hp'=>$this->no_hp,
                'status_cek_data'=>$this->status_cek_data
            ]);
    
            // Set Flash Message
            session()->flash('success','Datamember Created Successfully!!');            // Reset Form Fields After Creating Category
            $this->resetFields();
            }catch(\Exception $e){
                // Set Flash Message
                session()->flash('error','Something goes wrong while creating Datamember!!');            // Reset Form Fields After Creating Category
                $this->resetFields();
            }
    }

    public function edit($id)
    {
        $record = Datamemberraw::findOrFail($id);

        $this->selected_id = $id;
        $this->id_member = $record->id_member;
        $this->no_hp = $record->no_hp;

        $this->updateMemberraw = true;
    }


    public function update(){        
        // Validate request
        $this->validate(); 

        try{            
            // Update Datamember
            Datamember::find($this->id)->fill([
                'id_member'=>$this->id_member,
                'no_hp'=>$this->no_hp
            ])->save(); 
            
            
            session()->flash('success','Data member Updated Successfully!!');
    
            $this->cancel();
            }catch(\Exception $e){
            session()->flash('error','Something goes wrong while updating data member!!');
            $this->cancel();
            }
            $this->updateMemberraw = false;
    }

    public function resetFields(){
        $this->id_member = '';
        $this->no_hp = '';
        $this->status_cek_data = '';
    }

}
