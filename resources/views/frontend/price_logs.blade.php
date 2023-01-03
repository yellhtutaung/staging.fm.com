<?php echo View::make ('frontend.layouts.head'); ?>
<link rel="stylesheet" href="{{asset('frontend-assets/css/client/ourclients.css')}}"/>
<link rel="stylesheet" href="{{asset('frontend-assets/css/client/featureplans.css')}}"/>
<link rel="stylesheet" href="{{asset('frontend-assets/css/animated.min.css')}}"/>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/b-2.3.3/date-1.2.0/fc-4.2.1/r-2.4.0/sb-1.4.0/sl-1.5.0/datatables.min.js"></script>

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
    .product-img
    {
        width: 100px;
        height: 100px;
        border-radius: 50%;
    }

</style>

</head>
<body>

{{--navbar layout start--}}
<?php echo View::make ('frontend.layouts.navbar'); ?>
{{--navbar layout end--}}

{{--price list --}}

<div class="container-fluid" style="margin-top: 190px !important;" >
    <div class="main_title d-inline-block ">
        <h3 class="text-black title-fm animate__animated animate__slideInLeft ">Previous price list of {{$priceList->name}}</h3>
        <span class="main_title_underline w-75 bg-dark"></span>
    </div>
    <div class="d-inline-block ">
        <img class="product-img animate__animated animate__bounce" src="{{asset("backend-assets/uploads/fruits/$priceList->id/$priceList->images")}}" alt="{{$priceList->name}}" />
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="card animate__animated animate__fadeIn shadow-sm">
                <div id="chart"></div>
            </div>
        </div>
    </div>
</div>

{{--price list --}}

{{--feature plans start--}}
<div class="container-fluid p-lg-5 "  style="display: none !important;">
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

    $(document).ready(function () {

        $('.form-control-sm').addClass("input-data-search");
        $('.input-data-search').focus(); // input auto focus

        $('.js-example-basic-multiple').select2();

    });

    // options docs link --> https://apexcharts.com/docs/options
    // original chart --> https://apexcharts.com/javascript-chart-demos/area-charts/spline/

    const dataObj = <?php echo json_encode($priceListHistory,true); ?>;
    console.log(dataObj);

    let dateOnly = [];
    let priceOnly = [];
    let unitArr = [];

    let loopFun = dataObj.map(eachObj =>
    {
        dateOnly.push(eachObj.date + ' | ' + eachObj.depend_count +'  '+ eachObj.unit);
        priceOnly.push(eachObj.price);
        unitArr.push(eachObj.depend_count +'  '+ eachObj.unit);
    });


    // console.log(loopFun());

    const options = {
        colors: ['#5BBA47'],
        series: [
            {
                name: 'MMK',
                data: priceOnly,
                format: 'string',
            },
            // {
            //     name: 'MMK',
            //     data: [2500, 1500, 3000, 2500, 800, 1800 ,2000, 400 ],
            //     format: 'string',
            // },
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
            categories: dateOnly
        },
        yaxis:{
            // categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z"]
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
