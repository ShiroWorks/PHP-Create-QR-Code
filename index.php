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
        
        <div class="row card-panel hoverable center-align">
            <div class="col-md-6 offset-md-3">
                <div>
                    <h1>Generate QR-Code</h1>
                </div>
                <hr>
                <form action="display.php" method="get">
                <div class="row">
        <div class="input-field col s12">
          <input id="text" type="text" class="validate"
          name="text">
          <label for="text">Your Text</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Create QR-Code</button>
                  
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>