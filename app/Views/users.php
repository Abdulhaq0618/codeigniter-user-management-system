
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Management System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        body {
            background: #f4f7fb;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: #172554;
        }

        .main-container {
            max-width: 1100px;
            margin: 45px auto;
        }

        .dashboard-card {
            border: none;
            border-radius: 14px;
            box-shadow: 0 4px 18px rgba(0,0,0,0.06);
        }

        .table thead th {
            background: #eff4ff;
            color: #334155;
            padding: 15px;
        }

        .table td {
            padding: 15px;
            vertical-align: middle;
        }

        .btn {
            border-radius: 7px;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-dark py-3">
    <div class="container">
        <span class="navbar-brand fw-bold">
            User Management System
        </span>
        <span class="text-white-50">CodeIgniter 4 Project</span>
    </div>
</nav>

<div class="container main-container">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold text-dark">Users Dashboard</h2>
            <p class="text-secondary mb-0">
                Manage your users and their information.
            </p>
        </div>

        <a href="<?= base_url('adduser') ?>" class="btn btn-primary px-4">
            + Add New User
        </a>
    </div>

    <div class="card dashboard-card">
        <div class="card-body p-4">

            <div class="d-flex justify-content-between mb-3">
                <h5 class="fw-bold">All Users</h5>
                <span class="badge bg-primary">
                    Total Users: <?= count($users) ?>
                </span>
            </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if (!empty($users)): ?>

                            <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= esc($user['id']) ?></td>
                                <td class="fw-semibold">
                                    <?= esc($user['name']) ?>
                                </td>
                                <td><?= esc($user['email']) ?></td>
                                <td><?= esc($user['phone']) ?></td>

                                <td>
                                    <a href="<?= base_url('edituser/' . $user['id']) ?>"
                                       class="btn btn-sm btn-outline-primary">
                                        Edit
                                    </a>

                                    <a href="<?= base_url('deleteuser/' . $user['id']) ?>"
                                       class="btn btn-sm btn-outline-danger"
                                       onclick="return confirm('Are you sure you want to delete this user?')">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>

                        <?php else: ?>

                            <tr>
                                <td colspan="5" class="text-center text-secondary py-5">
                                    No users found. Click Add New User to get started.
                                </td>
                            </tr>

                        <?php endif; ?>
                    </tbody>

                </table>
            </div>

        </div>
    </div>

    <p class="text-center text-secondary mt-4 small">
        User Management System | Developed with CodeIgniter 4 and MySQL
    </p>

</div>

</body>
</html>
