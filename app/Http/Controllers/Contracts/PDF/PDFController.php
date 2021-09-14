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
        $data =  [
            'name'=> 'Евгений',
            'last_name' => 'Дмитриевский'
        ];
        try {
           return $factory->showContractPDF($data);

        } catch (\Exception $exception) {
            dd($exception);
        }
    }

    public function downLoadContractPDF() {
        $factory = $this->getPDFFactory('foreign');
        $data =  [
            'name'=> 'Eugene',
            'last_name' => 'Dmitrievskiy'
        ];
        try {
            return $factory->createContractPDF($data);

        } catch (\Exception $exception) {
            dd($exception);
        }
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
