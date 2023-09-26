<?php
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = $_FILES["img"]["name"];
    $tmp = $_FILES["img"]["tmp_name"];
    $new_route_db = "/public/img_uploaded/$name";
    $new_route = $_SERVER["DOCUMENT_ROOT"] . $new_route;

    move_uploaded_file($tmp, $new_route);

    require_once($_SERVER["DOCUMENT_ROOT"] . "/src/config/database.php");

    $stmnt = $pdo->prepare("INSERT INTO imagenes(image_url) VALUES (:link)");
    $stmnt->bindParam(":link", $new_route_db, PDO::PARAM_STR);
    $stmnt->execute();

    $stmnt2 = $pdo->query("SELECT * FROM imagenes WHERE image_url = '$new_route_db'");
    $data = $stmnt2->fetch(PDO::FETCH_ASSOC);

    session_start();
    $_SESSION["img_data"] = $data;

    header("Location: /src/views/show.php?id=".$data["id"]);
}