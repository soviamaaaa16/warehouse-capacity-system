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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

@section('content')
<body>
    <div class="content">
            <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="partNum" class="col-sm-2 col-form-label">Part Number</label>
                        <select id="partNum" name="states[]" onchange="getMaterial()">
                        <option value=""> Select </option>
                          @foreach ($partnum as $row)     
                            <option value="{{ $row->partNumber}}">{{ $row->partNumber }}</option>
                          @endforeach                  
                        </select>
                      </div>
                      <div class="form-group row">
                        <label for="itemnum" class="col-sm-2 col-form-label">Item Number</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="itemnum" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputProduct" class="col-sm-2 col-form-label">Product</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="product" disabled>
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
                        <label for="inputQty" class="col-sm-2 col-form-label">Quantity Box</label>
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
  function getMaterial(){
    var partNum = $("#partNum").val();
    $.ajax({
      url : "{{ url ('/getData') }}",
      type: 'get',
      dataType: 'json',
      data : { 
        partNum: partNum,
      },
      success : function(data){
         // var json = data;
          // let  obj = JSON.stringify(json);       
          // $('#itemnum').val(obj.itemNum);
          // $('#product').val(obj.productNum);
          // $('#panjang').val(obj.pjg);
          // $('#lebar').val(obj.lbr);
          // $('#tinggi').val(obj.tng);
          // $('#qty').val(obj.qtyBox);
          // console.log(obj);

          if (data) {
            $('#itemnum').val(data.itemNumber);
            $('#product').val(data.productName);
            $('#panjang').val(data.pjg);
            $('#lebar').val(data.lbr);
            $('#tinggi').val(data.tng);
            $('#qty').val(data.qtyBox);
          } else {
            echo ('no data was found');
          }
      }
    });  
}
</script>

<script>
      $(document).ready(function() {
        $("#partNum").select2();
    });
</script>

@endsection

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</html>
            