<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — Smart Hostel Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="auth-body">

<div class="auth-shell">
    <div class="auth-side">
        <div class="logo-big">&#127968;</div>
        <h1>Smart Hostel Management</h1>
        <p>A complete solution for managing room allotments, student billing, and warden administration.</p>
        <ul class="feature-list">
            <li><span>&#10003;</span> Real-time Room Availability</li>
            <li><span>&#10003;</span> Automated Student Billing</li>
            <li><span>&#10003;</span> Secure Data Management</li>
            <li><span>&#10003;</span> Complaint Tracking System</li>
        </ul>
    </div>

    <div class="auth-form-wrap">
        <div class="auth-card">
            <h2>Welcome Back</h2>
            <p class="muted">Sign in to manage your hostel account</p>

            <?php if (!empty($error)): ?>
                <div class="alert alert-error"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <form method="POST" action="login_process.php" class="form">
                <div class="field">
                    <label for="username">User ID / Student ID</label>
                    <input type="text" id="username" name="username" placeholder="Enter your ID" required autofocus>
                </div>
                
                <div class="field">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required>
                </div>

                <div class="field">
                    <label for="role">Portal Type</label>
                    <select name="role" id="role" class="select-field">
                        <option value="admin">Admin / Warden</option>
                        <option value="student">Student Portal</option>
                    </select>
                </div>

                <label class="checkbox">
                    <input type="checkbox" name="remember">
                    <span>Keep me signed in</span>
                </label>

                <button type="submit" class="btn btn-primary">Sign In to Dashboard</button>
            </form>

            <p class="auth-foot">Need a seat? <a href="register.php">Apply Now</a></p>
            <div class="hint"><strong>Admin Hint:</strong> admin / admin123</div>
        </div>
    </div>
</div>

</body>
</html>