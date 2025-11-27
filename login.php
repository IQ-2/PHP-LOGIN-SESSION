<?php
session_start();
$error = "";
if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = ($_POST['password']);

    $user = "admin";
    $pass = "admin123";

    if (empty($username) || empty($password)) {
        $error = "USERNAME DAN PASSWORD TIDAK BOLEH KOSONG";
    } else if  ($username == $user && $password == $pass) {
        $_SESSION['user_id'] = 1;
        $_SESSION['username'] = "Admin";

        header("Location: dashboard.php?status=login_sukses");
        exit();
    } else {
        $error = "Username atau Password Salah";
    }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            max-width: 400px;
            width: 100%;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 15px 15px 0 0 !important;
            padding: 20px;
        }
    </style>
</head>

<body>

    <div class="login-card">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="mb-0">
                    <i class="fas fa-lock"></i> Form Login
                </h3>

            </div>
            <div class="card-body p-4">
                <?php if (!empty($error)): ?>
                    <div class="alert alert-danger">
                        <?= $error ?>
                    </div>
                <?php endif; ?>
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="username" class="form-label">
                            <i class="fas fa-user"></i> Username
                        </label>
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Masukkan username"
                            value="<?= isset($username) ? htmlspecialchars($username) : '' ?>" autofocus>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">
                            <i class="fas a-key"></i> Password
                        </label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Masukkan password">
                    </div>

                    <div class="d-grid">
                        <button type="submit" name="login" class="btn btn-primary btn-lg">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>