<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="bootstrap.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link ref="icon" type="image/x-icon" href="IMG/logo.png" />
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <a class="navbar-brand" href="#"><img src="IMG/logo.png" alt="Home Page" width="30"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
               <a class="nav-item nav-link active" href="Lms.html"> Home </a>
               
               <a class="nav-item nav-link text-white" href="#">Signup <span class="sr-only">(current)</span></a>
            </div>
        </div>    
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-success text-white text-center py-3">Sign Up</h3>
                    </div>
                    <div class="card-body">
                        <h2>Create an Account</h2>
                        <?php if (!empty($errorMessage)) { ?>
                            <p class="alert alert-danger"><?php echo $errorMessage; ?></p>
                        <?php } ?>
                        <form action="signup.php" method="post">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" class="form-control" autocomplete="off" required><br><br>
                
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" class="form-control" required><br><br>

                            <label for="role">Select Role:</label>
                            <select id="role" name="role" class="form-control" required>
                            <option value="student">Student</option>
                            <option value="lecturer">Lecturer</option>
                            </select><br><br>

                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
