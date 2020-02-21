<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link rel = "stylesheet" href = "Application/Style/style.css" type = "text/css">
</head>
<body>
    <?php require_once APPATH.'Templates/headerView.php'; ?>
    <?php
    switch ($page)
    {
        case 'users': require_once APPATH.'Templates/usersView.php' ; break;
        case 'signUp': require_once APPATH.'Templates/signUpView.php' ; break;
    }
    ?>
</body>
</html>