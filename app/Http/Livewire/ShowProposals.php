<?php

namespace App\Http\Livewire;

use App\Models\Proposal;
use Livewire\Component;
use Livewire\WithPagination;

class ShowProposals extends Component
{
    use WithPagination;
    
    public $proposalId;
    public function confirmDelete($id)
    {
        $this->proposalId = $id;
        $this->dispatchBrowserEvent(
            'confirm-delete',
            ['message' => 'Do you want to delete?', 'title' => 'Alert']
        );
    }

    
    public function deleteProposal()
    {
        Proposal::findOrFail($this->proposalId)->delete();
        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'success',  'message' => 'Deleted Successfully!', 'title' => 'Success']
        );
    }
    public $listeners = ['confirmed-delete' => 'deleteProposal'];

    public function render()
    {
        return view('livewire.show-proposals',[
            'proposals' => Proposal::orderBy('updated_at', 'desc')->paginate(10),
        ]);
    }
}
