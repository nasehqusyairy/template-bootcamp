<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Users</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="bg-dark navbar navbar-expand-lg" data-bs-theme="dark">
      <div class="container">
        <a class="navbar-brand" href="#">My App</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNavAltMarkup"
        >
          <div class="navbar-nav gap-lg-3">
            <a class="nav-link" href="prog1.html" style="font-size: large">Home</a>
            <a class="nav-link active" href="users.php" style="font-size: large">User</a>
            <a href="login.html" class="btn btn-danger">Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir navbar -->

    <div class="container py-5">
      <h1>Users</h1>
      <hr />
      <div class="card">
        <div class="card-body">
          <form class="input-group mb-3">
            <input
              type="text"
              class="form-control"
              placeholder="Search..."
            />
            <button class="btn btn-primary" id="basic-addon1">
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
              // --- Data user pakai array ---
              $users = [
                ["name" => "Jane Smith", "email" => "jane@example.com"],
                ["name" => "Michael Johnson", "email" => "michael@example.com"],
                ["name" => "Emily Davis", "email" => "emily@example.com"],
                ["name" => "David Wilson", "email" => "david@example.com"]
              ];

              // --- Tampilkan data dengan perulangan ---
              $no = 1;
              foreach ($users as $user) {
                echo "<tr>";
                echo "<td>{$no}</td>";
                echo "<td>{$user['name']}</td>";
                echo "<td>{$user['email']}</td>";
                echo "<td>
                        <a href='edit.php?id={$no}' class='btn btn-sm btn-warning'>
                          <i class='bi bi-pencil'></i>
                        </a>
                        <a href='users.php' onclick=\"return confirm('Are you sure?')\" class='btn btn-sm btn-danger'>
                          <i class='bi bi-x'></i>
                        </a>
                      </td>";
                echo "</tr>";
                $no++;
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
