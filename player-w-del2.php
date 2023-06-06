<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>

<body>
    <div class="container">
        <h3>Update</h3>
        <form action="backend2-w-del.php" method="post">
            <input type="text" name="Name" placeholder="Enter Player's Name" required><br><br>
            <input type="submit" value="Delete" name="smt">
        </form>
    </div>
    <style>
        h3 {
            border-bottom: 3px solid black;
        }

        .container {
            background-color: wheat;
            padding: 20px;
        }

        body {
            background-color: aqua;
        }
    </style>

</body>

</html>

<?php
$a = mysqli_connect('localhost', 'root', '', 'user_registration');

$E = $_POST['Email'];
$P = $_POST['Password'];

$qurey = mysqli_query($a, "SELECT * FROM registration_form WHERE Email='$E' and Password='$P'");
if (mysqli_num_rows($qurey) > 0) {
    echo "<script>
            alert('Login Successfull...');
        </script>";
} else {
    header('location:login.html');
    echo "Please enter correct password";
}
?>