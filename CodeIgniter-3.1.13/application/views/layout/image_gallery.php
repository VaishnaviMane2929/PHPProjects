<!DOCTYPE html>  
<html>
<head>
    <title>Uploaded Images</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6fa;
        }
        .thumb-img {
            width: 150px;
            height: 100px;
            object-fit: cover;
            border: 2px solid #ccc;
            border-radius: 8px;
            transition: 0.3s ease;
            cursor: pointer;
        }
        .thumb-img:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            border-color: #007bff;
        }
        .modal-img {
            max-width: 100%;
            max-height: 80vh;
            border-radius: 12px;
        }
        h4 {
            font-weight: bold;
            color: #2c3e50;
        }
        .btn-sm {
            margin-right: 4px;
        }
    </style>
</head>
<body>
<div class="container mt-4">
  <!-- Add Image Button -->
    <div class="mb-3 text-end">
       <a href="<?= base_url('index.php/upload-photos') ?>" class="btn btn-success">➕ Add Images</a>

    </div>
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

    <h4 class="mb-4">📸 Uploaded Images with Modal Preview</h4>
    <table class="table table-bordered table-hover bg-white shadow-sm rounded">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>File Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; foreach ($images as $img): ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td>
                        <img src="<?= base_url('uploads/' . $img['photos_name']) ?>" 
                             class="thumb-img" 
                             alt="Image" 
                             data-bs-toggle="modal" 
                             data-bs-target="#imageModal" 
                             data-img="<?= base_url('uploads/' . $img['photos_name']) ?>">
                    </td>
                    <td><?= $img['photos_name'] ?></td>
                    <td>
                        <a href="<?= site_url('edit-photo/' . $img['photos_id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                        
                        <a href="<?= base_url('index.php/delete-photo/' . $img['photos_id']) ?>" 
   class="btn btn-danger btn-sm"
   onclick="return confirm('Are you sure you want to delete this image?');">
   Delete
</a>

                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</div>

<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-dark text-white text-center">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="" id="modalImage" class="modal-img" alt="Preview">
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const imageModal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');

    imageModal.addEventListener('show.bs.modal', function (event) {
        const triggerImg = event.relatedTarget;
        const fullImageUrl = triggerImg.getAttribute('data-img');
        modalImage.src = fullImageUrl;
    });

    setTimeout(function () {
    let alert = document.querySelector('.alert');
    if (alert) {
        alert.classList.remove('show');
        alert.classList.add('fade');
    }
}, 3000);

</script>

</body>
</html>
