<!DOCTYPE html>
<html>
<head>
  <title>Edit Employee</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="content-wrapper mt-4">
  <div class="container">
    <h1 class="mb-4">Edit Employee</h1>

    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Form</h3>
      </div>

      <form action="<?= base_url('Admin_Controller/update_employee') ?>" method="post">
        <div class="card-body">
          <input type="hidden" name="eid" value="<?= $employee->eid ?>">

          <div class="form-group">
            <label for="ename">Employee Name</label>
            <input type="text" class="form-control" name="ename" value="<?= $employee->ename ?>" required>
          </div>

          <div class="form-group">
            <label for="eadds">Address</label>
            <input type="text" class="form-control" name="eadds" value="<?= $employee->eadds ?>" required>
          </div>

          <div class="form-group">
            <label for="econt">Contact</label>
            <input type="text" class="form-control" name="econt" value="<?= $employee->econt ?>" required>
          </div>

          <div class="form-group">
            <label for="egmail">Email</label>
            <input type="email" class="form-control" name="egmail" value="<?= $employee->egmail ?>" required>
          </div>

          <div class="form-group">
            <label for="eroll">Roll Number</label>
            <input type="text" class="form-control" name="eroll" value="<?= $employee->eroll ?>" required>
          </div>
        </div>

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Update Employee</button>
          <a href="<?= base_url('Admin_Controller/show_employee') ?>" class="btn btn-secondary">Cancel</a>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
