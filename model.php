<?php
function getPosts()
{
    try
    {
    	//Connexion a la bdd BlogBdd en local pour le moment, User root pas de mot de passe
        $db = new PDO('mysql:host=localhost;dbname=BlogBdd;charset=utf8', 'root', '');
    }
    //Traitement en cas d'erreur lors de connexion, on évite d'afficher un msg d'erreur avec des informations sensibles
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    
    //On sélectionne les données que l'on veux ressortir de la base, j'utilise la fonction DATE_FORMAT pour afficher les données dans un ordre plus courant en france et j'affiche les articles du plus récent au plus ancien et je limite le nombre d'articles à 10.
    $req = $db->query('SELECT title, chapo, DATE_FORMAT(last_update, \'%d/%m/%Y à %Hh%imin%ss\') AS last_update FROM Post ORDER BY last_update DESC LIMIT 0, 10');

    return $req;
}

