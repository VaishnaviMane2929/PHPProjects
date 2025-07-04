<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Employee</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }
    body {
      font-family: 'Roboto', sans-serif;
      background: #f5f7fa;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 500px;
      margin: 60px auto;
      background: #ffffff;
      padding: 30px 40px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      border-radius: 10px;
    }
    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #333;
    }
    label {
      margin-top: 10px;
      font-weight: 500;
      color: #555;
    }
    input[type="text"],
    input[type="email"],
    input[type="file"],
    textarea {
      width: 100%;
      padding: 10px 12px;
      margin-top: 5px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      transition: border-color 0.3s;
    }
    input:focus,
    textarea:focus {
      border-color: #007bff;
      outline: none;
    }
    img {
      margin: 10px 0;
      border-radius: 5px;
    }
    button {
      width: 100%;
      padding: 12px;
      background: #007bff;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s;
    }
    button:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>

  <div class="container">
    <form action="<?= site_url('Admin_controller/update_employee') ?>" method="post" enctype="multipart/form-data">
      <h2>Edit Employee</h2>

      <input type="hidden" name="eid" value="<?= $emp->eid ?>">

      <label for="ename">Name:</label>
      <input type="text" name="ename" id="ename" value="<?= $emp->ename ?>" required>

      <label for="econt">Contact:</label>
      <input type="text" name="econt" id="econt" value="<?= $emp->econt ?>" required>

      <label for="egmail">Email:</label>
      <input type="egmail" name="egmail" id="egmail" value="<?= $emp->egmail ?>" required>

      <label>Current Photo:</label><br>
      <img src="<?= base_url('uploads/' . $emp->ephoto) ?>" width="80" height="80" alt="Employee Photo">

      <label for="ephoto">Change Photo:</label>
      <input type="file" name="ephoto" id="ephoto" accept="image/*">

      <label for="eadds">Address:</label>
      <textarea name="eadds" id="eadds" rows="4" required><?= $emp->eadds ?></textarea>

      <button type="submit">Update Employee</button>
    </form>
  </div>

</body>
</html>
