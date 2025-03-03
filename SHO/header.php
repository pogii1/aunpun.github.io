<?php
// Start the session
session_start();
$authenticated = false;
if (isset($_SESSION["email"])) {
    $authenticated = true;
}
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stylee.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SHOES STORE</title>
    <link rel="icon" href="1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom shadow-sm"data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="1.png" width="50" height="50" class="d-inline-block align" alt=""> <b>Hi pare</b>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php"><b>Home</b></a>
                </li>
                
                    <a class="nav-link active" aria-current="page" href="message.php"><b>messages</b></a>
                </li>
                
                    <a class="nav-link active" aria-current="page" href="#"><b>other</b></a>
                </li>

            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php if ($authenticated): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="admin11.png" width="53" height="30" class="d-inline-block align" alt="">Admin
                        </a>
                        <<ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="profile.php">
                                    Profile
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="logout.php">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a href="register.php" class="btn btn-outline-light me-2" style="background-colorrgb(0, 0, 0);">Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="btn btn-light">Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>