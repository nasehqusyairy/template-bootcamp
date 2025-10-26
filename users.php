<?php
require_once 'layout/header.php'
?>
<h1>Users</h1>
<hr>
<div class="card">
    <div class="card-body">
        <form action="" class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search..." name="search">
            <button class="btn-primary btn" type="submit">
                <i class="bi bi-search"></i>
            </button>
        </form>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'data.php';

                $search = $_GET['search'] ?? '';
                $nomer = 1;

                foreach ($users as $u) {
                    if (stripos($u['nama'], $search) !== false) {
                ?>
                        <tr>
                            <td><?= $nomer++ ?></td>
                            <td><?= htmlspecialchars($u['nama']) ?></td>
                            <td><?= htmlspecialchars($u['email']) ?></td>
                            <td>
                                <a href="edit.php" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="users.php" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">
                                    <i class="bi bi-x"></i>
                                </a>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php
require_once 'layout/footer.php'
?>