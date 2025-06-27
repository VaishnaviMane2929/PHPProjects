<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
    <link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.min.css') ?>">
</head>
<body>
<div class="container mt-5">
    <h2>Add New Employee</h2>
    <?= validation_errors('<div class="alert alert-danger">', '</div>') ?>
    <form method="post" action="<?= base_url('employee/insert') ?>">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="ename" class="form-control">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="eadds" class="form-control">
        </div>
        <div class="form-group">
            <label>Contact</label>
            <input type="text" name="econt" class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="egmail" class="form-control">
        </div>
        <div class="form-group">
            <label>Roll No.</label>
            <input type="text" name="eroll" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="<?= base_url('employee') ?>" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
