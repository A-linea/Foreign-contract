<?php

namespace App\Http\Controllers\Contracts\Factories;

interface PDFContractFactory
{
    public function createContractPDF(array $data);
    public function showContractPDF(array $data);
}
