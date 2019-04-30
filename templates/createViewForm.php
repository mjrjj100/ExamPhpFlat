<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
<div class="container">
            <h1 class="text-center">-| CREATION DU PERSONNAGE |-</h1>
            <div class="row justify-content-md-center">
                <div class="col-md-4 text-center">
                    <form method="post" action="/../examAlexisPhp/index.php/createPersonnage">
                        <div class="form-group">
                            <label for="name">Votre pseudo :</label>
                            <input type="text" class="form-control" name="name" aria-describedby="nameHelp" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="job">votre classe :</label>
                            <input type="text" class="form-control" name="job" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="level">votre level :</label>
                            <input type="number" class="form-control" name="level" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="faction">votre faction :</label>
                            <input type="text" class="form-control" name="faction" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-primary">Creer !</button>
                    </form>
                    <a href="/../examAlexisPhp/index.php" class="btn btn-light">Retour</a>
                </div>
            </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>