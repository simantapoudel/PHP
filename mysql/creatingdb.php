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

// $sql = "SELECT id, firstname, lastname FROM MyGuests"; // Selects the columns from the database table to be displayed
// $result = $conn->query($sql); // runs the query and stores the result set in variable $result

//num-rows returns the number of rows in the result set
// if ($result->num_rows > 0) {
//     echo "<table><tr><th>ID</th><th>Name</th></tr>";
//     // output data of each row
       // fetch_assoc() puts all the result in an associative array to loop through if num_rows > 0 
//     while($row = $result->fetch_assoc()) {
//       echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
//     }
//     echo "</table>";
//   } else {
//     echo "0 results";
// }


//Deletion of records

// $sql = "DELETE FROM MyGuests WHERE firstname='Hari' AND lastname='Bahadur'";
// if ($conn->query($sql) === TRUE) {
//     echo "Record deleted successfully";
// } else {
//     echo "Deletion failed";
// }

//Updating the records

// $sql = "UPDATE MyGuests SET firstname='Eye', lastname='Phone' WHERE firstname='Parley' AND lastname='G'";
// $sql = "UPDATE MyGuests SET email='eyephone@gmail.com' WHERE email='parley@gmail.com'";

// if ($conn->query($sql) === TRUE) {
//     echo "Record updated successfully";
// } else {
//     echo "Update failed";
// }

$sql = "SELECT * FROM MyGuests LIMIT 2, 2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row['id'] . " " . $row['firstname'] . " " . $row['lastname'] . "<br>";
    }
} else {
    echo "No results";
}

$conn->close();