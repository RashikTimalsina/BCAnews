<?php
$conn = mysqli_connect('localhost', 'root', '', 'bca_news'); 

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error()); 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to check if the email exists in the database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    
    if (mysqli_num_rows($result) > 0) {
        // User exists, now verify the password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            echo "Login successful!";
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "Error 404 User not found!";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Login</h1>
            </div>
            <div class="col-md-12">
                <form action="" method="post">
                    <div class="form-group mb-2">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>

                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>

                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-success w-100">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
