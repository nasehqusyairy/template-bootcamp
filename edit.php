<?php require_once 'layout/header.php' ?>
<div class="my-5 container">
    <h1>Edit User</h1>
    <hr>
    <div class="card">
        <div class="card-body">
            <form action="">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input value="Jane Smith" type="text" class="form-control" id="name" placeholder="Enter name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="jane@example.com" disabled type="email" class="form-control" id="email"
                        placeholder="Enter email">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="users.html" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>

<?php require_once 'layout/footer.php' ?>