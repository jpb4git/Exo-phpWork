<?php
if (isset($_GET) && !empty($_GET)) {

    var_dump($_GET);
    die();
}

if (isset($_POST) && !empty($_POST)) {
    //$myPost = array_values($_POST);
    var_dump($_POST);
    //var_dump(count($_POST));
    foreach ($_POST as $key => $value) {
        echo $key . ' ' . $value . "\n";
    }

}

include 'functions/useful.php';
// recuperer la listes des articles au format Array;
$articles = generateCatalogue();


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique en Ligne</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">NgShop</a>
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
                    <a class="nav-link" href="catalogue.php">Catalogue<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>

            </ul>
        </div>
    </nav>
</header>
<main>

    <div class="container-fluid">
        <?php include 'header.php'; ?>
    </div>


    <?php

    if (isset($_POST) && !empty($_POST)) {


        ?>
        <div class="container">
            <div class="row">
                <h1 class="badge  w-100 p-3 m-3">Article(s) ajouté(s)</h1>
            </div>
            <div class="row">
                <form action="" method="post">
                    <?php
                    $total = 0;
                    // parcourir les articles dans le catalogue
                    foreach ($_POST as $key => $value) {
                        $total += $articles[$key-1]['prix'];
                        ?>
                        <div class="col-sm-12 d-flex flex-row justify-content-between align-items-center p-3 m-3">
                            <img src="<?php echo $articles[$key-1]['url']; ?> " class="art-img-px" width="45" height="45"
                                 alt="...">
                            <?= $articles[$key-1]['nom'] ?>
                            <p class="p-3 m-3"><?= $articles[$key-1]['desc'] ?>
                                <span class="bg-primary text-white p-3"><?= $articles[$key-1]['prix'] . "  " . MajDevise("euros") ?></span>
                            </p>

                        </div>

                        <?php
                    }
                    ?>

                </form>
                <div class="col-sm-3 d-flex flex-row justify-content-end align-items-center p-3 m-3">
                    <?php echo "Total : " . $total; ?>
                </div>
            </div>

        </div>
        <?php
    } else {
        ?>
        <div class="container">
            <div class="row ">
                <h1 class="badge  w-100 p-3 m-3">Articles</h1>
            </div>
            <div class="row panier-row">
                <form action="" method="post">
                    <?php
                    // parcourir les articles dans le catalogue
                    foreach ($articles as $value) { ?>
                        <div class="col-sm-12 ">
                            <div class="div row">
                                <div class="col-md-2 mb-5">
                                    <img src="<?php echo $value['url']; ?> " class="art-img-px" width="45" height="45"
                                         alt="...">
                                </div>
                                <div class="col-md-3">
                                    <?= $value['nom'] ?>
                                </div>


                                <div class="col-md-5 d-flex justify-content-end">
                                    <p class=""><?= $value['desc'] ?>
                                        <span class="bg-primary text-white p-3"><?= $value['prix'] . "  " . MajDevise("euros") ?></span>
                                    </p>
                                </div>
                                <div class="col-md-2">
                                    <label>Add </label>
                                    <input class="" type="checkbox" id="<?php echo $value['id']; ?>"
                                           name="<?php echo $value['id']; ?>">
                                </div>


                            </div>

                        </div>
                        <?php
                    }
                    ?>


                    <div class="col-sm-12 d-flex justify-content-center m-5">
                        <input class="btn btn-secondary" type="submit" value="Envoyer le formulaire">
                    </div>


                </form>
            </div>
        </div>


        <?php
    }
    ?>
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