<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form method="post" action="update?id=<?= $user['id'] ?>">
        <input type="text" name="email" placeholder="Username" value="<?= $user['email'] ?>" required>
        <input type="password" name="password" placeholder="Password" value="<?= $user['password'] ?>" required>
        <button type="submit">Update User</button>
    </form>
</body>
</html>
