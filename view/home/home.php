<?php
    $visitas = $_SESSION['parametrosView'];
    $meses = $_SESSION['meses'];
    $dias_da_semana = $_SESSION['dias_da_semana'];
    foreach ($visitas as $visita) {
        $data = strtotime($visita->data);
        $mes_visita = date('M', $data);
        $dia_visita = date('D', $data);                
        $visitas_mes[$meses[$mes_visita]]++;
        $visitas_dia[$dias_da_semana[$dia_visita]]++;  
        $visitas_pagina[$visita->pagina]++;      
    }    
    echo $visitas_mes["Junho"];
    echo $visitas_dia["Quinta-Feira"];
?>
<style type="text/css">
    canvas{
        width: 100% !important;
        max-width: 800px;
        height: auto !important;
    }
</style>
<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
        <section>
            <div class="box">
                <div class="box-title">
                    <h3 class="box-title-title"><span class="glyphicon glyphicon-th-list"></span>&nbsp;&nbsp;Informações do Site</h3>
                </div>
                <div class="box-content" >
                    <div class="container-fluid">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="row">
                                <h1 class="text-center">Visitas por Mês</h1>
                                <canvas id="chartVisitasMes" height="300" width="550"></canvas>
                            </div>                        
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="row">
                                <h1 class="text-center">Páginas mais Visitadas</h1>
                                <canvas id="chartPaginasVisitadas" height="300" width="550"></canvas>
                            </div>                        
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="row">
                                <h1 class="text-center">Visitas por Dia</h1>
                                <canvas id="chartDiasMaisVisitados" height="300" width="550"></canvas>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </section>

    	

        <?php include caminhoFisico . '/view/parts/footer.php' ?>
    </div>
</div>

<script>
var ctx = document.getElementById("chartVisitasMes");
var chartVisitasMes = new Chart(ctx, {
    type: 'line',
    data: {
    labels: [
        <?php foreach ($visitas_mes as $key => $value) {
        ?>
            "<?= $key ?>",
        <?php
        } ?>        
        ],
        datasets: [
            {
                label: "Visitas",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "rgba(75,192,192,0.4)",
                borderColor: "rgba(75,192,192,1)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(75,192,192,1)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(75,192,192,1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [
                    <?php foreach ($visitas_mes as $key => $value) {
                    ?>
                        <?= $value ?>,
                    <?php
                    } ?>
                ],
            }
        ]
    },
    options: {
        
    }
});
var ctx = document.getElementById("chartPaginasVisitadas");
var chartPaginasVisitadas = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Visitas"],
        datasets: [
        <?php foreach ($visitas_pagina as $key => $value) {
        ?>
            {
                label: '<?= $key ?>',
                data: [<?= $value ?>],
                backgroundColor: ['rgba(255, 99, 132, 0.2)'],
                borderColor: ['rgba(255,99,132,1)'],
                borderWidth: 1
            },
        <?php
        } ?>
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
var ctx = document.getElementById("chartDiasMaisVisitados");
var chartDiasMaisVisitados = new Chart(ctx, {
    type: 'line',
    data: {
    labels: [
        <?php foreach ($visitas_dia as $key => $value) {
        ?>
            "<?= $key ?>",
        <?php
        } ?>        
        ],
        datasets: [
            {
                label: "Dias",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "rgba(75,192,192,0.4)",
                borderColor: "rgba(75,192,192,1)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(75,192,192,1)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(75,192,192,1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 1,
                pointHitRadius: 10,
                data: [
                    <?php foreach ($visitas_dia as $key => $value) {
                    ?>
                        <?= $value ?>,
                    <?php
                    } ?>
                ],
            }
        ]
    },
    options: {
        
    }
});
</script>