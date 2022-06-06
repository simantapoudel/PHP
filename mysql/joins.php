<?php 
    /*
        SQL Query Joins
            To join the tables, at least one column must be same 
            Join => Cross product between the tables + condition
            When just JOIN clause is used, by default it will perform INNER JOIN operation
            Inner Join -> Returns records that have matching values in both tables
                Syntax: SELECT column_name(s) FROM table1 INNER JOIN table2 ON table1.column_name=table2.column_name;
            $sql = 'SELECT customers.cid, cname, orderAmount FROM customers INNER JOIN orders on customers.cid=orders.cid';

            Outer Join
                Left -> Returns all records in the left table plus all records that have matching values in both tables
                Syntax: SELECT column_name(s) FROM table1 LEFT JOIN table2 ON table1.column_name=table2.column_name;
            $sql = 'SELECT customers.cid, cname, orderAmount FROM customers LEFT JOIN orders on customers.cid=orders.cid';

                Right -> Returns all records in the right table plus all records that have matching values in both tables
                Syntax: SELECT column_name(s) FROM table1 RIGHT JOIN table2 ON table1.column_name=table2.column_name;
            $sql = 'SELECT customers.cid, cname, orderAmount FROM customers RIGHT JOIN orders on customers.cid=orders.cid';


                Full -> Returns all records in both tables plus all records that have matching values in both tables
                Syntax: SELECT column_name(s) FROM table1 RIGHT JOIN table2 ON table1.column_name=table2.column_name
                        UNION 
                        SELECT column_name(s) FROM table1 LEFT JOIN table2 ON table1.column_name=table2.column_name
            $sql = 'SELECT customers.cid, cname, orderAmount FROM customers RIGHT JOIN orders on customers.cid=orders.cid
                    UNION
                    SELECT customers.cid, cname, orderAmount FROM customers LEFT JOIN orders on customers.cid=orders.cid';

            Cross Join-> cartesian product of the tables 
                Syntax: SELECT column_name(s) FROM table1 CROSS JOIN table2;
                if condition is specified, as table1.column_name=table2.column_name then it works the same as inner join
            $sql = 'SELECT customers.cid, cname, orderAmount FROM customers CROSS JOIN orders';
            
            Self Join -> joins the table with itself, makes different aliases for the same table for cross product
                Syntax: SELECT column_name(s) FROM table1 T1, table1 T2 WHERE condition;
            $sql = 'SELECT A.cid FROM customers A, customers B WHERE A.cid=B.cid';

    */

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'join';

//Creating a connection object
$conn = new mysqli($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
//     die('Connection Failed ' . $conn->connect_error);
// } else {
//     echo "Connected";
// }

$sql = 'SELECT A.cid FROM customers A, customers B WHERE A.cid=B.cid';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // echo $row['cid'] . " " . $row['cname'] . " " . $row['orderAmount'] . "<br>";
        echo $row['cid'] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();