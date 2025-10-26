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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My App</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">My App</a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div
                class="collapse navbar-collapse justify-content-end"
                id="navbarNavAltMarkup">
                <div class="gap-lg-3 navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    <a class="nav-link" href="#">User</a>
                    <a href="login.html" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="py-5 container">
        <h1>Users</h1>
        <hr />
        <div class="card">
            <div class="card-body">
                <form action="">
                    <div class="input-group mb-3">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Search..."
                            aria-label="Username"
                            aria-describedby="basic-addon1" />
                        <button
                            class="btn btn-primary bi bi-search"
                            id="basic-addon1"></button>
                    </div>
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
                                        <a href="edit.html" class="btn btn-sm btn-warning">
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
                </form>
            </div>
        </div>
    </div>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>