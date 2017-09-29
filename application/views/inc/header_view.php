<!doctype html>
<html>  
    <head>
        <title>House And Promos Professional Realty</title>

        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <link href="<?= base_url() ?>public/img/favicon.ico" rel="icon"> 

        <!-- Materialize CSS File -->
        <link href="<?= base_url() ?>public/css/materialize.min.css" rel="stylesheet" />

        <!-- Font awesome CSS Files -->
        <link href="<?= base_url() ?>public/css/font-awesome.min.css" rel="stylesheet" />

        <!-- Main Stylesheet File -->
        <link href="<?= base_url() ?>public/css/customcss.css" rel="stylesheet" />

        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet" />

        <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet" />

        <!-- fotorama -->
        <link href="<?= base_url() ?>public/css/fotorama.css" rel="stylesheet" >


    <a class="scrolltop" href="#"><i class="fa fa-angle-up"></i></a> 

    <!-- JQuery lib -->
    <script src="<?= base_url() ?>public/js/jquery.min.js"></script>
    <!-- Materialize Js -->
    <script src="<?= base_url() ?>public/js/materialize.min.js"></script>
    <!-- fotorama js -->
    <script src="<?= base_url() ?>public/js/fotorama.js"></script>

    <!-- materialize custom Js -->
    <script type="text/javascript">
        $(document).ready(function () {
            $(".dropdown-button").dropdown();
            $('ul.tabs').tabs({
                swipeable: false, // tabs to be swippable
            });
            $('ul.tabs').tabs('select_tab', 'tab_id');
            $('.modal').modal();
            $('select').material_select();
            $('.button-collapse').sideNav({
                menuWidth: 300, // Default is 300
                draggable: true, // Choose whether you can drag to open on touch screens,
            });
        });
    </script>

    <!-- custom js -->
    <script type="text/javascript">
        function chevBuy() {
            document.getElementById("chevBuy").className = "fa fa-chevron-up";
            document.getElementById("chevBuySide").className = "fa fa-chevron-up";
            document.getElementById("chevPreSell").className = "fa fa-chevron-down";
            document.getElementById("chevPreSellSide").className = "fa fa-chevron-down";
            document.getElementById("chevRent").className = "fa fa-chevron-down";
            document.getElementById("chevRentSide").className = "fa fa-chevron-down";
        }
        function chevPreSell() {
            document.getElementById("chevBuy").className = "fa fa-chevron-down";
            document.getElementById("chevBuySide").className = "fa fa-chevron-down";
            document.getElementById("chevPreSell").className = "fa fa-chevron-up";
            document.getElementById("chevPreSellSide").className = "fa fa-chevron-up";
            document.getElementById("chevRent").className = "fa fa-chevron-down";
            document.getElementById("chevRentSide").className = "fa fa-chevron-down";
        }
        function chevRent() {
            document.getElementById("chevBuy").className = "fa fa-chevron-down";
            document.getElementById("chevBuySide").className = "fa fa-chevron-down";
            document.getElementById("chevPreSell").className = "fa fa-chevron-down";
            document.getElementById("chevPreSellSide").className = "fa fa-chevron-down";
            document.getElementById("chevRent").className = "fa fa-chevron-up";
            document.getElementById("chevRentSide").className = "fa fa-chevron-up";
        }
        function chevAccount() {
            document.getElementById("chevBuy").className = "fa fa-chevron-down";
            document.getElementById("chevBuySide").className = "fa fa-chevron-down";
            document.getElementById("chevPreSell").className = "fa fa-chevron-down";
            document.getElementById("chevPreSellSide").className = "fa fa-chevron-down";
            document.getElementById("chevRent").className = "fa fa-chevron-down";
            document.getElementById("chevRentSide").className = "fa fa-chevron-down";
        }
    </script>
</head>

<body>