<?php
$data =
    [
        [
            "nama" => "B.Mbeumo",
            "email" => "2gol@ecl"
        ],
        [
            "nama" => "Casemiro",
            "email" => "Hero@ecl"
        ],
        [
            "nama" => "Dorgu",
            "email" => "AdiliDorgu@ecl"
        ]
    ];
$indeks = 1;

$search = $_GET['search'];
?>
<?php require_once 'layout/header.php' ?>
<div class="py-5 container">
    <h1>Users</h1>
    <hr />
    <div class="card">
        <div class="card-body">
            <form action="" method="GET" name="search">
                <div class="input-group mb-3">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Search..."
                        aria-label="Username"
                        aria-describedby="basic-addon1" name="search" />
                    <button
                        class="btn btn-primary bi bi-search"
                        id="basic-addon1" type="submit"></button>
                </div>
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
                    <?php foreach ($data as $key) :
                    ?>
                        <tr>
                            <td><?= $indeks++ ?></td>
                            <td><?= $key['nama'] ?></td>
                            <td><?= $key['email'] ?></td>
                            <td>
                                <a href="edit.php" class="btn btn-sm btn-warning">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a
                                    href="users.html"
                                    onclick="confirm('Are you sure?')"
                                    class="btn btn-sm btn-danger">
                                    <i class="bi bi-x"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once 'layout/footer.php' ?>