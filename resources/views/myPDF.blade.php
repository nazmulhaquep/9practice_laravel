<!DOCTYPE html>
<html>

<head>
    <title>Generate Bar Code in Laravel</title>
</head>
<body>
    <div class="row" style="display: flex;">
    <?php if(isset($barcode_data)){ ?>
        <?php foreach($barcode_data as $dt) { ?>
            <?php
                $generatorPNG = new \Picqer\Barcode\BarcodeGeneratorPNG();
                $generatorCode = $dt->reg_code;
            ?>
            <div class="col-md-6" style="width: 20%; margin-right: 20%;">
                <img src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($generatorCode, $generatorPNG::TYPE_CODE_128)) }}" alt="Barcode"> 
                
                <br/>
            </div>
    <?php } } ?>
    </div>
</body>
</html>