<?php

namespace App\Http\Controllers\Contracts\Factories;

interface PDFContractFactory
{
    public function createContractPDF(string $data);
}
