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
 *  renvoie les informations d'un article selectionné
 *
 * @param $id   id de l'article
 * @return array detail de l'article
 */
function getArticleInfo($id)
{
    $art1 = [];
    $articles = generateCatalogue();
    if (isExistArticle($id)) {
        for ($i = 0; $i < count($articles); $i++) {
            // si nous sommes sur l'article traité
            if ($articles[$i]['id'] == $id) {
                $arr1 = array('id' => $articles[$i]['id'], 'nom' => $articles[$i]['nom'], 'prix' => $articles[$i]['prix'], 'descFull' => $articles[$i]['descFull'], 'desc' => $articles[$i]['desc'], 'url' => $articles[$i]['url']);
            }
        }

    } else {
        $arr1 = array('id' => "0", 'nom' => "article inconnu", 'prix' => '', 'descFull' => "il semble que vous tentez de visualiser un article inconnu." , 'desc' => 'Article inconnu', 'url' => 'assets/notFound.svg');
    }

    return $arr1;

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
            'desc' => '17-inch Dell TFT LCD Moniteur ÀÉcran Plat',
            'descFull' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit laudantium repellat soluta pariatur modi suscipit obcaecati ducimus dolorem accusamus quasi minus, officia incidunt sit vitae asperiores facilis est vero? In.'),
        array(
            'id' => "2",
            'nom' => "Lampe",
            'prix' => 15,
            'url' => 'assets/lampe.png',
            'desc' => "Lampe à poser en métal vert cèdre h21cm",
            'descFull' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit laudantium repellat soluta pariatur modi suscipit obcaecati ducimus dolorem accusamus quasi minus, officia incidunt sit vitae asperiores facilis est vero? In.'),
        array(
            'id' => "3",
            'nom' => "La chaussure !  ",
            'prix' => 75,
            'url' => 'assets/shoes.jpg',
            'desc' => "Modèle emblématique du défilé Printemps-Été 2018",
            'descFull' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit laudantium repellat soluta pariatur modi suscipit obcaecati ducimus dolorem accusamus quasi minus, officia incidunt sit vitae asperiores facilis est vero? In.'),
        array(
            'id' => "4",
            'nom' => "Chaussure ",
            'prix' => 90,
            'url' => 'assets/shoes.jpg',
            'desc' => "Modèle emblématique du défilé Printemps-Été 2017",
            'descFull' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit laudantium repellat soluta pariatur modi suscipit obcaecati ducimus dolorem accusamus quasi minus, officia incidunt sit vitae asperiores facilis est vero? In.'),
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
            'name' => "myrthe",
            'url_avatar' => "assets/avatar1.png",
            'commentaire' => 'super produit 1!!! ',
            'stars' => '0'
        ),
        2 => array(
            'id' => "1",
            'name' => "Olphat",
            'url_avatar' => "assets/avatar2.png",
            'commentaire' => ' ouais ... super produit 1 ... faut voir. ',
            'stars' => '3'
        ),
        3 => array(
            'id' => "2",
            'name' => "chiita",
            'url_avatar' => "assets/avatar3.png",
            'commentaire' => 'super produit 2!!!',
            'stars' => '2'
        ),
        4 => array(
            'id' => "2",
            'name' => "Tarzan",
            'url_avatar' => "assets/avatar4.png",
            'commentaire' => 'The super produit 2 ! ',
            'stars' => '4'
        ),
        5 => array(
            'id' => "3",
            'name' => "balast",
            'url_avatar' => "assets/avatar3.png",
            'commentaire' => 'super produit 3!!!',
            'stars' => '2'
        ),


    );

    return $com;
}

/**
 *
 * @param $id   id de l'aticle
 * @return bool retourne si existant dans la base ou non
 */
function isExistArticle($id)
{
    $articles = generateCatalogue();
    for ($i = 0; $i < count($articles); $i++) {
        // si nous sommes sur l'article traité
        if ($articles[$i]['id'] == $id) {
            return true;
        }

    }
    return false;

}