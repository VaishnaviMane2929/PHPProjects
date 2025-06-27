<!DOCTYPE html>
<html>
<head><title>Districts</title></head>
<body>
    <h3>Districts:</h3>
    <ul>
        <?php foreach ($districts as $dist): ?>
            <li><?= $dist->dname ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
