@extends('frontend.layouts.app')
@section('title', 'Fresh Moe')
@section('extra-css')
    <link rel="stylesheet" href="{{asset('frontend-assets/css/animated.min.css')}}"/>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/b-2.3.3/date-1.2.0/fc-4.2.1/r-2.4.0/sb-1.4.0/sl-1.5.0/datatables.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <link rel="stylesheet" href="{{asset('frontend-assets/css/profile.css')}}"/>

@endsection

@section('content')

    <div class="authenticated_bg">
        <div class="container py-5" style="margin-top: 140px !important;">
            <div class="row g-2">
                @include('frontend.layouts.user_sidebar')

                <div class="col-md-9 ms-md-auto">
                    {{--price list --}}

                    <div class="price_logs">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-header theme_bg">
                                    <img class="product-img animate__animated animate__bounce " src="{{asset("backend-assets/uploads/fruits/$priceList->id/$priceList->images")}}" alt="{{$priceList->name}}" />
                                    <div class="main_title m-0 ms-2 d-inline-block " >
                                        <h4 class="title-fm animate__animated animate__slideInRight text-light m-0"><b>{{$priceList->name}}</b> - {{ __('message.previous_price_list') }} </h4>
{{--                                        <span class="main_title_underline w-75 bg-light"></span>--}}
                                    </div>
                                </div>
                                <div class="card card-custom border-0 animate__animated animate__fadeIn shadow-sm">
                                    <div style="height: 100px!important;" id="chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--price list --}}

                    {{--feature plans start--}}
                    <div class="container-fluid p-lg-5"  style="display: none !important;">
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
                </div>
            </div>
        </div>
    </div>

@endsection

@section('extra-script')
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
                height: 400,
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



        {{-------------------  logout -----------------}}
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).on('click', '#logout', function (e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: '{{ __('message.logout_confirm') }}',
                showCancelButton: true,
                cancelButtonText: '{{ __('message.cancel_btn') }}',
                confirmButtonText: '{{ __('message.confirm_btn') }}',
                denyButtonText: `Don't save`,
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    console.log('hello')
                    $.ajax({
                        url: "{{ route('logout') }}",
                        type: "POST",
                        success: function () {
                            window.location.reload()
                        }
                    })
                }
            })

        })
    </script>
@endsection






























{{--@extends('frontend.layouts.app')--}}

{{--@section('title', 'Fresh Moe')--}}

{{--@section('extra-css')--}}
{{--    <link rel="stylesheet" href="{{asset('frontend-assets/css/client/ourclients.css')}}"/>--}}
{{--    <link rel="stylesheet" href="{{asset('frontend-assets/css/client/featureplans.css')}}"/>--}}
{{--    <link rel="stylesheet" href="{{asset('frontend-assets/css/animated.min.css')}}"/>--}}

