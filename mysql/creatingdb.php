<?php 

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "mydb";

//Creating a connection object
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection Failed " . $conn->connect_error);
} else {
    echo "Connection Successful <br>";
}

//Creating database
// $sql = "CREATE DATABASE mydb";

// Creating a table
// $sql = "CREATE TABLE MyGuests (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

//Inserting data into the table
// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
//         VALUES ('Mahadev', 'Shamboo', 'shamboo@gmail.com')";

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
//         VALUES ('Parley', 'G', 'parley@gmail.com');";
// $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
//         VALUES ('Shyam', 'Sung', 'samsung@gmail.com');";
// $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
//         VALUES ('App', 'Pal', 'apple@gmail.com')";

// if ($conn->multi_query($sql) === TRUE) {
//     $last_id = $conn->insert_id; //gets the id of the last inserted/updated record immediately
//     echo "New Record created and the last id is " . $last_id;
// } else {
//     echo "Record was not created" . $sql . "<br>" . $conn->error;
// }

//Prepared Statements => way to execute the sql statement to prevent SQL injection
// $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?,?,?)");
// $stmt->bind_param("sss", $firstname, $lastname, $email);

// $firstname = "Coca";
// $lastname = "Cola";
// $email = "cocacola@gmail.com";
// $stmt->execute();

// $firstname = "Pepsi";
// $lastname = "Cola";
// $email = "pepsicola@gmail.com";
// $stmt->execute();

// echo "New records created";

// $stmt->close();

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

 if ($result->num_rows > 0) {
     while ($row = $result->fetch_assoc()) {
         echo $row['id'] . " " . $row['firstname'] . " " . $row['lastname'] . "<br>";
     }
 } else {
     echo "0 results";
 }

$conn->close();
