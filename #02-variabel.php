<?php
    // Integer
    $data_integer = 15;
    $data_integer++;    // Increment
    $data_integer--;    // Decrement
    $data_integer++;
    echo "Data Integer : $data_integer";

    echo "<br>";echo "<br>";
    
    // float
    $data_float = 3.14;
    echo "Data Float : ", round($data_float, 1);

    echo "<br>";echo "<br>";

    // String
    $data_string = "Muhammad "."Yasir"; // Concat => join 2 string
    echo "Data String : $data_string";

    echo "<br>";echo "<br>";

    // Boolean
    $data_boolean = true && false;
    var_dump($data_boolean);    // display value and data type

    echo "<br>";echo "<br>";

    // Array
    echo "Array"; echo "<br>";
    $data_array = ["Hime", "Mikazuki", "Yindalf", "Cain"];
    $data_array[] = "Reka";    // Adding new value to array
    $data_array[4] = "Reika";   // modifying array value
    print_r($data_array);
    echo "<br>";
    var_dump($data_array);

    echo "<br>";echo "<br>";

    // Array Asosiatif
    // $data_asosiatif['name'] = "Yasir Chaniago"; // change int to string in index
    echo "Array Asosiatif";echo "<br>";
    $data_asosiatif = [
        'name' => 'yasir chaniago',
        'blood' => 'AB'
    ];
    echo "Data Array Asosiatif Nama : ", $data_asosiatif['name'];
    echo "<br>";
    echo "foreach";
    echo "<br>";
    foreach($data_asosiatif as $data => $value) {
        echo $data, " : ", $value;
        echo "<br>";
    }

    echo "<br>";echo "<br>";

    // Multidimesional Array
    // $data_multi = [
    //     ["Hime", "Mage"],
    //     ["Mikazuki", "Samurai"],
    //     ["Yindalf", "MageKnight"],
    //     ["Cain", "Paladdin"],
    //     ["Reika", "Hunter"]
    // ];
    // for ($i = 0; $i < count($data_multi); $i++) {
    //     echo "Name : ", $data_multi[$i][0];echo "<br>";
    //     echo "Job  : ", $data_multi[$i][1];
    //     echo "<br>";echo "<br>";
    // }
    $chara0 = ["Hime", "Mage"];
    $chara1 = ["Mikazuki", "Samurai"];
    $chara2 = ["Yindalf", "MageKnight"];
    $chara3 = ["Cain", "Paladdin"];
    $chara4 = ["Reika", "Hunter"];
    $data_multi = [
        'Chara1' => $chara0,
        'Chara2' => $chara1,
        'Chara3' => $chara2,
        'Chara4' => $chara3,
        'Chara5' => $chara4
    ];
    foreach($data_multi as $data => $value) {
        echo $data, " => Name : ", $value[0], " | Job : ", $value[1];
        echo "<br>";
    }
?>