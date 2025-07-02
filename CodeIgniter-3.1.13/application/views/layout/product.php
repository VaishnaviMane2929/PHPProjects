<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Product & Item Entry</title>
  </head>
  <body>
   

  <form class="row g-3" style="margin: 20px;" action="<?php echo site_url('Admin_Controller/addProduct'); ?>" method="post" >
  <div class="col-md-6">
    <label for="Name" class="form-label">Product Name</label>
    <input type="text" class="form-control" name="Name" id="Name">
  </div>
  <div class="col-md-6">
    <label for="price" class="form-label">price</label>
    <input type="number" class="form-control"  name="price" id="price">
  </div>
  <div class="col-6">
    <label for="date" class="form-label">date</label>
    <input type="date" class="form-control" name="date" id="date">
  </div>
  <div class="col-6">
    <label for="invoiceNumber" class="form-label">invoice Number</label>
    <input type="text" class="form-control" name="invoiceNumber" id="invoiceNumber" >
  </div>
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Add Product</button>
  </div>
</form>

<form method="post"  style="margin: 20px;" action="<?= site_url('Admin_Controller/add_item') ?>">
<input type="hidden" name="pid" value="<?= isset($latest_pid) ? $latest_pid : '' ?>">


<table id="invoiceTable" border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Price</th>
                <!-- <th>Total Item</th> -->
                <!-- <th>Pid Item</th> -->
                <th><button  class="btn btn-primary" type="button" onclick="addRow()">Add</button></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" name="product[]" required></td>
                <td><input type="number" name="qty[]" required></td>
                <td><input type="number" name="price[]" required></td>
                <td><input type="number" name="totalPrice[]" required></td>
                <!-- <td><input type="number" name="totalItem[]" required></td> -->
                <td><button class="btn btn-primary" type="button" onclick="removeRow(this)">Delete</button></td>
            </tr>
        </tbody>
    </table>

    <br>
    <button class="btn btn-primary" type="submit">Submit item</button>
</form>

<script>

document.addEventListener('input', function(e) {
  if (e.target.classList.contains('price') || e.target.classList.contains('qty')) {
    const row = e.target.closest('tr');
    const qty = parseFloat(row.querySelector('.qty').value) || 0;
    const price = parseFloat(row.querySelector('.price').value) || 0;
    const total = qty * price;
    row.querySelector('.totalPrice').value = total.toFixed(2);
  }
});

function addRow() {
    const table = document.getElementById('invoiceTable').getElementsByTagName('tbody')[0];
    const newRow = table.rows[0].cloneNode(true);

    // Clear the input values
    const inputs = newRow.getElementsByTagName('input');
    for (let input of inputs) {
        input.value = '';
    }

    table.appendChild(newRow);
}

function removeRow(btn) {
    const row = btn.closest('tr');
    const table = row.parentNode;
    if (table.rows.length > 1) {
        table.removeChild(row);
    }
}
</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>