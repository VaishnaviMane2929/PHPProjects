<!DOCTYPE html> 
<html lang="en">
<head> 
    <meta charset="utf-8"> 
    <title>Students Example</title> 
</head>
<body> 
<h2>Add New Student</h2>

	<form method="post"  enctype="multipart/form-data" action="<?php echo site_url('Stud_controller/insert'); ?>">
        Roll No: <input type="number" name="sid" required><br><br>
        Name: <input type="text" name="sname" required><br><br>
        Contact: <input type="text" name="scont" required><br><br>
        Address: <input type="text" name="sadd" required><br><br>
        Photo: <input type="file" name="sphoto" ><br><br>
        <input type="submit" value="Insert Student">
    </form>


    <h1>Students List</h1> 
    <table border="1" cellpadding="5"> 
        <tr> 
            <th>ID</th> 
            <th>Name</th> 
            <th>Contact</th> 
            <th>Address</th> 
            <th>Photo</th>
            <th>Action</th> 
        </tr> 

        <?php foreach ($students as $student): ?> 
        <tr> 
            <td><?= $student->sid; ?></td> 
            <td><?= $student->sname; ?></td> 
            <td><?= $student->scont; ?></td> 
            <td><?= $student->sadd; ?></td> 
            <td>
                <?php if ($student->sphoto): ?>
                    <img src="<?= base_url('uploads/' . $student->sphoto) ?>" width="60" height="60">
                <?php else: ?>
                    No Image
                <?php endif; ?>
            </td>
            <td>
            <a href="<?= site_url('Stud_controller/edit/' . $student->sid) ?>">Edit</a>
|
            <a href="<?= site_url('Stud_controller/delete/'.$student->sid) ?>" onclick="return confirm('Delete this user?')">Delete</a>
        </td>
        </tr> 
        <?php endforeach; ?> 
    </table>

</body>
</html>