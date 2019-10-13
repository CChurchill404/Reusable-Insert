
<html>
<head>
  <title></title>
</head>
<body>

<div style="background-color: #ff0000;">
  <?php
    // $users = new ViewUser();
    // $users->setAllUsers();
  ?>
</div>
<form name="newUser" action="user.php" method="POST">
  <table align="center">
    <tr>
      <td>Enter Username</td>
      <td><input type="text" name="userName"></td>
    </tr>

    <tr>
      <td>Enter Password</td>
      <td><input type="password" name="Pass"></td>
    </tr>

    <tr>
      <td colspan="2" align="center"><input type="submit" name="submit" value="save"></td>
    </tr>
  </table>
</form>
</body>
</html>
