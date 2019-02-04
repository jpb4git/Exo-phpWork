<?php

/**
 * @param $devise  String de la device utilisée
 * @return string   la device avec la premiere lettre majuscule
 */
function MajDevise($devise)
{
    return ucfirst($devise);
}
/**
 *
 * @param $id
 * @return array
 */
function getArticleInfo($id)
{
    $art = [];
    $articles = generateCatalogue();
    for ($i = 0; $i < count($articles); $i++) {
        // si nous sommes sur l'article traité
        if ($articles[$i]['id'] == $id) {
            //echo "article trouvé!!";
            $art[] = $articles[$i]['id'];
            $art[] = $articles[$i]['nom'];
            $art[] = $articles[$i]['prix'];
            $art[] = $articles[$i]['desc'];
            $art[] = $articles[$i]['url'];

        }

    }
    return $art;

}

/**
 *  generateCatalogue  fonction qui renvoie le catalogue des articles
 *
 * @return array
 */
function generateCatalogue()
{
    $articles = array(

        array(
            'id' => "1",
            'nom' => 'l\'écran !',
            'prix' => 599,
            'url' => 'assets/ecran.jpg',
            'desc' => '17-inch Dell TFT LCD Moniteur ÀÉcran Plat'),
        array(
            'id' => "2",
            'nom' => "Lampe",
            'prix' => 15,
            'url' => 'assets/lampe.png',
            'desc' => "Lampe à poser en métal vert cèdre h21cm"),
        array(
            'id' => "3",
            'nom' => "La chaussure !  ",
            'prix' => 75,
            'url' => 'assets/shoes.jpg',
            'desc' => "Modèle emblématique du défilé Printemps-Été 2018"),
        array(
            'id' => "4",
            'nom' => "Chaussure ",
            'prix' => 90,
            'url' => 'assets/shoes.jpg',
            'desc' => "Modèle emblématique du défilé Printemps-Été 2017")
    );

    return $articles;

}

/**
 *
 * @return array     la liste des articles
 */
function getCommentaires()
{
    $com = array(
        1 => array(
            'id' => "1",
            'url_avatar' => "assets/avatar1.png",
            'commentaire' => 'super produit 1!!! ',
        ),
        2 => array(
            'id' => "1",
            'url_avatar' => "assets/avatar2.png",
            'commentaire' => ' ouais ... super produit 1 ... faut voir. ',
        ),
        3 => array(
            'id' => "2",
            'url_avatar' => "assets/avatar3.png",
            'commentaire' => 'super produit 2!!!',
        ),
        4 => array(
            'id' => "2",
            'url_avatar' => "assets/avatar4.png",
            'commentaire' => 'The super produit 2 ! ',
        ),
        5 => array(
            'id' => "3",
            'url_avatar' => "assets/avatar3.png",
            'commentaire' => 'super produit 3!!!',
        ),


    );

    return $com;
}