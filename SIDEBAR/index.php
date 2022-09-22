<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>

<body>

    
    <div class="container" >
        
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-auto bg-dark p-5">
                <form action="productos.php">
                    <label style="color: white;" for="">User</label>
                    <div class="input-group p-2">
                        <input class="form-control" placeholder="Username" type="text">
                    </div>
                    <label style="color: white;" for="">Pass</label>
                    <div class="input-group p-2">
                        <input type="password" placeholder="Password"  class="form-control" type="text">
                    </div>
                    <a href="productos.html" style="text-decoration: none;">
                        <input type="button" class="btn btn-success w-100" value="Login">
                    </a>
                </form>
            </div>
        </div>

    </div>
       
    </div>
</body>
</html>