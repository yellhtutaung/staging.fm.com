<?php echo View::make ('frontend.layouts.head'); ?>


<link rel="stylesheet" href="{{asset('frontend-assets/css/client/ourclients.css')}}"/>
<link rel="stylesheet" href="{{asset('frontend-assets/css/client/featureplans.css')}}"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
    .client_banner {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("{{asset('frontend-assets/images/client_banner.jpg')}}");
        margin-top: 140px;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>

</head>
<body>

{{--navbar layout start--}}
<?php echo View::make ('frontend.layouts.navbar'); ?>
{{--navbar layout end--}}

{{--feature plans start--}}
<div class="container">
    <section style="margin-top: 160px" >
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div id="chart"></div>
                </div>
            </div>
        </div>
    </section>
</div>
{{--feature plans end --}}

{{--footer start--}}
<?php //echo View::make ('frontend.layouts.footer'); ?>
{{--footer end--}}


<?php echo View::make ('frontend.layouts.aos'); ?>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>


    const options = {
        colors: ['#5BBA47', '#ED1C24'],
        series: [{
            name: 'series1',
            data: [31., 40, 28, 51, 42, 109, 100],

        }, {
            name: 'series2',
            data: [11, 32, 45, 32, 34, 52, 41]
        }],
        chart: {
            height: 500,
            type: 'area'
        },
        dataLabels: {
            enabled: true
        },
        stroke: {
            curve: 'smooth'
        },
        xaxis: {
            // type: 'datetime',
            categories: ["Apple","Orange","Lemon","Banana","Kiwi","Grapes","Blueberry"]
            // categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
        },
        tooltip: {
            x: {
                // format: 'dd/MM/yy HH:mm'
            },
        },
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();

    $('.apexcharts-toolbar').addClass('d-none');

</script>


<body/>
<html/>
