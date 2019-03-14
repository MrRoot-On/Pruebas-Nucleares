<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barcode QR Testing ON</title>
</head>
<body>

<div class='visible-print text-center'>
    <h1>Testing QR-Code File</h1>
    {!! QrCode::size(250)->generate('Obed Nava Hk'); !!}
</div>
    
</body>
</html>