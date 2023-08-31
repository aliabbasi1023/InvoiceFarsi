<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-panel</title>
    <!-- style -->
    <link rel="stylesheet" href="/NewPanel/assets/style/style.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="/NewPanel/assets/cdn/bootstrap.min.css.css">
    <!-- js bootstrap -->
    <script src="/NewPanel/assets/cdn/bootstrap.bundle.min.js"></script>
    <!-- icon -->
    <link rel="stylesheet" href="/NewPanel/assets/cdn/bootstrap-icons.css">
    <!-- exios -->
    <script src="/NewPanel/assets/cdn/axios.min.js"></script>
    <!-- cdn select2 -->
    <link rel="stylesheet" href="/NewPanel/assets/cdn/select2/select2.min.css">
    <script src="/NewPanel/assets/cdn/select2/jquery-3.6.0.min.js"></script>
    <script src="/NewPanel/assets/cdn/select2/select2.min.js"></script>
    <!-- data picker -->
    <link rel="stylesheet" href="/NewPanel/assets/dataPicker/js-persian-cal.css">
    <script src="/NewPanel/assets/dataPicker/js-persian-cal.min.js"></script>

    {{-- fav icon  --}}
    {{-- <link rel="SHORTCUT ICON" href="/NewPanel/assets/img/logo-farsi-1402.png" type="image/x-icon" />--}}
    {{-- <link rel="ICON" href="/NewPanel/assets/img/logo-farsi-1402.png" type="image/ico" />--}}

    <link rel="SHORTCUT ICON" href="/NewPanel/assets/img/logo.png" type="image/x-icon" />
    <link rel="ICON" href="/NewPanel/assets/img/logo.png" type="image/ico" />


</head>

<body onresize="_resize()">


    <!-- *********shadow -->
    <div class="shadow1 d-flex d-lg-none"> </div>
    <!-- *********shadow -->


    <div class="container-fluid">
        <div class="row main justify-content-start ">

            <!-- ****************main menu start****************** -->
            @include('layouts.NewPanel.NewPanelMenu')
            <!-- **************main menu end******************** -->

            < <!-- **************main section start*************** -->

                <div class="col-12 col-lg-10 d-flex justify-content-start " id="main_sec">

                    <div class="inner_main_sec col-12 ps-1 pe-0">
                        @include('layouts.NewPanel.NewPanelHeader')
                        <!-- *********************main content start -->
                        <section id="main_content_admin_panel" class="col-12">
                            @yield('content')
                        </section>
                        <!-- *********************main content end -->
                    </div>

                </div>
                <!-- **************main section start*************** -->

                <!-- ***************************************toggle menu**************************************************************** -->
                @include('layouts.NewPanel.NewPanelSubMenu')
        </div>
    </div>

</body>
<script src="/NewPanel/assets/js/master.js"></script>


<script>

</script>



</html>