<?php
include_once("./inc/fonctions.php");
// l'acces aux API ne peut se faire en php que depuis une connexion sécurisée (HTTPS)
// le code si dessous ne sera donc pas valable depuis le localhost(HTTP)
/* if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (!empty($_POST['artist']) && isset($_POST['artist'])) {
        $url = "https://musicbrainz.org/ws/2/artist/?";
        $getdata = http_build_query(
            array(
                'query' => $_POST['artist'],
                'fmt' => 'json'
            )
        );
        var_dump($url);
        $json = file_get_contents($url.$getdata);
        var_dump($json);
        $obj = json_decode($json);
        var_dump($obj);
    }
} */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APIMusicBrainz AJAX</title>
    <script src="./assets/js/script.js" defer></script>
</head>

<body>
    <form action="" method="post" id="req">
        <div>
            <input type="text" name="artist" placeholder="Quel artiste?" id="artist">
        </div>
        <div>
            <input type="submit" value="Rechercher">
        </div>
    </form>
    <div id="reponse"></div>

</body>

</html>