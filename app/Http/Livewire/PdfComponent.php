<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Proposal;
use Barryvdh\DomPDF\Facade\Pdf;
use League\Flysystem\MountManager;

class PdfComponent extends Component
{
    public Proposal $proposal;



    public function exportToPDF($proposalId)
    {
        // Retrieve the proposal from the database
        $proposal = Proposal::findOrFail($proposalId);
        // Generate the PDF using the proposal data
        $pdf = PDF::loadView('proposal.pdfComponent', ['proposal' => $proposal])->setOptions(['defaultFont' => 'sans-serif']);
        // Download the PDF
        return $pdf->download('proposal_' . $proposal->id . '.pdf');
    }

    public function render()
    {
        return view('livewire.pdf-component');
    }
}
