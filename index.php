<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
<div class="container">
<div class="row">

    <form action="paiment.php" class="ui-form col-6">
    
        <div class="form-group">
            <input type="text" name="name" id="" placeholder="votre nom">
        </div>
        
        <div class="form-group">
            <input type="email" name="email" id="" placeholder="votre email">
        </div>

        <div class="form-group">
            <input type="text" name="cb" id="" placeholder="votre code de CB">
        </div>

        <div class="form-group">
           <button class="btn btn-success" type="submit">Acheter</button>
        </div>
    
    </form>
</div>
</div>
</body>
</html>