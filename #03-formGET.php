<?php
    // Form
    // Method GET / query string
    $name = $_GET['name'];
    $job = $_GET['job'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="get">
        <label for="name">Name : </label>
        <input type="text" name="name" id="name">

        <label for="job">Job : </label>
        <input type="text" name="job" id="job">

        <button type="submit">Submit</button>
    </form>

    <h1>Welcome, <?php echo $name ?></h1>
    <p>Your occupation is <?php echo $job ?></p>
</body>
</html>