<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <p>Logging you out...</p>
    <?php
    session()->destroy(); // Ensure session is destroyed before redirect
    header("Refresh:2; url=" . base_url('admin/login')); // Redirect to login page after 2 seconds
    exit();
    ?>
</body>
</html>
