<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-success text-white text-center">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!-- Name -->
                            <div class="form-group mb-3">
                                <label for="name">Full Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
                            </div>
                            <!-- Email -->
                            <div class="form-group mb-3">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <!-- Phone Number -->
                            <div class="form-group mb-3">
                                <label for="phone_number">Phone Number</label>
                                <input type="tel" id="phone_number" name="phone_number" class="form-control" placeholder="Enter your phone number" required>
                            </div>
                            <!-- Role -->
                            <div class="form-group mb-3">
                                <label for="role">Role</label>
                                <select id="role" name="role" class="form-control" required>
                                    <option value="" disabled selected>Select a role</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                    <option value="partner">Partner</option>
                                </select>
                            </div>
                            <!-- Password -->
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                            </div>
                            <!-- Confirm Password -->
                            <div class="form-group mb-3">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Re-enter your password" required>
                            </div>
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-success btn-block">Register</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
