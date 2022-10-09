<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
          <link href="../CSS/CSS_Login.css" rel="stylesheet"> 
    </head>

<body>
    <?php
    require('database.php');
    session_start();

    if (isset($_POST['username'])){
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn, $username);
        $_SESSION['username'] = $username;
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $query = "SELECT * FROM `users` WHERE username='$username' 
        and password='".hash('sha256', $password)."'";
  
    $result = mysqli_query($conn,$query);
  
    if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    // Vérifier si l'utilisateur est un administrateur ou un utilisateur
    if ($user['type'] == 'admin') {
      header('location: admin.php');      
    }else{
      header('location: index.php');
    }
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
}
?>

<form class="box_inscription" action="" method="post" name="login">

<h1 class="box-title">Connexion</h1>
    <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
    <input type="password" class="box-input" name="password" placeholder="Mot de passe">
    <input type="submit" value="Se connecter " name="submit" class="box-button">
</p>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>

</body>
</html>