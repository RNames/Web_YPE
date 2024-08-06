<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if(session()->getFlashdata('error')): ?>
        <div><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>
    <form action="<?= base_url('admin/auth/process') ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
