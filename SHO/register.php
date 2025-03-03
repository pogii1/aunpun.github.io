<?php

include "header.php";

$first_name = "";
$last_name = "";
$email = "";
$phone = "";
$address = "";

$first_name_error = "";
$last_name_error = "";
$email_error = "";
$phone_error = "";
$address_error = "";
$password_error = "";
$confirm_password_error = "";

$error = false;

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($first_name)) {
        $first_name_error = "First name is required";
        $error = true;
    }

    if (empty($last_name)) {
        $last_name_error = "Last name is required";
        $error = true;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Email format is not valid";
        $error = true;
    }

    include "db.php";
    $dbConnection = getDatabaseConnection();


    $statement = $dbConnection->prepare("SELECT id FROM users WHERE email = ?");
    $statement->bind_param("s", $email);
    $statement->execute();
    $statement->store_result();

    if ($statement->num_rows > 0) {
        $email_error = "Email is already taken";
        $error = true;
    }

    $statement->close();

    if (!preg_match("/^(\+|00\d{1,3})?[-]?\d{7,12}$/", $phone)) {
        $phone_error = "Phone format is not valid";
        $error = true;
    }

    if (strlen($password) < 6) {
        $password_error = "Password must be at least 6 characters";
        $error = true;
    }

    if ($confirm_password != $password) {
        $confirm_password_error = "Password and confirm password do not match";
        $error = true;
    }

    if (!$error) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $created_at = date('Y-m-d H:i:s');

        $statement = $dbConnection->prepare(
            "INSERT INTO users (first_name, last_name, email, phone, address, password, created_at) VALUES (?, ?, ?, ?, ?, ?, ?)"
        );

        if ($statement) {
            $statement->bind_param('sssssss', $first_name, $last_name, $email, $phone, $address, $hashed_password, $created_at);
            $statement->execute();
            $insert_id = $statement->insert_id;
            $statement->close();

       
            $_SESSION["id"] = $insert_id;
            $_SESSION["first_name"] = $first_name;
            $_SESSION["last_name"] = $last_name;
            $_SESSION["email"] = $email;
            $_SESSION["phone"] = $phone;
            $_SESSION["address"] = $address;
            $_SESSION["created_at"] = $created_at;

            header("Location: index.php");
            exit;
        } else {
            
            echo "Error preparing statement: " . $dbConnection->error;
        }
    }
}
?>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-6 mx-auto border shadow p-4">
            <h2 class="text-center mb-4">Register</h2>
            <hr />
            <form method="POST" action="">
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">First name</label>
                    <div>
                        <input type="text" class="form-control" name="first_name" value="<?= htmlspecialchars($first_name) ?>">
                        <span class="text-danger"><?= $first_name_error ?></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Last name</label>
                    <div>
                        <input type="text" class="form-control" name="last_name" value="<?= htmlspecialchars($last_name) ?>">
                        <span class="text-danger"><?= $last_name_error ?></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Email*</label>
                    <div>
                        <input type="email" class="form-control" name="email" value="<?= htmlspecialchars($email) ?>">
                        <span class="text-danger"><?= $email_error ?></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Phone*</label>
                    <div>
                        <input type="text" class="form-control" name="phone" value="<?= htmlspecialchars($phone) ?>">
                        <span class="text-danger"><?= $phone_error ?></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Address</label>
                    <div>
                        <input type="text" class="form-control" name="address" value="<?= htmlspecialchars($address) ?>">
                        <span class="text-danger"><?= $address_error ?></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Password</label>
                    <div>
                        <input type="password" class="form-control" name="password">
                        <span class="text-danger"><?= $password_error ?></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Confirm Password</label>
                    <div>
                        <input type="password" class="form-control" name="confirm_password">
                        <span class="text-danger"><?= $confirm_password_error ?></span>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="offset-sm-4 col-sm-4 d-grid">
                        <button type="submit" class="btn btn-secondary">Register</button>
                    </div>
                    <div class="col-sm-4 d-grid">
                        <a href="index.php" class="btn btn-outline-secondary">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
include "footer.php";
?>