<!DOCTYPE html>
<html>
<head>
    <title>Generate Bar Code in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
    <h3>Bar code Search</h1>
    <form class="row g-3">
    <div class="col-auto">
        <label for="staticEmail2" class="">Start</label>
        <select id="code" class="form-select" name="start" aria-label="Default select example">
            <option value="" selected>Select Code</option>
            @foreach($data as $da)
            @php 
            $id_code = $da->id.$da->code;
            @endphp
                <option @if(isset($search_start) && $id_code==$search_start) selected @endif value="{{$da->id.$da->code}}">{{$da->id.$da->code}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-auto">
        <label for="inputPassword2" class="">End</label>
        <select id="code" @if(!empty($search_start)) @else disabled  @endif  class="form-select" name="end" aria-label="Default select example">
            <option value="" selected>Select Code</option>
            @foreach($search_data as $search_da)
            <option @if(isset($search_end) && $search_end==$search_da->id.$search_da->code) selected @endif value="{{$search_da->id.$search_da->code}}">{{$search_da->id.$search_da->code}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3 mt-4">Search</button>
        <a class="btn btn-secondary mb-3 mt-4" href="search-barcode">Refresh</a>
    </div>
    

    <div class="row">

    <?php if(isset($barcode_data) && !empty($barcode_data)){ ?>
        
        <?php foreach($barcode_data as $dt) { ?>
            <?php
                $generatorPNG = new \Picqer\Barcode\BarcodeGeneratorPNG();
                $generatorCode = $dt->reg_code;
            ?>
            
            <div class="col-md-6 mt-4">
                <img src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($generatorCode, $generatorPNG::TYPE_CODE_128)) }}" alt="Barcode"> 
                
                <br/>
            </div>


        <?php }  ?>
            <div class="d-flex justify-content-end">
            
                <button type="submit" name="action" value="print" class="btn btn-primary mt-4 col-md-4 float-right">Print</button> 
            </div>
    <?php }  ?>
        
        </form>
    </div>
  </div>
</body>
</html>