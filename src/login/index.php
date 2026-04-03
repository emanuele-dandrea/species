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
    <?php include '../includes/header.php'; ?>
    <main class="padding flex-wrapper">
        <form action="" method="post">
            <h2>Login into Species</h2>
            <input type="text" placeholder="Username" name="username"><br>
            <input type="password" placeholder="Password" name="password"><br>
            <input type="submit" value="Login" id="submit"><br>
            <a href="/registration/">Not registered?</a>
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
