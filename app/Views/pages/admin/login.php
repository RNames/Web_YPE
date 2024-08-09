<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Add any CSS or JS files here -->
</head>
<body>
    <h2>Login</h2>

    <!-- Display error message if set -->
    <?php if (session()->getFlashdata('msg')): ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('msg') ?>
    </div>
    <?php endif; ?>

    <form action="<?= base_url('admin/auth/process') ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
