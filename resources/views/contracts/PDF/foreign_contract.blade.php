@extends('contracts.PDF.layouts.contract-layout')
@section('contract_content')
    <div class="container">
        @include('contracts.PDF.parts.header')
        <p class="header__text"><strong>Страховий захист надається відповідно «Рішення Ради ЄС 2004\17\EG щодо медичного страхування подорожуючих осіб» Страхування здійснюється на підставі Ліцензій АЕ №522642, АЕ№522634, Правил добровільного страхування медичних витрат та Правил добровільного страхування від нещасних випадків (надалі – Правила)  The Insurance provided under the Licences Series АЕ №522642 and Series АЕ №522634, under the Rules of voluntary medical expenses insurance and under the Rules of voluntary accident insurance (hereinafter referred to as Rules)</strong></p>
        <br>
        <table style="border: 1px solid black">
            <tbody>
            <tr>
                <td style="border: 1px solid black;">Територія дії</td>
                <td rowspan="2"
                    style="border: 1px solid black; font-size: 8px;">
                    Європа/Europe
                </td>
                <td style="border: 1px solid black;">Строк дії</td>
                <td rowspan="2"
                    style=" border: 1px solid black; font-size: 8px;">
                   19/09/2021
                </td>
                <td style="border: 1px solid black;">По</td>
                <td rowspan="2"
                    style="border: 1px solid black; font-size: 8px;">
                    19/09/2022
                </td>
                <td style="border: 1px solid black;">Кількість днів</td>
                <td rowspan="2"
                    style="border: 1px solid black; font-size: 8px;">
                   90
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black;">Territory covered</td>
                <td style="border: 1px solid black;">Valid from</td>
                <td style="border: 1px solid black;">Till</td>
                <td style="border: 1px solid black;">Duration (days)</td>
            </tr>
            <tr>
                <td style="border: 1px solid black;">Програма страхування</td>
                <td rowspan="2"
                    style="border: 1px solid black; font-size: 8px;">
                    A
                </td>
                <td rowspan="2"
                    colspan="3"
                    style="border: 1px solid black; font-size: 8px;">
                    Група ризику/ Risk group
                </td>
                <td style="border: 1px solid black;">Робота
                </td>
                <td style="border: 1px solid black; font-size: 8px;">
                    Навчання
                </td>
                <td style="border: 1px solid black;">Спорт</td>
            </tr>
            <tr>
                <td style="border: 1px solid black;">Insurance programme</td>
                <td style="border: 1px solid black;">X</td>
                <td style="border: 1px solid black;"></td>
                <td style="border: 1px solid black;"></td>
            </tr>
            <tr>
                <td style="border: 1px solid black;">Cтрахувальник / Insured</td>
                <td style="border: 1px solid black;">Дані паспорту /Passport</td>
                <td style="border: 1px solid black;">Дата народження/Birth date</td>
                <td style="border: 1px solid black;">Знижки/надбавки(%) </td>
                <td rowspan="2" style="border: 1px solid black;">10</td>
                <td colspan="2" style="border: 1px solid black;">Франшиза</td>
                <td  rowspan="2" style="border: 1px solid black;">50</td>
            </tr>
            <tr>
                <td rowspan="2" style="border: 1px solid black;">Chereda Olelsandr</td>
                <td rowspan="2" style="border: 1px solid black;">EK419790</td>
                <td rowspan="2" style="border: 1px solid black;">03/19/1977</td>
                <td style="border: 1px solid black;">Discount/Allowance(%)</td>
                <td colspan="2" style="border: 1px solid black;">Deductible</td>
            </tr>
            <tr>
                <td  style="border: 1px solid black;">Кількість осіб </td>
                <td rowspan="3" style="border: 1px solid black;">1</td>
                <td colspan="2" style="border: 1px solid black">Страхова сума на одну особу</td>
                <td style="border: 1px solid black;">Страхова премія на одну особу</td>
            </tr>
            <tr>

                                <td style="border: 1px solid black; ">Адреса, телефон</td>
                                <td rowspan="2" colspan="2" style="border: 1px solid black;">Kiev</td>
                                <td rowspan="2" style="border: 1px solid black;">Persons</td>
                                <td rowspan="2" colspan="2" style="border: 1px solid black;">Amount insured per
                                    person</td>
                                <td rowspan="2" style="border: 1px solid black;">Insurance premium per person</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; ">Address, phone </td>
            </tr>
            <tr>
                <td colspan="3" style="border: 1px solid black; ">Застраховані особи/Insured persons</td>
                <td colspan="2" style="border: 1px solid black; ">Медичні витрати</td>
                <td  colspan="2" rowspan="2" style="border: 1px solid black; ">30000 EUR</td>
                <td rowspan="2" style="border: 1px solid black; ">100.00</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; ">Chereda Olelsandr</td>
                <td style="border: 1px solid black; ">EK419790</td>
                <td style="border: 1px solid black; ">03/19/1977</td>
                <td colspan="2"  style="border: 1px solid black; ">Medical expenses</td>
            </tr>
            <tr>
                <td rowspan="2" style="border: 1px solid black; ">&nbsp;</td>
                <td rowspan="2" style="border: 1px solid black; ">&nbsp;</td>
                <td rowspan="2" style="border: 1px solid black; ">&nbsp;</td>
                <td colspan="2" style="border: 1px solid black; ">Від нещасних випадків (грн.)</td>
                <td  colspan="2" rowspan="2" style="border: 1px solid black; ">10000 EUR</td>
                <td rowspan="2" style="border: 1px solid black; ">10.00</td>
            </tr>
            <tr>
                <td colspan="2" style="border: 1px solid black; ">Accident insurance (UAH)</td>
            </tr>
            <tr>
                <td  style="border: 1px solid black; ">&nbsp;</td>
                <td  style="border: 1px solid black; ">&nbsp;</td>
                <td  style="border: 1px solid black; ">&nbsp;</td>
                <td colspan="2" style="border: 1px solid black; ">Цивільна відповідальність/Public liability</td>
                <td  colspan="2" style="border: 1px solid black; ">30000 EUR</td>
                <td  style="border: 1px solid black; ">100.00</td>
            </tr>
            <tr>
                <td  style="border: 1px solid black; ">&nbsp;</td>
                <td  style="border: 1px solid black; ">&nbsp;</td>
                <td  style="border: 1px solid black; ">&nbsp;</td>
                <td colspan="4" style="border: 1px solid black; ">Загальна страхова премія (грн.)/Total bonus (UAH)
                </td>
                <td style="border: 1px solid black; ">210.00</td>
            </tr>
            <tr>
                <td rowspan="2" style="border: 1px solid black; ">Вигодонабувач/Beneficiary</td>
                <td rowspan="2" colspan="2" style="border: 1px solid black; ">&nbsp;</td>
                <td colspan="4" style="border: 1px solid black; ">Дата видачі / Issue date</td>
                <td  style="border: 1px solid black; ">08/02/2016</td>
            </tr>
            <tr>
                <td colspan="4" style="border: 1px solid black; ">Агент</td>
                <td style="border: 1px solid black; ">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="3" style="border: 1px solid black; ">З правилами страхування ознайомлені та згодні.</td>
                <td colspan="3" style="border: 1px solid black; ">Підпис Страхувальника</td>
                <td colspan="2" style="border: 1px solid black; ">Підпис Страховика </td>
            </tr>

            </tbody>
        </table>
        <p style="margin-top: 5px">ТОВАРИСТВО З ДОДАТКОВОЮ ВІДПОВІДАЛЬНІСТЮ «СТРАХОВА КОМПАНІЯ «БЕНЄФІТ»  Адреса:
            Україна,030262, м. Київ, Столичне шосе 101 В,   тел. 0 800 33-05-54 Insurer: ADDITIONAL LIABILITY COMPANY «INSURANCE COMPANY «BENEFIT» Координати Контакт центра: +38 044 594 27 94 (мова спілкування українська, російська, англійська)</p>
        <hr>
        @include('contracts.PDF.parts.header')


    </div>
@endsection
