@extends('template')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/ipg-logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Manajemen material</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/rak.css" rel="stylesheet" />
    <link href="../assets/css/additional.css" rel="stylesheet" />

    <script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
</head>

@section('content')
<body>
    <div class="content">
            <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="itemNum" class="col-sm-2 col-form-label">Item Number</label>
                        <select id="itemNum" name="itemNum" onChange="getMaterial(this.value)">
                        <option value="" selected disabled> Select </option>
                          @foreach ($itemnum as $row)     
                            <option value="{{ $row->partNumber}}">{{ $row->itemNumber }}</option>
                          @endforeach                  
                        </select>
                      </div>
                      
                      <div class="form-group row">
                        <label for="inputProduct" class="col-sm-2 col-form-label">Product</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="product">
                        </div>
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
                      <div class="form-group row">
                        <label for="inputQty" class="col-sm-2 col-form-label">Quantity</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="qty">
                        </div>
                      </div>
                      <button type="submit">Submit</button>
                      <button type="Delete">Delete</button>
            </form>
    </div>
</body>

<script>
  function getMaterial(itemNum){
  $("#itemNum").change(function() {
    $.ajax({
      url: '/material' + $(this).val(),
      type: 'get',
      data: {},
      success: function(data){
        if (data.success == true) {
          $("#product").value(data.partNumber).trigger('change');
        } else {
          alert('GAGAL')
        }
      },
      error: function(jqXHR, textStatus, errorThrown){}
    })
  })
}
</script>

@endsection

</html>
            