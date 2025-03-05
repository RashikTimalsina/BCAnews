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
                        <input type="text" name="name" id="name" class="form-control">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                        <label for="gender">Phone</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="Select">Select Gender
                            </option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <div class="form_group mb-2">
                            <button class="btn btn-success w-100">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>