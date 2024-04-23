<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .login-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .login-heading {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-form {
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 5px;
        }

        .login-btn {
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="login-heading">Login</h2>
        <form class="login-form">
            <div class="form-group">
                <input type="username" class="form-control" id="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary btn-block login-btn">Login</button>
        </form>
        <p class="text-center">Don't have an account? <a href="#">Sign Up</a></p>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
