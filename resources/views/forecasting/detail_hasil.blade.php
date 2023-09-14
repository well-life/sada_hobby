@extends('forecasting\template_forecasting')
@section('title')
@section('content')

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('soft-ui-dashboard-main') }}/assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="{{ asset('soft-ui-dashboard-main') }}/assets/img/favicon.png">
        <title>
            Soft UI Dashboard by Creative Tim
        </title>
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Nucleo Icons -->
        <link href="{{ asset('soft-ui-dashboard-main') }}/assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="{{ asset('soft-ui-dashboard-main') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="{{ asset('soft-ui-dashboard-main') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- CSS Files -->
        <link id="pagestyle" href="{{ asset('soft-ui-dashboard-main') }}/assets/css/soft-ui-dashboard.css?v=1.0.7"
            rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <style>

        </style>
    </head>

    <div class="card">
        <div class="card-header">
            <?php
            
            $predictiveValues = $data['predictive_value_month'];
            $predictiveValuesHotwheels = $data['predictive_value_month_hotwheels'];
            $predictiveValuesTamiya = $data['predictive_value_month_tamiya'];
            $predictiveValuesKonami = $data['predictive_value_month_konami'];
            $predictiveValuesDragonCando = $data['predictive_value_month_dragonCando'];
            $predictiveValuesTakara = $data['predictive_value_month_takara'];
            $predictiveValuesMajorette = $data['predictive_value_month_majorette'];
            $predictiveValuesMatchbox = $data['predictive_value_month_matchbox'];
            $predictiveValuesTomica = $data['predictive_value_month_tomica'];
            $predictiveValuesHachette = $data['predictive_value_month_hachette'];
            $predictiveValuesKyosho = $data['predictive_value_month_kyosho'];
            $predictiveValuesMercurySpeedy = $data['predictive_value_month_mercurySpeedy'];
            $predictiveValuesAoshima = $data['predictive_value_month_aoshima'];
            $predictiveValuesHerpa = $data['predictive_value_month_herpa'];
            $predictiveValuesCMS = $data['predictive_value_month_CMS'];
            $predictiveValuesEpoch = $data['predictive_value_month_epoch'];
            $predictiveValuesBandai = $data['predictive_value_month_bandai'];
            $predictiveValuesMaisto = $data['predictive_value_month_maisto'];
            $predictiveValuesRealtoy = $data['predictive_value_month_realtoy'];
            $predictiveValuesChoroQ = $data['predictive_value_month_choroQ'];
            $predictiveValuesBrekina = $data['predictive_value_month_brekina'];
            $predictiveValuesKintoy = $data['predictive_value_month_kintoy'];
            $predictiveValuesKinsmart = $data['predictive_value_month_kinsmart'];
            $predictiveValuesSiku = $data['predictive_value_month_siku'];
            $predictiveValuesShinsei = $data['predictive_value_month_shinsei'];
            $predictiveValuesAsahi = $data['predictive_value_month_asahi'];
            
            ?>

            <table class="table table-sm table-bordered">
                <thead>
                    <tr style="font-size: 14px;">
                        <th scope="col" style="padding: 11px;">Merek</th>
                        @for ($month = 1; $month <= 12; $month++)
                            <th scope="col" style="padding: 11px; text-align: center;">Bulan
                                {{ $month }}</th>
                        @endfor
                    </tr>
                </thead>
                <tbody>
                    <tr style="font-size: 14px;">
                        <td scope="row" style="padding: 11px; font-weight:bold">Hotwheels</td>
                        @foreach ($predictiveValuesHotwheels as $value)
                            <td style="padding: 11px; text-align: center;">{{ $value }}</td>
                        @endforeach
                    </tr>
                    <tr style="font-size: 14px;">
                        <td scope="row" style="padding: 11px; font-weight:bold">Tamiya</td>
                        @foreach ($predictiveValuesTamiya as $value)
                            <td style="padding: 11px; text-align: center;">{{ $value }}</td>
                        @endforeach
                    </tr>
                    <!-- Tambahkan baris lain untuk merek lainnya sesuai kebutuhan -->
                    <tr style="font-size: 14px;">
                        <td scope="row" style="padding: 11px; font-weight:bold">Konami</td>
                        @foreach ($predictiveValuesKonami as $value)
                            <td style="padding: 11px; text-align: center;">{{ $value }}</td>
                        @endforeach
                    </tr>
                    <tr style="font-size: 14px;">
                        <td scope="row" style="padding: 11px; font-weight:bold">Dragon Cando</td>
                        @foreach ($predictiveValuesDragonCando as $value)
                            <td style="padding: 11px; text-align: center;">{{ $value }}</td>
                        @endforeach
                    </tr>
                    <tr style="font-size: 14px;">
                        <td scope="row" style="padding: 11px; font-weight:bold">Takara</td>
                        @foreach ($predictiveValuesTakara as $value)
                            <td style="padding: 11px; text-align: center;">{{ $value }}</td>
                        @endforeach
                    </tr>
                    <tr style="font-size: 14px;">
                        <td scope="row" style="padding: 11px; font-weight:bold">Majorette</td>
                        @foreach ($predictiveValuesMajorette as $value)
                            <td style="padding: 11px; text-align: center;">{{ $value }}</td>
                        @endforeach
                    </tr>
                    <tr style="font-size: 14px;">
                        <td scope="row" style="padding: 11px; font-weight:bold">Matchbox</td>
                        @foreach ($predictiveValuesMatchbox as $value)
                            <td style="padding: 11px; text-align: center;">{{ $value }}</td>
                        @endforeach
                    </tr>
                    <tr style="font-size: 14px;">
                        <td scope="row" style="padding: 11px; font-weight:bold">Tomica</td>
                        @foreach ($predictiveValuesTomica as $value)
                            <td style="padding: 11px; text-align: center;">{{ $value }}</td>
                        @endforeach
                    </tr>
                    <tr style="font-size: 14px;">
                        <td scope="row" style="padding: 11px; font-weight:bold">Hachette</td>
                        @foreach ($predictiveValuesHachette as $value)
                            <td style="padding: 11px; text-align: center;">{{ $value }}</td>
                        @endforeach
                    </tr>
                    <tr style="font-size: 14px;">
                        <td scope="row" style="padding: 11px; font-weight:bold">Mercury Speedy</td>
                        @foreach ($predictiveValuesMercurySpeedy as $value)
                            <td style="padding: 11px; text-align: center;">{{ $value }}</td>
                        @endforeach
                    </tr>
                    <tr style="font-size: 14px;">
                        <td scope="row" style="padding: 11px; font-weight:bold">Aoshima</td>
                        @foreach ($predictiveValuesAoshima as $value)
                            <td style="padding: 11px; text-align: center;">{{ $value }}</td>
                        @endforeach
                    </tr>
                    <tr style="font-size: 14px;">
                        <td scope="row" style="padding: 11px; font-weight:bold">Herpa</td>
                        @foreach ($predictiveValuesHerpa as $value)
                            <td style="padding: 11px; text-align: center;">{{ $value }}</td>
                        @endforeach
                    </tr>
                    <tr style="font-size: 14px;">
                        <td scope="row" style="padding: 11px; font-weight:bold">CMS</td>
                        @foreach ($predictiveValuesCMS as $value)
                            <td style="padding: 11px; text-align: center;">{{ $value }}</td>
                        @endforeach
                    </tr>
                    <tr style="font-size: 14px;">
                        <td scope="row" style="padding: 11px; font-weight:bold">Epoch</td>
                        @foreach ($predictiveValuesEpoch as $value)
                            <td style="padding: 11px; text-align: center;">{{ $value }}</td>
                        @endforeach
                    </tr>
                    <tr style="font-size: 14px;">
                        <td scope="row" style="padding: 11px; font-weight:bold">Bandai</td>
                        @foreach ($predictiveValuesBandai as $value)
                            <td style="padding: 11px; text-align: center;">{{ $value }}</td>
                        @endforeach
                    </tr>
                    <tr style="font-size: 14px;">
                        <td scope="row" style="padding: 11px; font-weight:bold">Maisto</td>
                        @foreach ($predictiveValuesMaisto as $value)
                            <td style="padding: 11px; text-align: center;">{{ $value }}</td>
                        @endforeach
                    </tr>
                    <tr style="font-size: 14px;">
                        <td scope="row" style="padding: 11px; font-weight:bold">Realtoy</td>
                        @foreach ($predictiveValuesRealtoy as $value)
                            <td style="padding: 11px; text-align: center;">{{ $value }}</td>
                        @endforeach
                    </tr>
                    <tr style="font-size: 14px;">
                        <td scope="row" style="padding: 11px; font-weight:bold">ChoroQ</td>
                        @foreach ($predictiveValuesChoroQ as $value)
                            <td style="padding: 11px; text-align: center;">{{ $value }}</td>
                        @endforeach
                    </tr>
                    <tr style="font-size: 14px;">
                        <td scope="row" style="padding: 11px; font-weight:bold">Brekina</td>
                        @foreach ($predictiveValuesBrekina as $value)
                            <td style="padding: 11px; text-align: center;">{{ $value }}</td>
                        @endforeach
                    </tr>
                    <tr style="font-size: 14px;">
                        <td scope="row" style="padding: 11px; font-weight:bold">Kintoy</td>
                        @foreach ($predictiveValuesKintoy as $value)
                            <td style="padding: 11px; text-align: center;">{{ $value }}</td>
                        @endforeach
                    </tr>
                    <tr style="font-size: 14px;">
                        <td scope="row" style="padding: 11px; font-weight:bold">Kinsmart</td>
                        @foreach ($predictiveValuesKinsmart as $value)
                            <td style="padding: 11px; text-align: center;">{{ $value }}</td>
                        @endforeach
                    </tr>
                    <tr style="font-size: 14px;">
                        <td scope="row" style="padding: 11px; font-weight:bold">Siku</td>
                        @foreach ($predictiveValuesSiku as $value)
                            <td style="padding: 11px; text-align: center;">{{ $value }}</td>
                        @endforeach
                    </tr>
                    <tr style="font-size: 14px;">
                        <td scope="row" style="padding: 11px; font-weight:bold">Shinsei</td>
                        @foreach ($predictiveValuesShinsei as $value)
                            <td style="padding: 11px; text-align: center;">{{ $value }}</td>
                        @endforeach
                    </tr>
                    <tr style="font-size: 14px;">
                        <td scope="row" style="padding: 11px; font-weight:bold">Asahi</td>
                        @foreach ($predictiveValuesAsahi as $value)
                            <td style="padding: 11px; text-align: center;">{{ $value }}</td>
                        @endforeach
                    </tr>
                </tbody>
            </table>


        </div>
    </div>
@endsection
