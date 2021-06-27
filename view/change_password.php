
<!DOCTYPE html>
<html lang="en">
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
        box-sizing: border-box;
      }
      input {
        margin-bottom: 3px;
        width: 255px;
      }
      label {
        display: inline-block;
        width: 160px;
      }
  </style>
  <title>Document</title>
</head>
<body>
  <?php include("../view/header.php");?>
  <form action="">
    <fieldset>
      <label for="current_password">Current Password:</label>
    <input type="text" name="current_password" id="current_password" >
    <br><br>
    <label for="new_password">New Password:</label>
    <input type="text" name="new_password" id="new_password" >
    <br><br>
    <label for="re_enter_password">Re-enter Password:</label>
    <input type="text" name="re_enter_password" id="re_enter_password" >
    <br><br>
    <input type="submit" name="Change Password">
    </fieldset>
  </form>
</body>
</html>