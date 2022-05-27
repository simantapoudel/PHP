<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form practice</title>
    <style>
        .error { color: #FF0000;}
    </style>
</head>
<body>
<?php 
    $name = $email = $password = $gender = "";
    $nameerr = $emailerr = $passworderr = $gendererr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['name'])) {
            $nameerr = "Name is required";
        } else {
            $name = test_input_data($_POST['name']);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameerr = "Only letters and whitespaces are allowed!";
            }
        }
        if (empty($_POST['email'])) {
            $emailerr = "";
        } else {
            $email = test_input_data($_POST['email']);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailerr = "Enter a valid email address";
            }
        }
        if (empty($_POST['password'])) {
            $passworderr = "Password is required";
        } else {
            $password = test_input_data($_POST['password']);
        }
        if (empty($_POST['gender'])) {
            $gendererr = "";
        } else {
            $gender = test_input_data($_POST['gender']);
        }
    }

    function test_input_data($data)
    {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }
?>
    <h2>Login Form</h2>
    <p><span class="error">* Required Fields</span></p>
    <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name : </label>
        <input type="text" id="name" name="name" placeholder="John Doe" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameerr ?></span>
        <br><br>
        <label for="email">Email : </label>
        <input type="email" id="email" name="email" placeholder="johndoe@gmail.com" value="<?php echo $email; ?>">
        <span class="error"><?php echo $emailerr ?></span>
        <br><br>
        <label for="password">Password : </label>
        <input type="password" id="password" name="password" placeholder="*****" value="<?php echo $password; ?>">
        <span class="error">* <?php echo $passworderr ?></span>
        <br><br>
        <label for="gender">Gender : </label>
        <input type="radio" id="gender" name="gender"
         <?php if (isset($gender) && $gender=="male") echo "checked"; ?> 
         value="male">Male
        <input type="radio" id="gender" name="gender"
         <?php if (isset($gender) && $gender=="female") echo "checked"; ?>
         value="female">Female 
        <input type="radio" id="gender" name="gender"
         <?php if (isset($gender) && $gender=="others") echo "checked"; ?>
         value="others">Others
        <span class="error"><?php echo $gendererr ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    
    <?php
         echo $name . "<br>";
         echo $email . "<br>";
         echo $password . "<br>";
         echo $gender;
    ?>
</body>
</html>
