<h2>Users</h2>

<table border="1" cellpadding="10">

    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Username</th>
        <th>Department</th>
        <th>Action</th>
    </tr>

    <?php foreach ($users as $user): ?>

        <tr>

            <td><?= $user["id"] ?></td>

            <td>
                <?= $user["first_name"] ?>
                <?= $user["last_name"] ?>
            </td>

            <td><?= $user["user_name"] ?></td>

            <td><?= $user["department"] ?></td>

            <td>
                <a href="<?= url("users/{$user["id"]}")  ?>">View</a>
            </td>

        </tr>

    <?php endforeach; ?>

</table>