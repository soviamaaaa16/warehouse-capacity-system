@extends('template')

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Denah Rak Warehouse</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>
<style>

    h2 {
    text-align: center;
    padding: 10px
    }

    div.gallery {
    border: 1.5px solid #ccc;
    justify-content: center;
    align-items: center;
    width: 130px;

    }

    div.gallery:hover {
    
    background-color: #D9D9D9;
    }

    div.gallery img {
    width: 20;
    height: 20;
    display: block;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    }

    
    div.desc {
    padding: 15px;
    text-align: center;
    }

    * {
    box-sizing: border-box;
    }

    .responsive {
    padding: 15px;
    float: left;
    width: 20%;
    pointer-events: auto;
    
    }

    @media only screen and (max-width: 700px) {
    .responsive {
        width: 10%;
        margin: 10px 0;
    }
    }
 
    @media only screen and (max-width: 500px) {
    .responsive {
        width: 100%;
    }
    }

    .clearfix:after {
    content: "";
    display: table;
    clear: both;
    }
    
    </style>

    @section('content')
    <body>

    <h2>Denah Rak Warehouse</h2>
    

    <div class="responsive">
    <div class="gallery">
        <a target="_blank" href="../assets/img/wire.png">
        <img src="../assets/img/wire.png" alt="Wire" width="50" height= "50">
        </a>
        <div class="desc">Wire</div>
    </div>
    </div>


    <div class="responsive">
    <div class="gallery">
        <a target="_blank" href="../assets/img/connector.png">
        <img src="../assets/img/connector.png" alt="Connector" width="50" height= "50">
        </a>
        <div class="desc">connector</div>
    </div>
    </div>

    <div class="responsive">
    <div class="gallery">
        <a target="_blank" href="../assets/img/terminal.png">
        <img src="../assets/img/terminal.png" alt="Terminal" width="50" height= "50">
        </a>
        <div class="desc">terminal</div>
    </div>
    </div>

    <div class="responsive">
    <div class="gallery">
        <a target="_blank" href="../assets/img/assy.png">
        <img src="../assets/img/assy.png" alt="Assy" width="50" height= "50">
        </a>
        <div class="desc">Assy</div>
    </div>
    </div>

    <div class="responsive">
    <div class="gallery">
        <a target="_blank" href="../assets/img/sub-assy.png">
        <img src="../assets/img/sub-assy.png" alt="Sub-Assy" width="50" height= "50">
        </a>
        <div class="desc">Sub-Assy</div>
    </div>
    </div>
    
    <div class="responsive">
    <div class="gallery">
        <a target="_blank" href="../assets/img/transit.png">
        <img src="../assets/img/transit.png" alt="Transit" width="50" height= "50">
        </a>
        <div class="desc">Transit</div>
    </div>
    </div>

    <div class="responsive">
    <div class="gallery">
        <a target="_blank" href="../assets/img/preparation mat.png">
        <img src="../assets/img/preparation mat.png" alt="Preparation Material width="50" height= "50">
        </a>
        <div class="desc">Preparation</div>
    </div>
    </div>

    <div class="responsive">
    <div class="gallery">
        <a target="_blank" href="../assets/img/deadstock.png">
        <img src="../assets/img/csis.png" alt="Deadstock" width="50" height= "50">
        </a>
        <div class="desc">Deadstock</div>
    </div>
    </div>

    <div class="responsive">
    <div class="gallery">
        <a target="_blank" href="../assets/img/csis.png">
        <img src="../assets/img/csis.png" alt="CS/IS" width="50" height= "50">
        </a>
        <div class="desc">CS/IS</div>
    </div>
    </div>

    <div class="responsive">
    <div class="gallery">
        <a target="_blank" href="../assets/img/material rn.png">
        <img src="../assets/img/cutting.png" alt="Matarial RN" width="50" height= "50">
        </a>
        <div class="desc">Material RN</div>
    </div>
    </div>

    

    <div class="responsive">
    <div class="gallery">
        <a target="_blank" href="../assets/img/cutting.png">
        <img src="../assets/img/cutting.png" alt="Cutting" width="50" height= "50">
        </a>
        <div class="desc">Cutting</div>
    </div>
    </div>

    <div class="responsive">
    <div class="gallery">
        <a target="_blank" href="../assets/img/tubes.png">
        <img src="../assets/img/tubes.png" alt="Tubes" width="50" height= "50">
        </a>
        <div class="desc">Tube</div>
    </div>
    </div>

    <div class="responsive">
    <div class="gallery">
        <a target="_blank" href="../assets/img/tubes.png">
        <img src="../assets/img/tubes.png" alt="Tubes" width="50" height= "50">
        </a>
        <div class="desc">Tapping</div>
    </div>
    </div>

    <div class="clearfix"></div>

    </body>
    </html>
@endsection
