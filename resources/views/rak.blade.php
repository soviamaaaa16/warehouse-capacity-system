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
    <script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

@section('content')

<body>
    <div class="content">
            <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="rak" class="col-sm-2 col-form-label">Rak</label>
                        <select id="rak" name="states[]" onchange="getAlamat()">
                          <option value=""> Select </option>   
                          @foreach ($alamat as $row)     
                            <option value="{{ $row->alamat}}">{{ $row->alamat }}</option>
                          @endforeach     
                        </select>
                      </div>
                      <div class="form-group row">
                        <label for="inputPjg" class="col-sm-2 col-form-label">Panjang</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="panjang">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputLbr" class="col-sm-2 col-form-label">Lebar</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="lebar">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputTnggi" class="col-sm-2 col-form-label">Tinggi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tinggi">
                        </div>
                      </div>

                      <button type="submit">Submit</button>
                      <button type="Delete">Delete</button>
            </form>
    </div>
</body>

<script>
  function getAlamat(){
  var alamat = $("#rak").val();
  $.ajax({
    url : "{{ url ('/getRak') }}",
    type: 'get',
    dataType: 'json',
    data : {
      alamat: alamat,
    },
    success : function(data){
      if (data){
        $('#panjang').val(data.pjg);
        $('#lebar').val(data.lbr);
        $('#tinggi').val(data.tngTotal);
      } else {
        echo ('no data was found');
      }
    }
  });
  }
</script>

<script>
      $(document).ready(function() {
        $("#rak").select2();
    });
</script>

@endsection

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</html>
            