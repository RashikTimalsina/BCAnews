<?php
$conn = mysqli_connect('localhost', 'root', '', 'bca_news'); 

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error()); 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $gender = $_POST['gender'];

    // Checking if passwords match
    if ($password !== $confirm_password) {
        echo "Password do not match!";
    } else {

        // Hashing the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert data into database
        $sql = "INSERT INTO users (name, email, password, gender) VALUES ('$name', '$email', '$hashed_password', '$gender')";
        if (mysqli_query($conn, $sql)) {
            echo "Registration successful!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Register</h1>
            </div>
            <div class="col-md-12">
                <form action="" method="post">
                    <div class="form-group mb-2">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>

                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>

                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>

                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>

                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>

                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-success w-100">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
