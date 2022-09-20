<?php
  require_once 'dbconfig.php';
  ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>APPT_INPUT</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
      <div class="container">
        <form action="appt.php" method="POST">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" name="name"class="form-control" id="exampleFormControlInput1" placeholder="Name">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Date</label>
            <input type="date" name="date"class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">From</label>
            <input type="text" name="from"class="form-control" id="exampleFormControlInput1" placeholder="From">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">To</label>
            <input type="text" name="to"class="form-control" id="exampleFormControlInput1" placeholder="To">
          </div>
          <button type="submit" name="send" class="btn btn-primary">Add</button>
        </form>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    </body>
    </html>
  <?php
?>