{{--    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>--}}
{{--    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"/>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}


{{--    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>--}}
{{--    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/b-2.3.3/date-1.2.0/fc-4.2.1/r-2.4.0/sb-1.4.0/sl-1.5.0/datatables.min.js"></script>--}}

{{--    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>--}}
{{--    <style>--}}
{{--        .back-price-list {--}}
{{--            float: right;--}}
{{--            padding: 0.5rem 1.5rem;--}}
{{--            margin: 0.5rem;--}}
{{--            margin-right: 0;--}}
{{--            border: 1px solid #ccc;--}}
{{--            border-radius: 10px;--}}
{{--            background-color: #5bba47;--}}
{{--            color: white !important;--}}
{{--            text-decoration: none;--}}
{{--        }--}}
{{--        .product-img--}}
{{--        {--}}
{{--            width: 100px;--}}
{{--            height: 100px;--}}
{{--            border-radius: 50%;--}}
{{--        }--}}

{{--    </style>--}}
{{--@endsection--}}



{{--@section('content')--}}

{{--price list --}}

{{--<div class="mb-5" style="margin-top: 190px !important;" >--}}
{{--    <div class="row">--}}
{{--        <div class="col-sm-12 col-md-10 offset-md-1">--}}
{{--            <div class="d-flex justify-content-between align-items-center">--}}
{{--                <div>--}}
{{--                    <div class="main_title d-inline-block ">--}}
{{--                        <h3 class="text-black title-fm animate__animated animate__slideInLeft ">{{ __('message.previous_price_list') }} {{$priceList->name}}</h3>--}}
{{--                        <span class="main_title_underline w-75 bg-dark"></span>--}}
{{--                    </div>--}}
{{--                    <div class="d-inline-block ">--}}
{{--                        <img class="product-img animate__animated animate__bounce" src="{{asset("backend-assets/uploads/fruits/$priceList->id/$priceList->images")}}" alt="{{$priceList->name}}" />--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="animate__animated animate__slideInRight">--}}
{{--                    <a href="{{route('priceList')}}" class="back-price-list">Back</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="card animate__animated animate__fadeIn shadow-sm">--}}
{{--                <div id="chart"></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--price list --}}

{{--feature plans start--}}
{{--<div class="container-fluid p-lg-5"  style="display: none !important;">--}}
{{--    <section style="margin-top: 160px" >--}}
{{--        <div class="d-flex justify-content-between">--}}
{{--            <h4 class="text-bold title-fm"> REALTIME PRICE LIST </h4>--}}
{{--            <h4 class="text-bold title-fm "> MORE ITEM </h4>--}}
{{--        </div>--}}
{{--        --}}{{--        <h4 class="d-inline theme_green_color">Fresh</h4><h4 class="d-inline theme_red_color">Moe</h4>--}}
{{--        <div class="row my-2">--}}
{{--            <div class="col-sm-12 col-md-9">--}}
{{--                <div class="card shadow-sm">--}}
{{--                    <div id="chart"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <hr class="my-5">--}}
{{--</div>--}}
{{--feature plans end --}}


{{--@endsection--}}

{{--@section('extra-script')--}}
{{--<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>--}}
{{--<script>--}}

{{--    $(document).ready(function () {--}}

{{--        $('.form-control-sm').addClass("input-data-search");--}}
{{--        $('.input-data-search').focus(); // input auto focus--}}

{{--        $('.js-example-basic-multiple').select2();--}}

{{--    });--}}

{{--    // options docs link --> https://apexcharts.com/docs/options--}}
{{--    // original chart --> https://apexcharts.com/javascript-chart-demos/area-charts/spline/--}}

{{--    const dataObj = <?php echo json_encode($priceListHistory,true); ?>;--}}
{{--    console.log(dataObj);--}}

{{--    let dateOnly = [];--}}
{{--    let priceOnly = [];--}}
{{--    let unitArr = [];--}}

{{--    let loopFun = dataObj.map(eachObj =>--}}
{{--    {--}}
{{--        dateOnly.push(eachObj.date + ' | ' + eachObj.depend_count +'  '+ eachObj.unit);--}}
{{--        priceOnly.push(eachObj.price);--}}
{{--        unitArr.push(eachObj.depend_count +'  '+ eachObj.unit);--}}
{{--    });--}}


{{--    // console.log(loopFun());--}}

{{--    const options = {--}}
{{--        colors: ['#5BBA47'],--}}
{{--        series: [--}}
{{--            {--}}
{{--                name: 'MMK',--}}
{{--                data: priceOnly,--}}
{{--                format: 'string',--}}
{{--            },--}}
{{--            // {--}}
{{--            //     name: 'MMK',--}}
{{--            //     data: [2500, 1500, 3000, 2500, 800, 1800 ,2000, 400 ],--}}
{{--            //     format: 'string',--}}
{{--            // },--}}
{{--        ],--}}
{{--        chart: {--}}
{{--            height: 500,--}}
{{--            type: 'area'--}}
{{--        },--}}
{{--        dataLabels: {--}}
{{--            enabled: true--}}
{{--        },--}}
{{--        stroke: {--}}
{{--            curve: 'smooth'--}}
{{--        },--}}
{{--        xaxis: {--}}
{{--            // type: 'datetime',--}}
{{--            categories: dateOnly--}}
{{--        },--}}
{{--        yaxis:{--}}
{{--            // categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z"]--}}
{{--        },--}}
{{--        tooltip: {--}}
{{--            x: {--}}
{{--                // format: 'dd/MM/yy HH:mm'--}}
{{--            },--}}
{{--        },--}}
{{--    };--}}

{{--    var chart = new ApexCharts(document.querySelector("#chart"), options);--}}
{{--    chart.render();--}}

{{--    // $('.apexcharts-toolbar').addClass('d-none');--}}

{{--    let setData = options.series[0].data;--}}

{{--    setInterval(function setDataToObj() {--}}
{{--        // console.log(setData[1]);--}}
{{--        let randVal = Math.floor(Math.random() * 3000);--}}
{{--        setData[1] = randVal;--}}
{{--        // $('.title-fm').html(randVal);--}}
{{--        for(let i=0; i<setData.length; i++)--}}
{{--        {--}}
{{--            let loopIndex = Math.floor(Math.random() * setData.length)--}}
{{--            setData[loopIndex] = Math.floor(Math.random() * 3500);--}}
{{--        }--}}
{{--        $('.apexcharts-canvas').remove();--}}
{{--        chart.render();--}}
{{--    }, 110000);--}}

{{--</script>--}}


{{--@endsection--}}
