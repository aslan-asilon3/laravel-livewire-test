<?php

namespace App\Http\Livewire\Datamember;

use Livewire\Component;
use App\Models\Datamember;

class DatamemberIndex extends Component
{
    // public $datamembers = "datamembers";
    public $datamembers;
    public $id_member;
    public $no_hp;
    public $record;
    public $updateMember;

        // Validation Rules
    protected $rules = [
        'id_member'=>'required',
        'no_hp'=>'required'
    ];

    public function mount()
    {
        // $this->datamembers = "datamembers";
        // $this->datamembers = Datamember::select('id_member','no_hp')->get();
    }

    public function render()
    {
        $this->datamembers = Datamember::select('id_member','no_hp')->get();
        return view('livewire.datamember.datamember-index');
    }
        


        
    public function store(){        
        // Validate Form Request
        $this->validate(); 

        try{
            // Create Datamember
            Datamember::create([
                'id_member'=>$this->id_member,
                'no_hp'=>$this->no_hp
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

    public function edit($id){
        $record = Datamember::findOrFail($id);
        // dd($datamembers);
        // $this->name = $datamembers->name;
        $this->id = $record->id;
        $this->id_member = $record->id_member;
        $this->no_hp = $record->no_hp;
        $this->updateMember = true;
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

            $this->updateMember = false;
            
    }

    public function resetFields(){
        $this->id_member = '';
        $this->no_hp = '';
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Datamember::where('id', $id);
            $record->delete();
        }
    }




}
