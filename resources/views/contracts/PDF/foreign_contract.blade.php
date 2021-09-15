@extends('contracts.PDF.layouts.contract-layout')
@section('contract_content')
    <div class="container">
        @include('contracts.PDF.parts.header')
        <p class="header__text"><strong>Страховий захист надається відповідно «Рішення Ради ЄС 2004\17\EG щодо медичного страхування подорожуючих осіб» Страхування здійснюється на підставі Ліцензій АЕ №522642, АЕ№522634, Правил добровільного страхування медичних витрат та Правил добровільного страхування від нещасних випадків (надалі – Правила)  The Insurance provided under the Licences Series АЕ №522642 and Series АЕ №522634, under the Rules of voluntary medical expenses insurance and under the Rules of voluntary accident insurance (hereinafter referred to as Rules)</strong></p>
        <br>
        @include('contracts.PDF.parts.body')
        <p style="margin-top: 5px">ТОВАРИСТВО З ДОДАТКОВОЮ ВІДПОВІДАЛЬНІСТЮ «СТРАХОВА КОМПАНІЯ «БЕНЄФІТ»  Адреса:
            Україна,030262, м. Київ, Столичне шосе 101 В,   тел. 0 800 33-05-54 Insurer: ADDITIONAL LIABILITY COMPANY «INSURANCE COMPANY «BENEFIT» Координати Контакт центра: +38 044 594 27 94 (мова спілкування українська, російська, англійська)</p>
        <hr>
        @include('contracts.PDF.parts.header')
        @include('contracts.PDF.parts.body')
        <hr>
        @include('contracts.PDF.parts.header')
        @include('contracts.PDF.parts.body')

    </div>
@endsection
