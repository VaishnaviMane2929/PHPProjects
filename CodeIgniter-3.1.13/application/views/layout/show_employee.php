<!DOCTYPE html>
<html>
<head>
  <title>Employee List</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="content-wrapper mt-4">
  <div class="container">

    <!-- ✅ Add Employee Button -->
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2>Employee List</h2>
      <a href="<?= base_url('emp_add') ?>" class="btn btn-success">
        <i class="fas fa-user-plus"></i> Add Employee
      </a>
    </div>

    <!-- ✅ Flash Message -->
    <?php if ($this->session->flashdata('msg')): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('msg'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?>

    <!-- ✅ Employee Table -->
    <table class="table table-bordered table-striped">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Address</th>
          <th>Contact</th>
          <th>Email</th>
          <th>Roll No</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($employee as $emp): ?>
          <tr>
            <td><?= $emp->eid ?></td>
            <td><?= $emp->ename ?></td>
            <td><?= $emp->eadds ?></td>
            <td><?= $emp->econt ?></td>
            <td><?= $emp->egmail ?></td>
            <td><?= $emp->eroll ?></td>
            <td>
              <a href="<?= base_url('Admin_Controller/edit_employee/' . $emp->eid) ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
             <a href="<?= base_url('Admin_Controller/delete_employee/' . $emp->eid) ?>" 
   class="btn btn-sm btn-danger" 
   onclick="return confirm('Delete this employee?')">
   <i class="fas fa-trash"></i>
</a>

            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

  </div>
</div>

<!-- ✅ Bootstrap JS for dismissing alert -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
