<?php

session_start();

unset($_SESSION["userlogged"]);

session_destroy();

header("Location: login_form.php");
exit;
