<?php include('filesLogic.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
        <h2>Upload File</h2>
        <input type="file" name="myfile" id="myfile">
        <input type="submit" name="upload" value="Upload">
    </form>
</body>
</html>