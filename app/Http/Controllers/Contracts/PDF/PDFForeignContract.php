<?php

namespace App\Http\Controllers\Contracts\PDF;

use App\Http\Controllers\Contracts\Factories\PDFContractFactory;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Response;

class PDFForeignContract implements PDFContractFactory
{
    public function createContractPDF($data): Response
    {
        $contxt = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed'=> TRUE
            ]
        ]);

        return PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])
        ->loadView('contracts.PDF.foreign_contract',  $data)->download('contract.pdf');
    }


    public function showContractPDF(array $data)
    {
       return   PDF::loadView('contracts.PDF.foreign_contract', $data)->stream();
    }

    public function previewContractPDF(array $data) {
        return view('contracts.PDF.foreign_contract', $data);
    }
}
