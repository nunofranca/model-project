@extends('layout.index')
@section('css')
@stop
@section('content')



    <div class="row">

        <div class="col-20 mt-30">

            <div class="dash-info-icon black">
                <div class="col">
                    <span class="big-text">15</span>
                    <span class="small-text">New Users</span>
                </div>
                <div class="col">
                            <span class="icon">
                                <i class="fas fa-user"></i>
                            </span>
                </div>
                <a href="#" class="read-more">Ver detalhes</a>
            </div>

        </div>

        <div class="col-20 mt-30">

            <div class="dash-info-icon dark">
                <div class="col">
                    <span class="big-text">2050</span>
                    <span class="small-text">Total Orders</span>
                </div>
                <div class="col">
                            <span class="icon">
                                <i class="fas fa-shopping-cart"></i>
                            </span>
                </div>
                <a href="#" class="read-more">Ver detalhes</a>
            </div>

        </div>

        <div class="col-20 mt-30">

            <div class="dash-info-icon blue">
                <div class="col">
                    <span class="big-text">3250</span>
                    <span class="small-text">Total Expenses</span>
                </div>
                <div class="col">
                            <span class="icon">
                                <i class="fas fa-wallet"></i>
                            </span>
                </div>
                <a href="#" class="read-more">Ver detalhes</a>
            </div>

        </div>

        <div class="col-20 mt-30">

            <div class="dash-info-icon yellow">
                <div class="col">
                    <span class="big-text">87.52%</span>
                    <span class="small-text">Total Revenue</span>
                </div>
                <div class="col">
                            <span class="icon">
                                <i class="fas fa-chart-pie"></i>
                            </span>
                </div>
                <a href="#" class="read-more">Ver detalhes</a>
            </div>

        </div>

        <div class="col-20 mt-30">

            <div class="dash-info-icon ocean">
                <div class="col">
                    <span class="big-text">87.52%</span>
                    <span class="small-text">Total Revenue</span>
                </div>
                <div class="col">
                            <span class="icon">
                                <i class="fas fa-chart-pie"></i>
                            </span>
                </div>
                <a href="#" class="read-more">Ver detalhes</a>
            </div>

        </div>

        <div class="col-33 mt-30">

            <div class="dash-info-icon green big">
                <div class="col">
                    <span class="big-text">R$ 5.750,00</span>
                    <span class="small-text">cash in the box</span>
                </div>
                <div class="col">
                            <span class="icon">
                                <i class="fas fa-money-check-alt"></i>
                            </span>
                </div>
                <a href="#" class="read-more">Ver detalhes</a>
            </div>

        </div>

        <div class="col-33 mt-30">

            <div class="dash-info-icon red big">
                <div class="col">
                    <span class="big-text">R$ 1.500,00</span>
                    <span class="small-text">Current Debt</span>
                </div>
                <div class="col">
                            <span class="icon">
                                <i class="fas fa-minus"></i>
                            </span>
                </div>
                <a href="#" class="read-more">Ver detalhes</a>
            </div>

        </div>

        <div class="col-33 mt-30">

            <div class="dash-info-icon gray big">
                <div class="col">
                    <span class="big-text">R$ 1.500,00</span>
                    <span class="small-text">Current Debt</span>
                </div>
                <div class="col">
                            <span class="icon">
                                <i class="fas fa-minus"></i>
                            </span>
                </div>
                <a href="#" class="read-more">Ver detalhes</a>
            </div>

        </div>

        <div class="col-33 mt-30">

            <div class="dash-info-icon green big">
                <div class="col">
                    <span class="big-text">R$ 5.750,00</span>
                    <span class="small-text">cash in the box</span>
                </div>
                <div class="col">
                            <span class="icon">
                                <i class="fas fa-money-check-alt"></i>
                            </span>
                </div>
            </div>

        </div>

        <div class="col-33 mt-30">

            <div class="dash-info-icon red big">
                <div class="col">
                    <span class="big-text">R$ 1.500,00</span>
                    <span class="small-text">Current Debt</span>
                </div>
                <div class="col">
                            <span class="icon">
                                <i class="fas fa-minus"></i>
                            </span>
                </div>
            </div>

        </div>

        <div class="col-33 mt-30">

            <div class="dash-info-icon gray big">
                <div class="col">
                    <span class="big-text">R$ 1.500,00</span>
                    <span class="small-text">Current Debt</span>
                </div>
                <div class="col">
                            <span class="icon">
                                <i class="fas fa-minus"></i>
                            </span>
                </div>
            </div>

        </div>

    </div>

    <div class="row pb-30">

        <div class="col-40 mt-30">

            <div class="card">

                <div class="heading split-col">
                    <div class="col">
                        <span class="title">Pie</span>
                    </div>
                    <div class="col">
                        <a href="#" class="btn btn-dark-gray" title="Filtrar">
                            <i class="fas fa-filter"></i>
                        </a>
                    </div>
                </div>

                <div class="body">
                    <canvas id="pie" height="320"></canvas>
                </div>

            </div>

        </div>

        <div class="col-60 mt-30">

            <div class="card">

                <div class="heading split-col">
                    <div class="col">
                        <span class="title">Line</span>
                    </div>
                    <div class="col">
                        <a href="#" class="btn btn-dark-gray" title="Filtrar">
                            <i class="fas fa-filter"></i>
                        </a>
                    </div>
                </div>

                <div class="body">
                    <canvas id="line" height="320"></canvas>
                </div>

            </div>

        </div>

    </div>

    <!-- modal sidebar -->
    <div class="modal sidebar" id="modal-sidebar" tabindex="-1" role="dialog">

        <div class="content">

            <a href="#" class="close">x</a>

            <div class="header">
                <p>Filtrar dashboard</p>
            </div>

            <div class="body scrollbar-macosx">
                ...
            </div>

            <div class="footer">
                <div class="row">
                    <div class="col-100">
                        <a href="#" class="btn btn-blue btn-block">
                            <i class="fas fa-filter"></i>
                            Aplicar filtro
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>


