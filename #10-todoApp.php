<?php
    // Declare empty array of books
    $books = [];

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // functions
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // Save Data
    function saveData ($books) {
        // Encode new data from array to json object
        $readingList = json_encode($books, JSON_PRETTY_PRINT);  // JSON_PRETTY_PRINT => make indent in json file
        
        // Update json file with new data
        file_put_contents("readingList.json", $readingList);
        
        // redirecting page to #10-todoApp.php
        header('location:%2310-todoApp.php');
    }
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // cek file readingList.json sudah dibuat atau belum
    if (file_exists("readingList.json")) {
        $file = file_get_contents("readingList.json");
        $books = json_decode($file, true); // true => decode json object to array
    }

    // Add new data
    if (isset($_POST['save'])) {
        // Assign title to $title
        strlen($_POST['title'])==0 ? $title = "No Title" : $title = $_POST['title'];
        // Assign new book to array
        $books[] = ['title' => $title,'status' => 0];
        saveData($books);
    }

    // Update status
    if (isset($_GET['status'])) {
        $books[$_GET['key']]['status'] = $_GET['status'];
        saveData($books);               // save data
    }

    // Delete Book
    if (isset($_GET['delete'])) {
        unset($books[$_GET['key']]);    // delete data according to key
        saveData($books);               // save data
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
    
    <!-- Form Input Data -->
    <form action="" method="POST">
        <label for="title">Book : </label>
        <input type="text" name="title" id="title">
        <button type="submit" name="save">save</button>
    </form>

    <!-- Books List -->
    <ul>
        <?php foreach ($books as $key => $val) : ?>
            <li>
                <!-- Checkbox -->
                <input 
                    type="checkbox" 
                    name="book" 
                    onclick="window.location.href='%2310-todoApp.php?status=<?php echo ($val['status'] == 1) ? 0 : 1 ?>&key=<?php echo $key; ?>'" 
                    <?php if ($val['status'] == 1) echo 'checked' ?>
                >

                <!-- Book title -->
                <label for="<?php echo $val['title']; ?>">
                    <?php
                    if ($val['status'] == 1) {
                        echo '<del>' . $val['title'] . '</del>';
                    } else {
                        echo $val['title'];
                    }
                    ?>
                </label>

                <!-- Delete Button -->
                <a href="%2310-todoApp.php?delete=1&key=<?php echo $key; ?>" onclick="return confirm('Delete Data?')">delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>