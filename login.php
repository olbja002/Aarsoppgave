<?php
// Connect to the database
include "connect.php";

$conn = $dbc;

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the entered username and password values
if (isset($_POST['nickname']) && isset($_POST['md5_pass'])) {
    $username = $_POST['nickname'];
    $password = $_POST['md5_pass'];

    // Query the database to retrieve the user's information based on their entered username
    $sql = "SELECT * FROM users WHERE nickname = '$username'";
    $result = mysqli_query($conn, $sql);

    // Check if a user was found with the entered username
    if (mysqli_num_rows($result) == 1) {
        // Retrieve the user's information
        $user = mysqli_fetch_assoc($result);
        // Compare the retrieved password value with the entered password value
        if (password_verify($password, $user['md5_pass'])) {
            // Passwords match - allow access to restricted content
            echo "<p>logged in as ",$username,"</p>";
            echo "<script>alert('Passwords match - allow access to restricted content');</script>";

//$_SESSION['signed_in'] = true;
//$_SESSION['user_id'] = $row['user_id'];
//$_SESSION['user_name'] = $result['nickname'];
//$_SESSION['user_level'] = $row['user_level'];

            //start selve login prosessen

        } else {
            // Passwords don't match - display an error message
            echo "<p>you are not logged in</p>";
            echo "<script>alert('Passwords don\'t match');</script>";
        }
    } else {
        // No user was found with the entered username - display an error message
        echo "<p>you are not logged in</p>";
        echo "<script>alert('No user was found with the entered username');</script>";
    }
}

// Close the database connection
mysqli_close($conn);

?>