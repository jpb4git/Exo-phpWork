<?php
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);
$articleNom = ['stylo','ecran','lampe'];
$articleprix = [2,630,56];
$articleprix = ["https://www.google.fr/imgres?imgurl=https%3A%2F%2Fwww.rvdgallery.be%2Fmedias%2Fimages%2Fimg-0579-2.jpg&imgrefurl=https%3A%2F%2Fwww.rvdgallery.be%2Fboutique%2Flampes-a-poser-table-lamps%2Flampe-a-poser-a-double-coupole-stilnovo-1950-italy.html&docid=hpiUbbv-PruWsM&tbnid=RHj8g2cTJLf6XM%3A&vet=10ahUKEwiugrTV4ZfgAhUMz4UKHd_XCe4QMwh2KAEwAQ..i&w=1920&h=1920&bih=884&biw=1920&q=lampe%20img&ved=0ahUKEwiugrTV4ZfgAhUMz4UKHd_XCe4QMwh2KAEwAQ&iact=mrc&uact=8",
                "https://www.google.fr/imgres?imgurl=https%3A%2F%2Fimg.bfmtv.com%2Fc%2F630%2F420%2Fbbd%2F77adc532a2762f674037acc0e4f9a.jpg&imgrefurl=https%3A%2F%2Fwww.01net.com%2Fastuces%2Fqu-est-ce-que-le-reverse-ghosting-des-ecrans-lcd-638971.html&docid=UffxfZOtaOBaxM&tbnid=jjP6Sbqq2_sUKM%3A&vet=10ahUKEwi295rp4ZfgAhUEJBoKHW_bBecQMwhIKAwwDA..i&w=630&h=420&bih=884&biw=1920&q=ecran%20img&ved=0ahUKEwi295rp4ZfgAhUEJBoKHW_bBecQMwhIKAwwDA&iact=mrc&uact=8",
                "https://www.google.fr/imgres?imgurl=https%3A%2F%2Fimg.lovepik.com%2Felement%2F40025%2F6106.png_1200.png&imgrefurl=https%3A%2F%2Ffr.lovepik.com%2Fimage-400256106%2Fballpoint-pen.html&docid=37N3zeoNDp1N7M&tbnid=xAyQH2K0xz3wmM%3A&vet=10ahUKEwiJst7z4ZfgAhWjx4UKHQ5ZDuoQMwhKKAswCw..i&w=2617&h=1020&itg=1&bih=884&biw=1920&q=stylo%20img&ved=0ahUKEwiJst7z4ZfgAhWjx4UKHQ5ZDuoQMwhKKAswCw&iact=mrc&uact=8"
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
</head>

<body>
  <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">EXERCICE 1 </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="articles.php">Articles</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              
            </ul>
          </div>
        </nav>
  </header>
  <main>
      Main
  </main>  
  <footer>

  </footer>  


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>
