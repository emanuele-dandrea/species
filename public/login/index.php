<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Species | Registration</title>
    <link rel="stylesheet" href="/css/main.css">
    <?php include __DIR__ . '/../../src/includes/meta.php'; ?>
</head>

<body>
    <div>
        <?php include __DIR__ . '/../../src/includes/header.php'; ?>
        <?php include __DIR__ . '/../../src/includes/utils-bar.php'; ?>
    </div>
    <main class="padding flex-wrapper">
        <form action="" method="post">
            <h2>Login into Species</h2>
            <input type="text" placeholder="Username" name="username" required><br>
            <input type="password" placeholder="Password" name="password" required><br>
            <input type="submit" value="Login" id="submit"><br>
            <a href="/registration/">Not registered?</a>
        </form>
    </main>
    <?php include __DIR__ . '/../../src/includes/footer.php'; ?>
</body>

</html>
