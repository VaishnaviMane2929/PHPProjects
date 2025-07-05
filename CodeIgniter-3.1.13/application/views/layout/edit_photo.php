<!DOCTYPE html>
<html>
<head>
    <title>Edit Photo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3>Edit Photo</h3>

    <!-- Flash message -->
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php elseif ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <form method="post" action="<?php echo site_url('update-photo'); ?>" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?= $photo['photos_id'] ?>">
        <input type="hidden" name="old_image" value="<?= $photo['photos_name'] ?>">

        <div class="mb-3">
            <label>Current Image:</label><br>
            <img src="<?= base_url('uploads/' . $photo['photos_name']) ?>" width="200">
        </div>

        <div class="mb-3">
            <label for="new_photo" class="form-label">Upload New Image</label>
            <input type="file" class="form-control" name="new_photo" id="new_photo" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Photo</button>
        <a href="<?= base_url('show-uploaded-images') ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<!-- Bootstrap JS (for alerts close button) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
