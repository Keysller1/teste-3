<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'O usuário já existe!';

   }else{

      if($pass != $cpass){
         $error[] = 'Senhas diferentes!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>registro</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Nome">
      <input type="email" name="email" required placeholder="Email">
      <input type="password" name="password" required placeholder="Senha">
      <input type="password" name="cpassword" required placeholder="Confirme sua senha">
      <select name="user_type">
         <option value="user">Usuário</option>
         <option value="admin">Admin</option>
      </select>
      <input type="submit" name="submit" value="Registrar-se" class="form-btn">
      <p>Já tem uma conta? Faça login <a href="login_form.php">aqui</a></p>
   </form>

</div>

</body>
</html>