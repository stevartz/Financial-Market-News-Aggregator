
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles/update.css" />

    <title>FNA | Update</title>
  </head>
  <body>
  
  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
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
              <h2>Update Profile</h2>

                <div class="text-center">
                  <label for="password">New Username:</label>
				        <input type="text" id="password" name="update-username" style="width: 500px;" class="form-control" placeholder="Enter New Username">
                <div style="color: red;" id="username_taken"></div>
						</div>
                </div>

              <p>
                <div class="container">
                <label for="password">New Password:</label>
				<input type="password" id="password" name="update-password" style="width: 500px;" class="form-control" placeholder="Enter New Password">
						</div>
            </p>

            <p>
                <div class="container">
                <label for="password">Confirm Password:</label>
				<input type="password" id="password" name="conf-password" style="width: 500px;" class="form-control" placeholder="Enter New Password">
						</div>
            </p>

               <br></br>

              <div class="panel-footer">
              <button type="submit" value="Login" class="btn btn-primary pull-right btn-sm" style = "background-color: darkcyan"  id="submit_btn">Update Profile</button>               
              </div>

            </div>
          </div>
        </div>
      </div>
      <?php include('./Backend/user_update.php'); ?>

    </div>
    </form>

  </body>
</html>
