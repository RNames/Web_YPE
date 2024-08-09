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
    <script>
        // Redirect after 2 seconds
        setTimeout(() => {
            window.location.href = "<?= base_url('admin/login') ?>";
        }, 2000);
    </script>
</body>
</html>
