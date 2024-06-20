<?php
    $books = [];

    // cek file readingList.json sudah dibuat atau belum
    if (file_exists("readingList.json")) {
        $file = file_get_contents("readingList.json");
        $books = json_decode($file, true);
    }

    if (isset($_POST['books'])) {   // cek ada data baru
        $data = $_POST["books"];    // mengambil data dari form
        $books[] = [
            'title' => $data,
            'status' => 0
        ];
        $readingList = json_encode($books, JSON_PRETTY_PRINT);
        file_put_contents("readingList.json", $readingList);

        // directing to index.php to prevent double input
        header('location:%2310-todoApp.php');
    }

    // Update status
    if (isset($_GET['status'])) {
        $books[$_GET['key']]['status'] = $_GET['status'];

        $readingList = json_encode($books, JSON_PRETTY_PRINT);
        file_put_contents("readingList.json", $readingList);

        // redirect page
        header('location:%2310-todoApp.php');

        // Debug
        // print_r($_GET['status']);
        // echo "<br>";
        // print_r($books[$_GET['key']]['status']);
    }

    // Delete Book
    if (isset($_GET['delete'])) {
        // delete data according to key
        unset($books[$_GET['key']]);

        // encode data to json
        $readingList = json_encode($books, JSON_PRETTY_PRINT);
        print_r ($readingList);
        // // Update data
        file_put_contents("readingList.json", $readingList);        
        header('location:%2310-todoApp.php');
    }

    // debug
    echo "<br>";
    echo "<br>";
    print_r($books);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading List</title>
</head>

<body>
    <h1>Reading List</h1>
    <form action="" method="POST">
        <label for="books">Book : </label>
        <input type="text" name="books" id="books">
        <button type="submit">save</button>
    </form>

    <ul>
        <?php foreach ($books as $key => $val) : ?>
            <li>
                <input 
                    type="checkbox" 
                    name="book" 
                    onclick="window.location.href='%2310-todoApp.php?status=<?php echo ($val['status'] == 1) ? 0 : 1 ?>&key=<?php echo $key; ?>'" 
                    <?php if ($val['status'] == 1) echo 'checked' ?>
                >
                <span><?php echo $key; ?></span>
                <label for="<?php echo $val['title']; ?>">
                    <?php
                    if ($val['status'] == 1) {
                        echo '<del>' . $val['title'] . '</del>';
                    } else {
                        echo $val['title'];
                    }
                    ?>
                </label>
                <a href="%2310-todoApp.php?delete=1&key=<?php echo $key; ?>" onclick="return confirm('Delete Data?')">delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>