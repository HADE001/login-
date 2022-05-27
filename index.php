<?php
session_start();
require("./path.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>title</title>
    <link rel="stylesheet" href="/style.css"> 
    <!-- do not use ./style.css or style.css -->
</head>

<body>
    <div>
        <?php echo RootContent(); ?>
    </div>
    <script src="/script.js"></script>
</body>

</html>