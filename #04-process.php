<?php
    // Form
    // Method POST
    $name = $_POST['name'];
    $job = $_POST['job'];
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <h1>Welcome, <?php echo $name ?></h1>
    <p>Your occupation is <?php echo $job ?></p>
</body>
</html>