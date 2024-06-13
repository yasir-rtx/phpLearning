<?php
    // local variabel
    echo "Local Variabel";echo "<br>";
    $data = "yasir";
    function sayHi($name) { // $name = local variable or parameter
        echo "Hi, $name!";
    }
    sayHi($data);   // $data is argument
    echo "<br>"; echo "<br>";

    // global variabel
    echo "Global Variabel";echo "<br>";
    $nama = "hime";
    function sayHello() {
        global $nama;   // global variable | not recomended
        echo "Hello, $nama";
    }
    sayhello();
    echo "<br>"; echo "<br>";

    // return
    function phi($diameter, $radius) {
        // return $diameter / $radius;
        $phi = $diameter / $radius;
        return $phi;
    }
    echo phi(22, 7);
    echo "<br>"; echo "<br>";

    // parameter referensi
    function changeName(&$namae) {  // if we remove &, deklaration in function will be ignored
        $namae = "Yindalf";
    }
    $namae = "Yelf";
    changeName($namae);
    echo $namae;
?>