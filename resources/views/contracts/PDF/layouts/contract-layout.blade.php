<!doctype html>
<html lang="ua">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <title>Заява про приєднання</title>
    <style>
        @font-face {
            font-family: "DejaVu Sans";
            font-style: normal;
            font-weight: 400;
            {{--src: url({{asset("/fonts/DejaVuSans.ttf")}}),--}}
            {{--    /* IE9 Compat Modes */ url({{asset("/fonts/DejaVuSans.ttf")}}); format("truetype");--}}
        }
        @font-face {
            font-family: "DejaVu Sans";
            font-style: normal;
            font-weight: 900;
            {{--src: url({{asset("/fonts/DejaVuSans-Bold.ttf")}}),--}}
            {{--    /* IE9 Compat Modes */ url({{asset("/fonts/DejaVuSans-Bold.ttf")}}); format("truetype");--}}
        }
        html, body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            line-height: 0.8;
        }
        p {
            margin: 0;
            padding: 0;
        }
        body {
            font-family: "DejaVu Sans";
            font-size: 10px;
        }
        ul {
            margin-top: 0;
            margin-bottom: 0;
        }
        .container {
            margin-top: 20px;
            margin-left: 20px;
            width: 100%;
            max-width: 738px;
        }
        .text-uppercase {
            text-transform: uppercase;
        }
        .text-9 {
            font-size: 9px;
        }
        .text-8 {
            font-size: 8px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        .header {
            width: 100%;
        }
        .header__title {
            font-size: 16px;
            text-align: center;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: .2px;
        }
        .header__text {
            text-align: center;
            font-size: 13px;
            margin-bottom: 3px;
        }
        .header__text--number {
            font-weight: 900;
            font-size: 14px;
        }
        .header__logo-container {
            width: 210px;
        }
        .header__title-container {
            padding-left: 30px;
        }
        .header__logo-container img {
            vertical-align: top;
            display: inline-block;
            width: 100%;
            height: auto;
            object-fit: contain;
        }
        .table__data--header {
            width: 510px;
            padding-left: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
@yield('contract_content')
</body>
</html>
