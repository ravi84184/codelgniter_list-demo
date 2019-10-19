<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>User List</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>Welcome</h1>
    <table>
        <?php foreach($users as $user): ?>
            <tr>
                <td><?= $user['first_name'] ?></td>
                <td><?= $user['last_name'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>