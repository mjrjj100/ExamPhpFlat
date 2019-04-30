<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center mb-5 mt-5"> -| VOS PERSONNAGES |-</h3>
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Classe</th>
                            <th scope="col">Level</th>
                            <th scope="col">Faction</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $post) : ?>
                            <tr>
                                <td><?php echo $post['name']; ?></td>
                                <td><?php echo $post['class']; ?></td>
                                <td><?php echo $post['level']; ?></td>
                                <td><?php echo $post['faction']; ?></td>
                                <td>
                                    <a href="/examAlexisPhp/index.php/delete?id=<?php echo $post['id'] ?>" class="btn btn-danger">Supprimer</a> | <a href="/examAlexisPhp/index.php/updateForm?id=<?php echo $post['id'] ?>" class="btn btn-info">Modifier</a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center mt-5 mb-5">
                <a href="/examAlexisPhp/index.php/createForm" class="btn btn-info">Creer un personnage</a>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>