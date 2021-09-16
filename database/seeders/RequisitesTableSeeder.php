<?php

namespace Database\Seeders;

use App\Models\Requisites;
use Illuminate\Database\Seeder;

class RequisitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $company_data = [
           'company_name' => 'ТОВАРИСТВО З ДОДАТКОВОЮ ВІДПОВІДАЛЬНІСТЮ «СТРАХОВА КОМПАНІЯ «БЕНЄФІТ»',
           'company_name_eng' => 'ADDITIONAL LIABILITY COMPANY «INSURANCE COMPANY «BENEFIT»',
           'company_address' => 'Україна, 030262, м. Київ,  Столичне шосе 101 В',
           'company_IPN'=> '38927423',
           'company_account_number' => 'IBAN: UA 54 300346 00000 2650501 6086201 в АТ «АЛЬФА-БАНК»',
           'company_web' => 'https://benefit-ic.com/',
           'company_phone_number' => '0 800 33-05-54'
       ];

        Requisites::create($company_data);
    }
}
