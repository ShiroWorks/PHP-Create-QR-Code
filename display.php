<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 card-panel hoverable center-align">
                <div>
                    <h1>Your QR-Code</h1>
                </div>
                <hr>
                <div id="qrbox" style="text-align: center;">
                    <img src="qrcode.php?text=<?php echo $_GET['text']?>" alt="">
                </div>
                <hr>
                <a href="index.php" class="waves-effect waves-light btn-large">Create New QR-Code</a>
               
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>