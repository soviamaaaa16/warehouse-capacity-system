@extends('template')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/ipg-logo.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/ipg-logo.png">
    <link rel="icon" type="image/png" href="../assets/img/ipg-logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard</title>
    <script src="{{ asset('assets/js/Chart.js') }}"></script>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/light-bootstrap-dashboard.css?v=2.0.0') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/charts.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/style1.css">
    <link rel="stylesheet" href="../assets/css/searchbar.css">
</head>



    @section('content')
    <body>

    <div class="h2" >
        <h2>Denah Rak Warehouse</h2>
    </div>

    <div class="warehouse">
        <div class="room" id="room1">Loket 1</div>
        <div class="room" id="room2">Area CNC Produksi </div>
        <div class="room" id="room3">Area Substore<br> Wire Produksi </div>
        <div class="room" id="room4">Area Sub dan Meterial</div>
        <div class="room" id="room5">Area Transit A 28 Pallet </div>
        <div class="room" id="room6"> </div>
        <div class="room" id="room7">QC Incoming </div>
        <div class="room" id="room8">Admin Incoming </div>
        <div class="room" id="room9">Area Kanban </div>
        <div class="room" id="room10">Rak A (Wire) </div>
        <div class="room" id="room11">Rak A (Wire) </div>
        <div class="room" id="room12">Rak Kanban </div>
        <div class="room" id="room13">Rak B (Wire) </div>
        <div class="room" id="room14">Rak B (Wire) </div>
        <div class="room" id="room15">Rak C (Accessoris) </div>
        <div class="room" id="room16">Rak C (Assy) </div>
        <div class="room" id="room17">Rak D (Terminal) </div>
        <div class="room" id="room18">Rak D (Terminal) </div>
        <div class="room" id="room19">Area Wire Batterey Cable 12 Pallet </div>
        <div class="room" id="room20">Rak E (Terminal) </div>
        <div class="room" id="room21">Rak E (Terminal) </div>
        <div class="room" id="room22">Material RN </div>
        <div class="room" id="room23">Rak F (Sub Assy) </div>
        <div class="room" id="room24">Rak F (Sub Assy) </div>
        <div class="room" id="room25">Material RN </div>
        <div class="room" id="room26">Rak G (Sub Assy) </div>
        <div class="room" id="room27">Rak G (Sub Assy) </div>
        <div class="room" id="room28">Rak H (Sub Assy) </div>
        <div class="room" id="room29">Area Transit GOEI </div>
        <div class="room" id="room30">Rak I (Material Deadstok) </div>
        <div class="room" id="room31">Area Transit B </div>
        <div class="room" id="room32">Parkir Forklift </div>
        <div class="room" id="room33">Rak K CS/IS<br> Rak K Sub Material </div>
        <div class="room" id="room34">Area CS/IS 30 Pallet </div>
        <div class="room" id="room35">Area Material Preparation </div>
        <div class="room" id="room36">Area Cutting Tube </div>
        <div class="room" id="room37">Area Tube<br> Rak L </div>
        <div class="room" id="room38">Area Tapping <br> Rak J </div>
        <div class="room" id="room39">Workshop Area </div>

    </div>

    <div class="search-container">
        <form id="searchItemnum" action="">
              
            <input type="text" id="searchInput" name="search" placeholder="Search Item Number...">
        </form>
    </div>

    <div class="search-container1">
        <form id="searchForm" method="post" action="">
            <input type="text" id="searchInput" name="search" placeholder="Search Product Name...">
        </form>
    </div>

    <div class="search-container2">
        <form id="searchForm" method="post" action="">
            <input type="text" id="searchInput" name="search" placeholder="Search Code Product...">
        </form>
    </div>

   

    <div id="result">
        <!-- Hasil pencarian akan ditampilkan di sini -->
    </div>


    <div class="clearfix"></div>

    </body>
    </html>
@endsection
