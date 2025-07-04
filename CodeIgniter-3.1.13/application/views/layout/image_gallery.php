<!DOCTYPE html>
<html>
<head>
    <title>Uploaded Images</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .img-box { margin-bottom: 20px; }
        .img-box img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border: 2px solid #ccc;
            border-radius: 8px;
        }
    </style>
</head>
<body>
<div class="container mt-4">
    <h4>Uploaded Images</h4>
    <div class="row">
        <?php foreach ($images as $img): ?>
            <div class="col-md-3 mb-3">
                <img src="<?= base_url('uploads/' . $img['photos_name']) ?>" class="img-fluid" alt="photo">

            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>
