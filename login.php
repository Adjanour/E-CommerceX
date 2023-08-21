<?php
// Database configuration
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'ecommencce_db';

$validUsername = 'admin';
$validPassword = 'password';

$errorMessage = ''; // Initialize the error message
$username = '';     // Initialize the username variable

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $validUsername && $password === $validPassword) {
        // Redirecting to order page
        header('Location: order.html');
        exit();
    } else {
        $errorMessage = 'Invalid username or password.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
               <a class="nav-item nav-link active" href="product.html"> Home </a>
               
               <a class="nav-item nav-link text-white" href="#">Login <span class="sr-only">(current)</span></a>
            </div>
        </div>    
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-success text-white text-center py-3">Login</h3>
                    </div>
                    <div class="card-body">
                        <h2>Login</h2>
                        <?php if (!empty($errorMessage)) { ?>
                            <p class="alert alert-danger"><?php echo $errorMessage; ?></p>
                        <?php } ?>
                        <form action="order.html" method="POST">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" class="form-control" autocomplete="off" required><br><br>
                
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" class="form-control" required><br><br>
                
                            <button type="submit" class="btn btn-primary">Login</button>
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