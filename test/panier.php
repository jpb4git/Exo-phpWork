<?php
session_start();
include '../functions/useful.php';


$mypost ="";
if (isset($_POST)){
    $mypost = $_POST;
    //$i est l'id
    foreach ($mypost as $key => $value){
       // echo $key . ' ' . $value ;
        $_SESSION['article'][] = $key;
        $_SESSION['Qts'][] = 1 ;
        //$_SESSION['panier']['article']['Qts'][] = 1;
    }

      for ($i = 0 ; $i < count($_SESSION['article']);$i++){
          echo $_SESSION['article'][$i] . '  ---  ' .$_SESSION['Qts'][$i] . ' ||  ';

      }
    //var_dump($_SESSION);
    echo $_SESSION = null;
}



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
    <link rel="stylesheet" href="../css/app.css">
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
                <li class="nav-item ">
                    <a class="nav-link" href="catalogue.php">Catalogue<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="catalogue2.php">Panier</a>
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




        ?>
        <div class="container">
            <form action="panierProcess.php" method="post">
                <div class="row">
                    <h1 class="badge  w-100 p-3 m-3">Article(s) ajouté(s)</h1>
                </div>
                <div class="row">

                    <?php
                    $total = 0;
                    foreach ($_SESSION as $k => $value){
                    ?>

                    <div class="wcolMax col-md-12 d-flex flex-inline justify-content-between align-items-center">
                        <img src="<?php echo $articles[$k]['url']; ?> " class="art-img-px" width="45" height="45" alt="...">
                        <?= $articles[$k]['nom'] ?>
                        <p class="p-3 m-3">
                            <?= $articles[$key - 1]['desc'] ?>
                            <input type="text" name="<?php echo $articles[$k]['id'] ?>" id="<?php echo $articles[$k]['id'] ?>" value="1">
                            <span class="bg-primary text-white p-3"><?= $articles[$k]['prix'] . "  " . MajDevise("euros") ?></span>

                        </p>

                    </div>



                    <div class="col-sm-12 d-flex flex-row justify-content-end align-items-center p-3 m-0">
                        <?php echo "Total : " . totalPanier($myPost); ?>
                    </div>
                    <div class="col-sm-12 d-flex flex-row justify-content-end align-items-center p-3 m-0">
                        <input type="submit" name="Recalculer" id="Recalculer" value="Recalculer" class="btn btn-outline-secondary">
                    </div>
            <?PHP } ?>
                </div>
            </form>
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
*/