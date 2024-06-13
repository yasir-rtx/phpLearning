<?php
    $books = [];
    
    // cek file readingList.json sudah dibuat atau belum
    if (file_exists("readingList.json")) {
        $file = file_get_contents("readingList.json");
        $books = json_decode($file);
    }

    if (isset($_POST['books'])) {   // cek ada data baru
        $data = $_POST["books"];    // mengambil data dari form
        $books[] = [
            'title' => $data,
            'status' => 0
        ];
        $readingList = json_encode($books);
        file_put_contents("readingList.json", $readingList);
    }
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
            <?php $data = (array)$val; // convery object to array ?>   
            <li>
                <input type="checkbox" name="book" id="<?php echo $data['title']; ?>">
                <label for="<?php echo $data['title']; ?>"><?php echo $data['title']; ?></label>
                <a href="#">delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>