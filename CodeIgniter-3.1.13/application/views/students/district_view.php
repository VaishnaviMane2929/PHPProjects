<!DOCTYPE html>
<html>
<head>
    <title>Add District</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Add District</h2>

    <form method="post" action="<?= site_url('District_controller/insert'); ?>">
        <div class="mb-3">
            <label class="form-label">Select State:</label>
            <select name="state_id" class="form-control" required>
                <option value="">-- Select State --</option>
                <?php foreach($states as $state): ?>
                    <option value="<?= $state->id ?>"><?= $state->sname ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Enter District Name:</label>
            <input type="text" name="dname" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add District</button>
    </form>
</div>
</body>
</html>
