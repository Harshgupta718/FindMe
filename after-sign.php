<?php include('server-signup.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Welcome!</h2>
  </div>

<div class="content">
    <?php if (isset($_SESSION['success'])): ?>
        <div class="error success">
            <h3>
                <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>
                
    <?php if (isset($_SESSION["username"])): ?> 
        <p>Welcome <stong><?php echo $_SESSION['username']; ?></stong></p>
        <p><a href="server-signup.php?logout='1'" style="color: red;">Logout</a></p>
    <?php endif ?>
</div>
  
</body>
</html>