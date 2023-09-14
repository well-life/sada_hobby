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
            .chart-container {
                position: relative;
            }

            #mse-value {
                position: absolute;
                top: 310px;
                right: 50px;
                font-weight: bold;
            }
        </style>
    </head>
    <div class="card">
        <div class="card-header">
            @if (session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif

            <div style="display: flex; align-items: center;">
                <select id="category" class="form-select form-select-lg mt-n1 me-3" aria-label=".form-select-lg example"
                    style="width: 300px;">
                    <option value="penjualan">Penjualan</option>
                    <option value="hotwheels">Hotwheels</option>
                    <option value="tamiya">Tamiya</option>
                    <option value="efsi">Efsi</option>
                    <option value="konami">Konami</option>
                    <option value="dragonCando">Dragon Cando</option>
                    <option value="takara">Takara</option>
                    <option value="majorette">Majorette</option>
                    <option value="matchbox">Matchbox</option>
                    <option value="tomica">Tomica</option>
                    <option value="hachette">Hachette</option>
                    <option value="kyosho">Kyosho</option>
                    <option value="mercurySpeedy">Mercury Speedy</option>
                    <option value="aoshima">Aoshima</option>
                    <option value="herpa">Herpa</option>
                    <option value="CMS">CMS</option>
                    <option value="epoch">Epoch</option>
                    <option value="bandai">Bandai</option>
                    <option value="maisto">Maisto</option>
                    <option value="realtoy">Realtoy</option>
                    <option value="choroQ">ChoroQ</option>
                    <option value="brekina">Brekina</option>
                    <option value="kintoy">Kintoy</option>
                    <option value="kinsmart">Kinsmart</option>
                    <option value="siku">Siku</option>
                    <option value="shinsei">Shinsei</option>
                    <option value="asahi">Asahi</option>
                </select>
                <button id="submit-button" class="btn btn-success mt-3">Submit</button>
            </div>
            <a id="detail-hasil" class="btn btn-info mt-1" href="{{ route('detail-hasil') }}">Detail Hasil</a>
        </div>

        <center>
            <h3>Grafik Perbandingan Penjualan <br /> <span id='text-span2'></span></h3>
        </center>
        <div class="card-body">

            <div style="width: 800px; height: 500px; margin: auto auto">
                <canvas id="myChart"></canvas>
                <div id="mse-value">MSE: <br /><span id='text-span'></span></div>
            </div>
            <script>
                const labels2022 = [
                    'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
                ];
                const labels2023 = [
                    'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
                ];


                const actualValueData = {
                    penjualan: <?php echo json_encode(array_slice($data['actual_value_month'], 0, 12)); ?>,
                    hotwheels: <?php echo json_encode(array_slice($data['actual_value_month_hotwheels'], 0, 12)); ?>,
                    efsi: <?php echo json_encode(array_slice($data['actual_value_month_efsi'], 0, 12)); ?>,
                    tomica: <?php echo json_encode(array_slice($data['actual_value_month_tomica'], 0, 12)); ?>,
                    majorette: <?php echo json_encode(array_slice($data['actual_value_month_majorette'], 0, 12)); ?>,
                    tamiya: <?php echo json_encode(array_slice($data['actual_value_month_tamiya'], 0, 12)); ?>,
                    konami: <?php echo json_encode(array_slice($data['actual_value_month_konami'], 0, 12)); ?>,
                    dragonCando: <?php echo json_encode(array_slice($data['actual_value_month_dragonCando'], 0, 12)); ?>,
                    takara: <?php echo json_encode(array_slice($data['actual_value_month_takara'], 0, 12)); ?>,
                    matchbox: <?php echo json_encode(array_slice($data['actual_value_month_matchbox'], 0, 12)); ?>,
                    hachette: <?php echo json_encode(array_slice($data['actual_value_month_hachette'], 0, 12)); ?>,
                    kyosho: <?php echo json_encode(array_slice($data['actual_value_month_kyosho'], 0, 12)); ?>,
                    mercurySpeedy: <?php echo json_encode(array_slice($data['actual_value_month_mercurySpeedy'], 0, 12)); ?>,
                    aoshima: <?php echo json_encode(array_slice($data['actual_value_month_aoshima'], 0, 12)); ?>,
                    herpa: <?php echo json_encode(array_slice($data['actual_value_month_herpa'], 0, 12)); ?>,
                    CMS: <?php echo json_encode(array_slice($data['actual_value_month_CMS'], 0, 12)); ?>,
                    epoch: <?php echo json_encode(array_slice($data['actual_value_month_epoch'], 0, 12)); ?>,
                    bandai: <?php echo json_encode(array_slice($data['actual_value_month_bandai'], 0, 12)); ?>,
                    maisto: <?php echo json_encode(array_slice($data['actual_value_month_maisto'], 0, 12)); ?>,
                    realtoy: <?php echo json_encode(array_slice($data['actual_value_month_realtoy'], 0, 12)); ?>,
                    choroQ: <?php echo json_encode(array_slice($data['actual_value_month_choroQ'], 0, 12)); ?>,
                    brekina: <?php echo json_encode(array_slice($data['actual_value_month_brekina'], 0, 12)); ?>,
                    kintoy: <?php echo json_encode(array_slice($data['actual_value_month_kintoy'], 0, 12)); ?>,
                    kinsmart: <?php echo json_encode(array_slice($data['actual_value_month_kinsmart'], 0, 12)); ?>,
                    siku: <?php echo json_encode(array_slice($data['actual_value_month_siku'], 0, 12)); ?>,
                    shinsei: <?php echo json_encode(array_slice($data['actual_value_month_shinsei'], 0, 12)); ?>,
                    asahi: <?php echo json_encode(array_slice($data['actual_value_month_asahi'], 0, 12)); ?>,
                };

                const predictiveValueData = {
                    penjualan: <?php echo json_encode(array_slice($data['predictive_value_month'], 0, 12)); ?>,
                    hotwheels: <?php echo json_encode(array_slice($data['predictive_value_month_hotwheels'], 0, 12)); ?>,
                    efsi: <?php echo json_encode(array_slice($data['predictive_value_month_efsi'], 0, 12)); ?>,
                    tomica: <?php echo json_encode(array_slice($data['predictive_value_month_tomica'], 0, 12)); ?>,
                    majorette: <?php echo json_encode(array_slice($data['predictive_value_month_majorette'], 0, 12)); ?>,
                    tamiya: <?php echo json_encode(array_slice($data['predictive_value_month_tamiya'], 0, 12)); ?>,
                    konami: <?php echo json_encode(array_slice($data['predictive_value_month_konami'], 0, 12)); ?>,
                    dragonCando: <?php echo json_encode(array_slice($data['predictive_value_month_dragonCando'], 0, 12)); ?>,
                    takara: <?php echo json_encode(array_slice($data['predictive_value_month_takara'], 0, 12)); ?>,
                    matchbox: <?php echo json_encode(array_slice($data['predictive_value_month_matchbox'], 0, 12)); ?>,
                    hachette: <?php echo json_encode(array_slice($data['predictive_value_month_hachette'], 0, 12)); ?>,
                    kyosho: <?php echo json_encode(array_slice($data['predictive_value_month_kyosho'], 0, 12)); ?>,
                    mercurySpeedy: <?php echo json_encode(array_slice($data['predictive_value_month_mercurySpeedy'], 0, 12)); ?>,
                    aoshima: <?php echo json_encode(array_slice($data['predictive_value_month_aoshima'], 0, 12)); ?>,
                    herpa: <?php echo json_encode(array_slice($data['actual_value_month_herpa'], 0, 12)); ?>,
                    CMS: <?php echo json_encode(array_slice($data['predictive_value_month_CMS'], 0, 12)); ?>,
                    epoch: <?php echo json_encode(array_slice($data['predictive_value_month_epoch'], 0, 12)); ?>,
                    bandai: <?php echo json_encode(array_slice($data['predictive_value_month_bandai'], 0, 12)); ?>,
                    maisto: <?php echo json_encode(array_slice($data['predictive_value_month_maisto'], 0, 12)); ?>,
                    realtoy: <?php echo json_encode(array_slice($data['predictive_value_month_realtoy'], 0, 12)); ?>,
                    choroQ: <?php echo json_encode(array_slice($data['predictive_value_month_choroQ'], 0, 12)); ?>,
                    brekina: <?php echo json_encode(array_slice($data['predictive_value_month_brekina'], 0, 12)); ?>,
                    kintoy: <?php echo json_encode(array_slice($data['predictive_value_month_kintoy'], 0, 12)); ?>,
                    kinsmart: <?php echo json_encode(array_slice($data['predictive_value_month_kinsmart'], 0, 12)); ?>,
                    siku: <?php echo json_encode(array_slice($data['predictive_value_month_siku'], 0, 12)); ?>,
                    shinsei: <?php echo json_encode(array_slice($data['predictive_value_month_shinsei'], 0, 12)); ?>,
                    asahi: <?php echo json_encode(array_slice($data['predictive_value_month_asahi'], 0, 12)); ?>,
                };

                const mseValue = {
                    penjualan: <?php echo json_encode($data['mse_sales']); ?>,
                    hotwheels: <?php echo json_encode($data['mse_hotwheels']); ?>,
                    efsi: <?php echo json_encode($data['mse_efsi']); ?>,
                    tomica: <?php echo json_encode($data['mse_tomica']); ?>,
                    majorette: <?php echo json_encode($data['mse_majorette']); ?>,
                    tamiya: <?php echo json_encode($data['mse_tamiya']); ?>,
                    konami: <?php echo json_encode($data['mse_konami']); ?>,
                    dragonCando: <?php echo json_encode($data['mse_dragonCando']); ?>,
                    takara: <?php echo json_encode($data['mse_takara']); ?>,
                    matchbox: <?php echo json_encode($data['mse_matchbox']); ?>,
                    hachette: <?php echo json_encode($data['mse_hachette']); ?>,
                    kyosho: <?php echo json_encode($data['mse_kyosho']); ?>,
                    mercurySpeedy: <?php echo json_encode($data['mse_mercurySpeedy']); ?>,
                    aoshima: <?php echo json_encode($data['mse_aoshima']); ?>,
                    herpa: <?php echo json_encode($data['mse_herpa']); ?>,
                    CMS: <?php echo json_encode($data['mse_CMS']); ?>,
                    epoch: <?php echo json_encode($data['mse_epoch']); ?>,
                    bandai: <?php echo json_encode($data['mse_bandai']); ?>,
                    maisto: <?php echo json_encode($data['mse_maisto']); ?>,
                    realtoy: <?php echo json_encode($data['mse_reltoy']); ?>,
                    choroQ: <?php echo json_encode($data['mse_choroQ']); ?>,
                    brekina: <?php echo json_encode($data['mse_brekina']); ?>,
                    kintoy: <?php echo json_encode($data['mse_kintoy']); ?>,
                    kinsmart: <?php echo json_encode($data['mse_kinsmart']); ?>,
                    siku: <?php echo json_encode($data['mse_siku']); ?>,
                    shinsei: <?php echo json_encode($data['mse_shinsei']); ?>,
                    asahi: <?php echo json_encode($data['mse_asahi']); ?>,
                };

                const data = {
                    labels: [...labels2022, ...labels2023],
                    datasets: [{
                            label: 'Barang Terjual Aktual',
                            backgroundColor: 'rgb(255, 99, 132)',
                            borderColor: 'rgb(255, 99, 132)',
                            data: [...actualValueData.hotwheels, ...Array(12).fill(null)],
                            fill: false,
                            lineTension: 0,
                            borderDash: [8, 4]
                        },
                        {
                            label: 'Barang Terjual Prediksi',
                            backgroundColor: 'rgb(54, 162, 235)',
                            borderColor: 'rgb(54, 162, 235)',
                            data: [...Array(12).fill(null), ...predictiveValueData.hotwheels],
                            fill: false,
                            lineTension: 0
                        }
                    ]
                };

                const ctx = document.getElementById('myChart').getContext('2d');
                let myChart = new Chart(ctx, {
                    type: 'line',
                    data: data,
                    options: {
                        responsive: true,
                        scales: {
                            xAxes: [{
                                gridLines: {
                                    drawOnChartArea: false
                                }
                            }],
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        plugins: {
                            legend: {
                                position: 'bottom',
                                labels: {
                                    fontColor: 'black',
                                    boxWidth: 20,
                                    usePointStyle: true
                                }
                            },
                            tooltips: {
                                enabled: true
                            },
                        }
                    }
                });

                const category = document.getElementById('category');
                const submitButton = document.getElementById('submit-button');
                const spanElement = document.getElementById('text-span');

                submitButton.addEventListener('click', function() {
                    const selectedCategory = category.value;
                    spanElement.textContent = mseValue[selectedCategory];
                    const selectedOption = category.options[category.selectedIndex].text;
                    const textSpan = document.getElementById("text-span2");

                    if (selectedOption !== "Penjualan") {
                        // Mengubah teks pada elemen span
                        textSpan.textContent = selectedOption;
                    } else {
                        textSpan.textContent = '';
                    }

                    // Update dataset values and mse property
                    myChart.data.datasets[0].data = [...actualValueData[selectedCategory], ...Array(12).fill(null)];
                    myChart.data.datasets[1].data = [...Array(12).fill(null), ...predictiveValueData[selectedCategory]];

                    myChart.update(); // Update the chart with new data
                });
            </script>
        </div>

    @endsection
