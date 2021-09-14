<?php

namespace App\Http\Controllers\Contracts\PDF;


use App\Http\Controllers\Contracts\Factories\PDFContractFactory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    //


    public function __construct()
    {

    }

    public function showPdf()
    {
        $factory = $this->getPDFFactory('foreign');
        $data = 'PDF data';
        $factory->createContractPDF($data);
    }

    private function getPDFFactory($contract_type): PDFContractFactory
    {
        switch ($contract_type) {
            case 'foreign' :
                return new PDFForeignContract();
            default :
                return new PDFForeignContract();


        }
    }

}
