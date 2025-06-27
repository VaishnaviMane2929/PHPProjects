<!DOCTYPE html>
<html>
<head>
    <title>Select Taluka</title>
</head>
<body>
    <h2>Select Taluka</h2>
    <form>
        <select name="taluka_id">
            <option value="">-- Select Taluka --</option>
            <?php foreach ($talukas as $taluka): ?>
                <option value="<?= $taluka->id ?>"><?= $taluka->name ?></option>
            <?php endforeach; ?>
        </select>
    </form>
</body>
</html>
