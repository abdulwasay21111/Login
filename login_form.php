<?php

session_start();


if (isset($_SESSION["userlogged"]) == true) {
    header("Location: profile.php");
    exit;
}



?>
<!DOCTYPE html>
<html>

<head>
    <title>Simple Form</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
        }

        .form-box {
            width: 300px;
            margin: 100px auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
        }

        h2 {
            text-align: center;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="form-box">

        <h2>Login Form</h2>

        <form method="post" action="login_process.php">
            <input type="text" name="user" placeholder="Enter Username">
            <?php if (isset($_SESSION["usernameError"])) { ?>
                <div class="alert alert-danger my-2" role="alert">
                    <?php echo $_SESSION["usernameError"];
                    unset($_SESSION["usernameError"]) ?>
                </div>

            <?php } ?>
            <input type="email" name="enteredEmail" placeholder="Enter Email">
            <input type="password" name="enteredPass" placeholder="Enter Password">
            <div>
                <?php if (isset($_SESSION["data_entered"])) { ?>
                    <div class="alert alert-danger my-2" role="alert">
                        <?php echo $_SESSION["data_entered"];
                        unset($_SESSION["data_entered"]) ?>
                    </div>

                <?php } ?>

            </div>

            <button type="submit">Login</button>
        </form>

    </div>

</body>

</html>