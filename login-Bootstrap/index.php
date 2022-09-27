<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>Login Form</title>
</head>
<body class="m-0 vh-100 row justify-content-center align-items-center">
    <form action="auth/authController.php" method="POST">
        <div class="card d-flex container-fluid w-25 ">
            <h1 class="text-center mt-3">Login</h1>
            <div class="form-floating mb-3 mt-4">
                <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                <label for="username" class="form-label">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="btn btn-primary w-100 mt-2 mb-2">Submit</button>
            <input type="hidden" name="action" value="access">
        </div>
    </form>
</body>
</html>