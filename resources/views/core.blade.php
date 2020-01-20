<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="{{asset('img/icon.png')}}"/>
        <title>eShop</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

        <!-- Bootstrap core CSS -->
        <link href="https://mdbootstrap.com/previews/templates/e-commerce/css/bootstrap.min.css" rel="stylesheet">

        <!-- Material Design Bootstrap -->
        <link href="https://mdbootstrap.com/previews/templates/e-commerce/css/mdb.min.css" rel="stylesheet">
    </head>

    <body class="homepage-v2 hidden-sn white-skin animated">
        @include('parts.header')

        @yield('content')

        @include('parts.footer')
        <!-- SCRIPTS -->

        <!-- JQuery -->
        <script type="text/javascript" src="https://mdbootstrap.com/previews/templates/e-commerce/js/jquery-3.3.1.min.js"></script>

        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://mdbootstrap.com/previews/templates/e-commerce/js/popper.min.js"></script>

        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://mdbootstrap.com/previews/templates/e-commerce/js/bootstrap.min.js"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://mdbootstrap.com/previews/templates/e-commerce/js/mdb.min.js"></script>

        <script type="text/javascript">
            /* WOW.js init */
            new WOW().init();

            // Tooltips Initialization
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>

        <script>
            // Material Select Initialization
            $(document).ready(function () {
                $('.mdb-select').material_select();
            });
        </script>
        <script>
            // SideNav Initialization
            $(".button-collapse").sideNav();
        </script>
    </body>
</html>
