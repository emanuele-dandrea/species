<?
include '../includes/config.php';

$emailMessage = "";
$usernameMessage = "";
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $checkEmailStmt = $link->prepare("SELECT email FROM users WHERE email = ?");
    
    $checkEmailStmt->bind_param("s", $email);
    $checkEmailStmt->execute();
    $checkEmailStmt->store_result();

    if ($checkEmailStmt->num_rows > 0) {
        $emailMessage = "<span style='display: block;'><i class='bi bi-exclamation-circle-fill'></i> <i>Email already in use!</i></span>";
    } else {
        $stmt = $link->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashedPassword);

        if ($stmt->execute()) {
            $successMessage = "Account created successfully";
        } else {
            $successMessage = "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $checkEmailStmt->close();
    $link->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Species | Registration</title>
    <link rel="stylesheet" href="/public/css/main.css">
    <?php include '../includes/meta.php'; ?>
</head>

<body>
    <div>
        <?php include '../includes/header.php'; ?>
        <?php include '../includes/utils-bar.php'; ?>
    </div>
    <main class="padding flex-wrapper">
        <form action="" method="post">
            <h2>Register on Species</h2>
            <? echo $usernameMessage; ?>
            <input type="text" placeholder="Username" name="username" required><br>
            <? echo $emailMessage; ?>
            <input type="text" placeholder="Email" name="email" required><br>
            <input type="password" placeholder="Password" name="password" required><br>
            <input type="submit" value="Register 😄" id="submit"><br>
            <a href="/login/">Already registered?</a>
        </form>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>

</html>

<style>
    form {
        color: var(--fg-color);
        width: fit-content;
        margin: auto;
        margin-top: auto;
        display: block;
    }

    form h2 {
        margin-bottom: 1rem;
        cursor: default;
    }

    input {
        margin-bottom: 1rem;
        padding: 0.3rem 0.6rem;
        border-radius: var(--border-radius);
        background-color: light-dark(gray, lightgray);
        border: 0;
        color: var(--bg-color);
    }

    span {
        width: 100%;
        text-align: left;
        margin-bottom: 1em;
    }

    input:last-child {
        margin: 0;
    }

    #submit {
        background-color: var(--fg-color);
        color: var(--bg-color);
        cursor: pointer;
        transition: opacity ease-in-out 0.3s;
    }

    #submit:hover {
        opacity: 0.9;
    }

    input::placeholder {
        color: var(--bg-color);
    }

    form a {
        color: var(--fg-color);
    }

    input:focus {
        outline: 0.1em solid light-dark(gray, lightgray);
        outline-offset: 0.1em;
    }

    main {
        text-align: center;
    }
</style>
