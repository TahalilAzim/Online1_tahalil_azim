<?php
  require_once 'dbconfig.php';
  ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Index Page</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
      <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">APPT_DATE</th>
            <th scope="col">FROM_LOCATION</th>
            <th scope="col">TO_LOCATION</th>
            <th scope="col">STATUS</th>
          </tr>
        </thead>
        <?php
          $sql = "SELECT * FROM `ticket_booking`";
          $result = $con->query($sql);
          while($rows = mysqli_fetch_array($result)){
            extract($rows);
            ?>
              <tbody>
                <tr>
                  <th><?php echo $ID ?></th>
                  <th><?php echo $Name ?></th>
                  <th><?php echo $APPT_DATE ?></th>
                  <th><?php echo $FORM_LOCATION ?></th>
                  <th><?php echo $TO_LOCATION ?></th>
                  <th><?php echo $STATUS ?></th>
                </tr>
              </tbody>
            <?php
          }
        ?>
      </table>
      <button type="button" class="btn btn-success">Add Booking</button>
      <button type="button" class="btn btn-danger">Cancel Booking</button>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
  <?php
?>