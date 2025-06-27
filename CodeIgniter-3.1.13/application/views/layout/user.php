<!DOCTYPE html>
<html>
<head>
    <title>Employee Records</title>
    <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>
<div class="container mt-5">
    <h2>All Employees</h2>
    <a href="<?= base_url('employee/add') ?>" class="btn btn-primary mb-3">Add Employee</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Roll No.</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $emp): ?>
                <tr>
                    <td><?= $emp->eid ?></td>
                    <td><?= $emp->ename ?></td>
                    <td><?= $emp->eadds ?></td>
                    <td><?= $emp->econt ?></td>
                    <td><?= $emp->egmail ?></td>
                    <td><?= $emp->eroll ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
