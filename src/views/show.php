<?php
session_start();
if (!isset($_GET["id"]) || $_GET["id"] === "") {
    echo "No hay id";
    exit();
}
$url_img = $_SESSION["img_data"]["image_url"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/dist/output.css" rel="stylesheet">
</head>

<body>
    <main class="min-h-screen flex justify-center items-center">
        <div class="h-[400px] w-[400px] flex flex-col justify-center items-center gap-5">
            <h2 class="text-3xl">Uploaded Successfully!</h2>
            <div class="h-[250px]">
                <img src="<?= $url_img ?>" alt="Picture" class="h-full w-full object-contain rounded-md">
            </div>

            <div>
                <a href="<?= $url_img ?>">Ver imagen</a>
            </div>
        </div>
    </main>
</body>

</html>