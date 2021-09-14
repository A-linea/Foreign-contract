<table class="header">
    <tbody class="header__inner">
    <tr>
        <td class="header__logo-container">
            <img src="{{asset('images/benefit-logo.jpg')}}" alt="">
        </td>
        <td class="header__title-container">
            <h1 class="header__title">{{$is_preview ? "Проект заяви про приєднання" : "Заява про приєднання"}}</h1>
            <p class="header__text"><strong> до Публічної пропозиції (Оферти) щодо укладення
                    електронного договору</strong></p>
            <p class="header__text"><strong> Добровільного страхування наземного транспорту</strong></p>
        </td>
    </tr>
    <tr>
        <td class="table__data "></td>
        <td class="table__data table__data--header"><strong class="header__text--number">№ {{$is_preview ?
        "______________" :   $order->contract->number . " від " . \Carbon\Carbon::parse($order->contract->conclusion_date)->format('d.m.Y') . "р."}}</strong>
        </td>
    </tr>
    <tr>
        <td style="width: 205px;"><small>Асистуюча служба: </small><strong class="header__text">0 800 33-05-54</strong></td>
    </tr>
    </tbody>
</table>
