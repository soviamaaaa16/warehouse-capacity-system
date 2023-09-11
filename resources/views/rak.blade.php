@extends('template')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/ipg-logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Manajemen Rak</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/rak.css" rel="stylesheet" />
    <link href="../assets/css/additional.css" rel="stylesheet" />
</head>

@section('content')

<body>
    <div class="content">
            <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputAlamat" class="col-sm-2 col-form-label">Rak</label>
                        <select id="rak" name="rak">
                          <option value=""> Select </option>   
                          @foreach ($partnum as $row)     
                            <option value="{{ $row->partNumber}}">{{ $row->partNumber }}</option>
                          @endforeach     
                        </select>
                      </div>
                      <div class="form-group row">
                        <label for="insputPjg" class="col-sm-2 col-form-label">Panjang</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPjg">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputLbr" class="col-sm-2 col-form-label">Lebar</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputLbr">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputTnggi" class="col-sm-2 col-form-label">Tinggi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputTnggi">
                        </div>
                      </div>

                      <button type="submit">Submit</button>
                      <button type="Delete">Delete</button>
            </form>
    </div>
</body>

@endsection

</html>
            