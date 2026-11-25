
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add New User</title>

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

        .form-card {
            max-width: 650px;
            margin: 50px auto;
            border: none;
            border-radius: 14px;
            box-shadow: 0 4px 18px rgba(0,0,0,0.06);
        }

        .form-control {
            padding: 12px;
            border-radius: 8px;
        }

        .btn {
            border-radius: 7px;
            padding: 10px 20px;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-dark py-3">
    <div class="container">
        <span class="navbar-brand fw-bold">User Management System</span>
        <span class="text-white-50">Add New User</span>
    </div>
</nav>

<div class="container">

    <div class="card form-card">
        <div class="card-body p-4 p-md-5">

            <h3 class="fw-bold mb-2">Add New User</h3>

            <p class="text-secondary mb-4">
                Enter the information below to register a new user.
            </p>

            <form action="<?= base_url('adduser') ?>" method="post">

                <?= csrf_field() ?>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Full Name</label>

                    <input type="text" name="name"
                           class="form-control"
                           placeholder="Enter full name"
                           value="<?= old('name') ?>">

                    <?php if (isset($validation)): ?>
                        <small class="text-danger">
                            <?= esc($validation->getError('name')) ?>
                        </small>
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Email Address</label>

                    <input type="email" name="email"
                           class="form-control"
                           placeholder="example@gmail.com"
                           value="<?= old('email') ?>">

                    <?php if (isset($validation)): ?>
                        <small class="text-danger">
                            <?= esc($validation->getError('email')) ?>
                        </small>
                    <?php endif; ?>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">Phone Number</label>

                    <input type="text" name="phone"
                           class="form-control"
                           placeholder="03XXXXXXXXX"
                           value="<?= old('phone') ?>">

                    <?php if (isset($validation)): ?>
                        <small class="text-danger">
                            <?= esc($validation->getError('phone')) ?>
                        </small>
                    <?php endif; ?>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        Save User
                    </button>

                    <a href="<?= base_url('users') ?>"
                       class="btn btn-outline-secondary">
                        Cancel
                    </a>
                </div>

            </form>

        </div>
    </div>

</div>

</body>
</html>
