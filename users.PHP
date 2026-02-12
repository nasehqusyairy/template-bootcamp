<?php
require_once("layout/header.php");
?>

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
              require_once("data1.php");

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
<?php
require_once("layout/footer.php");
?>