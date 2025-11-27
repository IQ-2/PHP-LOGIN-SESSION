<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

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

        .dashboard-card {
            max-width: 500px;
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

    <div class="dashboard-card">
        <div class="card">
            <div class="card-header text-center">
                <h3 class="mb-0">
                    <i class="fas fa-home"></i> Dashboard
                </h3>
            </div>

            <div class="card-body p-4 text-center">

                <?php if (isset($_SESSION['user_id'])) { ?>

                    <h4 class="mb-3 text-dark">
                        Selamat datang, <strong><?= $_SESSION['username']; ?></strong>!
                    </h4>

                    <a href="logout.php" class="btn btn-danger btn-lg">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>

                <?php } else { ?>

                    <h4 class="text-dark mb-3">Anda belum login</h4>
                    <a href="login.php" class="btn btn-primary btn-lg">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>

                <?php } ?>

            </div>
        </div>
    </div>

</body>

</html>