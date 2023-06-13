<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach($data as $dt) { ?>
    <?php
        $generatorPNG = new \Picqer\Barcode\BarcodeGeneratorPNG();
        $generatorCode = $dt->reg_code;
    ?>
    <img src="data:image/png;base64,{{ base64_encode($generatorPNG->getBarcode($generatorCode, $generatorPNG::TYPE_CODE_128)) }}" alt="Barcode"> 
    <br/>
    <div style="height:500px;"></div>
<?php } ?>

</body>
</html>