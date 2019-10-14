
<html>
<head>
  <title></title>
</head>
<body>

<div style="background-color: #ff0000;">
</div>
<form name="newUser" action="user.php" method="POST">
  <table align="center">
    <tr>
      <td>User ID</td>
      <?
      //using the select_data method
      
        $myData = $selectData->select_data("required_table");
      
        foreach ($myData as $row) { ?>
      
        <label><?php echo $row['rowName'] ?></label>
      
    <?php } ?>
    </tr>
    
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
