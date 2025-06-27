<!-- View: application/views/state_form.php -->

<!DOCTYPE html>
<html>
<head>
    <title>State District Taluka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <h2>Select State</h2>

    <form method="post" action="#">
        <!-- State Dropdown -->
        <div class="mb-3">
            <label for="state">State</label>
            <select id="state" class="form-control">
                <option value="">Select State</option>
                <?php foreach ($states as $state): ?>
                    <option value="<?= $state->sid ?>"><?= $state->sname ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- District Dropdown -->
        <div class="mb-3">
            <label for="district">District</label>
            <select id="district" class="form-control">
                <option value="">Select District</option>
            </select>
        </div>

        <!-- Taluka Dropdown -->
        <div class="mb-3">
            <label for="taluka">Taluka</label>
            <select id="taluka" class="form-control">
                <option value="">Select Taluka</option>
            </select>
        </div>
    </form>
</div>

<script>
    // Get Districts based on State
    $('#state').change(function() {
        var state_id = $(this).val();
        if (state_id != '') {
            $.ajax({
                url: "<?= site_url('State_controller/get_districts') ?>",
                method: "POST",
                data: {state_id: state_id},
                success: function(data) {
                    $('#district').html(data);
                    $('#taluka').html('<option value="">Select Taluka</option>');
                }
            });
        }
    });

    // Get Talukas based on District
    $('#district').change(function() {
        var district_id = $(this).val();
        if (district_id != '') {
            $.ajax({
                url: "<?= site_url('State_controller/get_talukas') ?>",
                method: "POST",
                data: {district_id: district_id},
                success: function(data) {
                    $('#taluka').html(data);
                }
            });
        }
    });
</script>
</body>
</html>
