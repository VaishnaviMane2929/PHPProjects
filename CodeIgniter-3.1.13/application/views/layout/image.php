<!DOCTYPE html>
<html>
<head>
    <title>Upload Multiple Photos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .image-row {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2>Upload Multiple Photos</h2>

    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
    <?php elseif ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
    <?php endif; ?>

    <form method="post" action="<?= site_url('upload-photos-submit') ?>" enctype="multipart/form-data">

   
        <div id="image-container">
            <div class="row image-row">
                <div class="col-md-10">
                    <input type="file" name="photos[]" class="form-control" required>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger" onclick="removeImageInput(this)">Delete</button>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <button type="button" class="btn btn-secondary" onclick="addImageInput()">➕ Add Image</button>
        </div>

        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>

<script>
    function addImageInput() {
        const container = document.getElementById('image-container');
        const div = document.createElement('div');
        div.className = 'row image-row';
        div.innerHTML = `
            <div class="col-md-10">
                <input type="file" name="photos[]" class="form-control" required>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-danger" onclick="removeImageInput(this)">Delete</button>
            </div>
        `;
        container.appendChild(div);
    }

    function removeImageInput(button) {
        const row = button.closest('.image-row');
        row.remove();
    }
</script>
</body>
</html>