@stop
@section('js')
    <!-- box-general -->

    <!-- bundle -->
    <script src="../assets/bundle/app.js"></script>

    <!-- plugins -->
    <script src="../assets/plugins/chartjs/chart.js"></script>

    <!-- custom js -->
    <script src="../assets/js/custom.js"></script>

    <!-- fix error -->
    <script src="../assets/js/fix-error.js"></script>

    <script>
        (function ($) {

            // chart pie style
            var pie = document.getElementById('pie').getContext('2d');
            var chart_pie = new Chart(pie, {
                type: 'pie',
                data: {
                    labels: ['NF-e', 'NFC-e', 'CF-e-SAT'],
                    datasets: [{
                        data: [12, 19, 5],
                        backgroundColor: [
                            'rgba(26, 115, 232, 0.3)',
                            'rgba(111, 125, 151, 0.3)',
                            'rgba(135, 183, 184, 0.3)',
                        ],
                        borderColor: [
                            'rgba(26, 115, 232, 0.5)',
                            'rgba(111, 125, 151, 0.5)',
                            'rgba(135, 183, 184, 0.5)',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                }
            });

            // chart line style
            var line = document.getElementById('line').getContext('2d');
            var chart_line = new Chart(line, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
                    datasets: [{
                        label: 'NF-e',
                        data: [12, 19, 3, 5, 2, 3],
                        borderColor: "rgba(26, 115, 232, 0.5)",
                        backgroundColor: "rgba(26, 115, 232, 0.3)",
                    },
                        {
                            label: 'NFC-e',
                            data: [19, 12, 5, 8, 3, 10],
                            borderColor: "rgba(111, 125, 151, 0.5)",
                            backgroundColor: "rgba(111, 125, 151, 0.3)",
                        },
                        {
                            label: 'CF-e-SAT',
                            data: [2, 7, 6, 4, 1, 2],
                            borderColor: "rgba(135, 183, 184, 0.5)",
                            backgroundColor: "rgba(135, 183, 184, 0.3)",
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    interaction: {
                        mode: 'index',
                        intersect: false,
                    },
                }
            });

        })(jQuery);

    </script>
@stop
