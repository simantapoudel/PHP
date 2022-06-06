<?php include 'configdb.php';?>
<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File download</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <a class="link" href="form.php">Go back to Upload form</a>
    <?php while ($files = $result->fetch_assoc()): ?>
        <p><?php echo $files['id'] . " " . $files['name'] . " " . 
        floor($files['size'] / 1000) . "KB" . " " . $files['downloads'] . "<br>"; ?></p>
        <a class="link" href="downloads.php?file_id=<?php echo $files['id'] ?>">Download</a>
    <?php endwhile; ?>

</body>
</html>