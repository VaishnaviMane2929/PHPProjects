<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>

    <form method="post" enctype="multipart/form-data" action="<?= site_url('Stud_controller/update/' . $student->sid) ?>" >
        Name: <input type="text" name="sname" value="<?= $student->sname ?>" required><br><br>
        Contact: <input type="text" name="scont" value="<?= $student->scont ?>" required><br><br>
        Address: <input type="text" name="sadd" value="<?= $student->sadd ?>" required><br><br>
        <img src="<?= base_url('uploads/' . $student->sphoto) ?>" width="60" height="60">
        Photo: <input type="file" name="sphoto" accept="<?= $student->sphoto?>"><br><br>
        <input type="submit" value="Update Student">
    </form>
</body>
</html>