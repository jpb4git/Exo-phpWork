<?php
$articleNom = ["l'écran ! ","la lampe !","les chaussures !","Chaussure"];
$articleprix = [599,15.99,75,90];
$articleUrl = ['assets/ecran.jpg','assets/lampe.png','assets/shoes.jpg','assets/shoes.jpg'];
$articleDesc = ["17-inch Dell TFT LCD Moniteur ÀÉcran Plat",
                "Lampe à poser en métal vert cèdre h21cm",
                "Modèle emblématique du défilé Printemps-Été 2018",
                "Modèle emblématique du défilé Printemps-Été 2017"
              ];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">EXERCICE 1 </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Home </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="articles.php">Articles<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <h1 class="ml-5">Articles</h1>
            </div>
            <div class="row">
                <?php  
           // var_dump(count($articleUrl));
            for($i = 0 ; $i < count($articleUrl) ; $i++  ) {
             ?>
                <div class="col-sm-12 col-lg-6">
                    <div class="card">
                    <div class="card-header d-flex justify-content-center bg-white">
                    <img src="<?php  echo $articleUrl[$i];  ?>" class="art-img img-fluid card-img-top" alt="...">
                    </div>
                    
                        <div class="card-body">
                            <h5 class="card-title"><?= $articleNom[$i] ?></h5>
                            <p class="card-text"><?=  $articleDesc[$i] ?></p>
                            <div class="card-footer d-flex justify-content-center bg-white">
                            <a href="#" class="btn btn-primary"><?= $articleprix[$i] . " Euros" ?></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <?php     
            }
        ?>
            </div>


        </div>

    </main>
    <footer>

    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
</body>

</html>