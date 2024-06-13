<?php
    // For
    for ($i = 0; $i <= 10; $i++){
        echo $i;
        echo "<br>";
    }
    echo "<br>";

    // While
    $j = 0;
    while ($j <=10) {
        echo $j;
        echo "<br>";
        $j++;
    }
    echo "<br>";

    // do while
    do {
        echo $j;
        echo "<br>";
        $j++;
    } while ($j <=10);
    echo "<br>";

    // foreach
    $data_chara = ["hime", "mikazuki", "yindalf", "cain", "reika"];
    foreach($data_chara as $chara => $name) {
        echo "Name : ", $name;
        echo "<br>";
    }
    echo "<br>";

    // break
    foreach($data_chara as $chara => $name) {
        echo $name;
        echo "<br>";
        if ($name == "yindalf") {
            echo "<b>Yindalf is found!!!</b>";
            break;
        }
    }
    echo "<br>";

    // continue
    foreach($data_chara as $chara => $name) {
        // echo $name;
        echo "<br>";
        if ($name == "yindalf") {
            echo "This is Yindalf";
            continue;
        }
        echo "<b>This not yindalf!!!</b>";
    }
    echo "<br>";
    echo "<br>";

    // array to table
    $hime = [
        "name" => "Hime",
        "occu" => "Princess"
    ];
    $mika = [
        "name" => "Mikazuki",
        "occu" => "Samurai"
    ];
    $yind = [
        "name" => "Yindalf",
        "occu" => "MageKnight"
    ];
    $cain = [
        "name" => "Cain",
        "occu" => "Paladdin"
    ];
    $reik = [
        "name" => "Reika",
        "occu" => "Hunter"
    ];
    $charas = [$hime, $mika, $yind, $cain, $reik];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Occupation</th>
        </tr>

        <?php foreach ($charas as $chara => $bio) : ?>
            <tr>
                <td><?php echo $bio["name"]; ?></td>
                <td><?php echo $bio["occu"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>