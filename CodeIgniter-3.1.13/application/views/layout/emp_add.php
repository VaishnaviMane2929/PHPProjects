<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Insert Employee</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f1f4f8;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      background-color: #fff;
    }

    .card-title {
      font-weight: 600;
      color: #333;
    }

    .form-control:focus {
      box-shadow: none;
      border-color: #0d6efd;
    }

    .btn-primary {
      border-radius: 20px;
      font-weight: 500;
    }

    label {
      font-weight: 500;
      color: #444;
    }

    .form-label::after {
      content: "*";
      color: red;
      margin-left: 4px;
    }
  </style>
</head>
<body>
<br/><br/><br/>
<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="card p-4 col-md-6 col-lg-5">
    <h4 class="card-title mb-4 text-center">Insert Employee</h4>
    <form action="<?= site_url('Admin_controller/insert_Emp') ?>" method="post" enctype="multipart/form-data">
      
      <div class="mb-3">
        <label for="ename" class="form-label">Name</label>
        <input type="text" class="form-control" id="ename" name="ename" required>
      </div>

      <div class="mb-3">
        <label for="econt" class="form-label">Contact</label>
        <input type="text" class="form-control" id="econt" name="econt" required>
      </div>

      <div class="mb-3">
        <label for="eadds" class="form-label">Address</label>
        <input type="text" class="form-control" id="eadds" name="eadds" required>
      </div>

      <div class="mb-3">
        <label for="eroll" class="form-label">Role</label>
        <input type="text" class="form-control" id="eroll" name="eroll" required>
      </div>

      <div class="mb-3">
        <label for="egmail" class="form-label">Email</label>
        <input type="egmail" class="form-control" id="egmail" name="egmail" required>
      </div>

      <div class="mb-3">
        <label for="epass" class="form-label">Password</label>
        <input type="text" class="form-control" id="epass" name="epass" required>
      </div>

      <div class="mb-3">
        <label for="ephoto" class="form-label">Photo</label>
        <input type="file" class="form-control" id="ephoto" name="ephoto" accept="image/*" required>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>
<br/><br/><br/>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
