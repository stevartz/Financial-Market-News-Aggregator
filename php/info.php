
<?php
session_start();

?>


<!-- <!DOCTYPE html> -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles/info.css" />

    <title>FNA | Account</title>
  </head>
  <body>
  
    <div class="container-fluid user-profile">
      <div class="row">
        <div class="col-xs-12">
          <div class="well well-sm">
            <div class="user-profile-card">
              <div class="user-profile-header"></div>
              <div class="user-profile-avatar text-center">
                <img alt="" src="./images/pic3.png" />
              </div>
              <div class="row">
                <div class="text-center">
                  <p>
                <small>Username</small>
                  <!-- <h3> -->
                      <?php echo $_SESSION['username']; ?>
                  <!-- </h3> -->
                </div>
                <div class="panel-footer"></div>
                <div class="container">
                  <!-- <p>
                    <small>ID Assigned</small>
use php here
                  </p> -->
                  <p>
                    <small>Hashed Password</small>
                    <?php echo $_SESSION['password']; ?>
                  </p>
                </div>
              </div>
              <div class="panel-footer">
                <a
                  href="./my_account_edit"
                  data-original-title="Edit My Profile"
                  data-toggle="tooltip"
                  type="button"
                  class="btn btn-sm btn-primary"
                  ><i class="glyphicon glyphicon-edit"></i> Edit My Profile</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
