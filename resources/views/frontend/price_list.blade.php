<?php echo View::make ('frontend.layouts.head'); ?>
<link rel="stylesheet" href="{{asset('frontend-assets/css/client/ourclients.css')}}"/>
<link rel="stylesheet" href="{{asset('frontend-assets/css/client/featureplans.css')}}"/>
<link rel="stylesheet" href="{{asset('frontend-assets/css/animated.min.css')}}"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
<div class="container-fluid p-lg-5">
    <section style="margin-top: 160px" >
        <div class="d-flex justify-content-between">
            <h4 class="text-bold title-fm"> REALTIME PRICE LIST </h4>
            <h4 class="text-bold title-fm "> MORE ITEM </h4>
        </div>

        {{--        <h4 class="d-inline theme_green_color">Fresh</h4><h4 class="d-inline theme_red_color">Moe</h4>--}}
        <div class="row my-2">
            <div class="col-sm-12 col-md-9">
                <div class="card shadow-sm">
                    <div id="chart"></div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="card animate__animated animate__bounceInRight  overflow-hidden" >
                    <div class="card-header theme_bg text-white">
                        SEARCH FRUITS
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group">
                                <label for="Choose">Choose Fruit</label>
                                <select class="form-control js-example-basic-multiple border-success" style="height: 70px!important;" name="fruits[]" multiple="multiple">
                                    <option value="Watermelons">Watermelons</option>
                                    <option value="Pomegranates">Pomegranates</option>
                                    <option value="Tangerines">Tangerines</option>
                                    <option value="Papayas">Papayas</option>
                                    <option value="Citrus ">Citrus</option>
                                    <option value="Coconut">Coconut</option>
                                    <option value="Cranberry">Cranberry</option>
                                    <option value="Tomato">Tomato</option>
                                    <option value="Zucchini">Zucchini</option>
                                    <option value="Cloudberry">Cloudberry</option>
                                </select>
                            </div>

                            <div class="form-group mt-4">
                                <input type="button" class="btn theme_bg text-white w-100" value="CHECK">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
    </section>
    <hr class="my-5">
</div>
{{--feature plans end --}}

<?php echo View::make ('frontend.layouts.footer'); ?>

{{--footer start--}}
<?php //echo View::make ('frontend.layouts.footer'); ?>
{{--footer end--}}


<?php echo View::make ('frontend.layouts.aos'); ?>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>

    // options docs link --> https://apexcharts.com/docs/options
    // original chart --> https://apexcharts.com/javascript-chart-demos/area-charts/spline/

    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });

    const options = {
        colors: ['#ED1C24','#5BBA47'],
        series: [
            {
                name: 'PREVIOUS',
                data: [500, 3500 ,400, 1500, 3000, 2500, 800, 1800 ],
                format: 'string',
            },
            {
                name: 'MMK',
                data: [2500, 1500, 3000, 2500, 800, 1800 ,2000, 400 ],
                format: 'string',
            },
        ],
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
            categories: ['Apples','Oranges','Strawberries','Pineapples','Mangoes','Bananas','Blackberries','Pears',
            ]
        },
        yaxis:{
            categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
        },
        tooltip: {
            x: {
                // format: 'dd/MM/yy HH:mm'
            },
        },
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();

    // $('.apexcharts-toolbar').addClass('d-none');

    let setData = options.series[0].data;

    setInterval(function setDataToObj() {
        // console.log(setData[1]);
        let randVal = Math.floor(Math.random() * 3000);
        setData[1] = randVal;
        // $('.title-fm').html(randVal);
        for(let i=0; i<setData.length; i++)
        {
            let loopIndex = Math.floor(Math.random() * setData.length)
            setData[loopIndex] = Math.floor(Math.random() * 3500);
        }
        $('.apexcharts-canvas').remove();
        chart.render();
    }, 110000);

</script>


<body/>
<html/>