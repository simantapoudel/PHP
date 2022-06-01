<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File download</title>
</head>
<body>
    <table>
        <thead>
            <th>ID</th>
            <th>Filename</th>
            <th>Size in KB</th>
            <th>Downloads</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php print_r($files); ?>
            <?php foreach ($files as $file): ?>
                <tr>
                    <td><?php echo $file['id']; ?></td>
                    <td><?php echo $file['name']; ?></td>
                    <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
                    <td><?php echo $file['downloads']; ?></td>
                    <td><a href="downloads.php?file_id=<?php echo $file['id']; ?>">Download</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
</body>
</html>