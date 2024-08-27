<?php
  require 'conexionDB.php';

  $message = '';
  
  if(!empty($_POST['txtemail']) && !empty($_POST['txtpassword'])){
     $sql = "INSERT INTRO user(txtemail, txtpassword) VALUES (:txtemail, :txtpassword)";
     $stmt = $conn->prepare($sql);
     $stmt->bindParam('txtemail', $_POST['txtemail']);
     $password = password_hash($_POST['txtpassword'], PASSWORD_BCRYPT);
     $stmt->bindParam('txtpassword',$password);
  }

  if($stmt->execute()){
     $message = 'Successfully created new user';
  } else {
    $message = 'Sorry there must have been an issue creating your account';
  }
?>
<?php if(!empty($message)):?>
  <p><? = $message ?></p>
  <?php endif; ?>