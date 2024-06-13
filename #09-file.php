<?php
    // Writing file
    $message = "This is where everything began!";
    file_put_contents("file01.txt", $message);
    echo "<br>"; echo "<br>";

    // Reading file
    $content = file_get_contents("file01.txt");
    echo $content;
    echo "<br>"; echo "<br>";

    $character = [
        ["Name" => "Hime", "Occu" => "Princess"],
        ["Name" => "Mikazuki", "Occu" => "Samurai"],
        ["Name" => "Yindalf", "Occu" => "MageKnight"],
        ["Name" => "Cain", "Occu" => "Paladdin"],
        ["Name" => "Reika", "Occu" => "Hunter"]
    ];

    // Serialize
    $data_seri = serialize($character);
    file_put_contents("data_Serialize.txt", $data_seri);
    $content_Seri = file_get_contents("data_Serialize.txt");
    $output_seri = unserialize($content_Seri);

    // json
    $data_json = json_encode($character);
    file_put_contents("data_json.json", $data_json);
    $content_json = file_get_contents("data_json.json");
    $output_json = json_decode($content_json);

    foreach ($output_json as $key => $val) {
        $data = (array)$val;    // convery object to array
        print_r($data["Name"]);
        echo "<br>";
    }
?>