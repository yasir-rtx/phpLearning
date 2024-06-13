<?php
    // IF
    $data = "Hunter";
    $licence = true;
    if ($data == "Hunter") {
        if ($licence) {
            echo "Your job is Hunter";
        }
        else {
            echo "Your job is not hunter";
        }
    }
    elseif ($data != "Hunter" && !$licence) {
        echo "Your job is not hunter";
    }
    else {
        echo "Nothing happen!";
    }

    // Switch
    $input = "x";
    switch($input) {
        case "x":
            echo "JUMP";
            break;
        case "Y":
            echo "DEFEND";
            break;
        case "A":
            echo "ATTACK";
            break;
        case "B":
            echo "SKILL";
            break;
        default:
            echo "Nothing todo!";
            break;
    }

    // Ternary Operator
    $val = 77;
    echo ($val>=80) ? "Success" : "Failed";
?>