<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .login-container {
            margin-top: 100px;
        }
        .card-header {
            background-color: #198754;
            color: white;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .btn-success {
            background-color: #198754;
            border: none;
            transition: background-color 0.3s ease;
        }
        .btn-success:hover {
            background-color: #157347;
        }
        .form-group label {
            font-weight: 500;
        }
    </style>
</head>
<body>
    <!-- Login Form -->
    <div class="container login-container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <!-- Card Header -->
                    <div class="card-header">
                        Login
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <form method="POST" action="/dashboard">
                            @csrf
                            <!-- Email Field -->
                            <div class="form-group mb-3">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <!-- Password Field -->
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                            </div>
                            <!-- Remember Me -->
                            <div class="form-group form-check mb-3">
                                <input type="checkbox" id="remember" name="remember" class="form-check-input">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-success w-100">Login</button>
                        </form>
                    </div>
                    <!-- Card Footer -->
                    <div class="card-footer text-center">
                        <p>Don't have an account? <a href="/register">Register here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
