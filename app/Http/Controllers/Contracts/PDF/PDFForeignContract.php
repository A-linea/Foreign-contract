<?php

namespace App\Http\Controllers\Contracts\PDF;

use App\Http\Controllers\Contracts\Factories\PDFContractFactory;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Response;

class PDFForeignContract implements PDFContractFactory
{
    public function createContractPDF($data): Response
    {
        $pdf = PDF::loadView('contracts.PDF.foreign_contract',  $data)->stream();
        return $pdf;
    }



}
