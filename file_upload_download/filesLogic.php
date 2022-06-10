<?php include 'configdb.php' ?>
<?php

$sql = "SELECT * FROM files";
$result = $conn->query($sql);
// $files = '';


//uploading files   
if (isset($_POST['upload'])) { //if upload button is clicked on the form
    //name of the uploaded file
    $filename = $_FILES['myfile']['name'];
    // print_r($_FILES['myfile']);
    //destination of file on the server
    $target_dir = "uploads/";
    $destination = $target_dir . $filename;
    //extension of the uploaded file
    // $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    $extensionarray = explode('.', $filename);
    $extension = strtolower(end($extensionarray));
    //physical file of the temporary uploads directory on the server
    $tempfile = $_FILES['myfile']['tmp_name'];
    //size of the uploaded file
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['pdf', 'zip', 'docx', 'jpeg', 'jpg', 'png'])) {
        echo "The files must be in pdf, zip, docx, jpg, png and jpeg format";
    } elseif ($size > 10000000) { //files must be <= 10mb
        echo "File too large";
    } else {
        if (move_uploaded_file($tempfile, $destination)) {
            $sql = "INSERT INTO files (name, size, downloads) VALUES ('$filename', $size, 0)";
            if ($conn->query($sql)) {
                // echo "File uploaded";
                // header("refresh:0;url=downloads.php");
                header("Location: downloads.php"); //redirect to downloads.php
            } else {
                echo "File not uploaded";
            }
        }
    }
}

if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];
    $sql = "SELECT * FROM files WHERE id=$id";
    $result = $conn->query($sql);
    $file = $result->fetch_assoc();
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' .basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        readfile($filepath);

        // Now updating downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        $conn->query($updateQuery);
        exit;
    }
}

$conn->close();

?>