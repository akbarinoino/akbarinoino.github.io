<?php
    $nama     = "Sergio Akbarino";
    $nim      = "102022500306";
    $fakultas = "Fakultas Rekayasa Industri";
    $prodi    = "S1 Sistem Informasi";
    $foto     = "Toad★.jpg";

    $sosmed = [
        "Github" => "https://github.com/akbarinoino",
        "IG"     => "https://instagram.com/akbarinouuwww",
    ];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Personal web <?php echo $nama; ?>">
    <title>Personal Web - <?php echo $nama; ?></title>

    <link rel="icon" type="image/png" href="favicon.png">

    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">

        <img class="foto" src="<?php echo $foto; ?>" alt="foto <?php echo $nama; ?>">

        <h1><?php echo $nama; ?></h1>
        <h3><?php echo $nim . " / " . $fakultas . " / " . $prodi; ?></h3>

        <div class="sosmed">
            <?php foreach($sosmed as $label => $url){ ?>
                <a href="<?php echo $url; ?>" target="_blank"><?php echo $label; ?></a>
            <?php } ?>
        </div>

    </div>
</body>
</html>