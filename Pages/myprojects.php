<?php
include("projects.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="../Medias/icon.png" alt="logo">
    <title>Portfolio</title>
</head>
<body>

<video id="video" autoplay muted loop source src="../Medias/bgabout.mp4" type="video/mp4" class="video"></video>

<div class="header">
  <div class="top"> <img src="../Medias/logo.png" class="logo" alt="logo">
<h1> <a href="index.html"></a>Raphaël Plassart</a></h1></div> 
<button type="button" id="togg1" class="button" onclick="changeStyle()">  <span class="material-symbols-outlined"> 
   menu
   </span>
</button>
<nav id="nav"> 
   <ul class="menu">
       <li class="li_nav"><a href="index.php">Home</a></li>
       <li class="li_nav"><a href="aboutme.php">About Me</a></li>
       <li class="li_nav"><a href="myprojects.php">My projects</a></li>
       <li class="li_nav"><a href="#footer">Contact</a></li>

   </ul>
</nav>  
</div>

<div class="main_about_me">
    <h2>My projects</h2>
<?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <div class="info_title"><?php echo $data['Title']??''; ?></div>
      <div class="info"><?php echo $data['Description']??''; ?></div>
      <div class="info"> <img src="<?php echo $data['Picture']??''; ?>" class="project_img"> </div> 
     <?php
      $sn++;}}else{ ?>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <?php
    }?>

</div>

<div class="footer" id="footer">
  <div class="footer-tab">
        <ul>
          <p>Site pages</p>
       <li><a href="index.php">Home</a></li>
       <li><a href="https://www.youtube.com/channel/UCEb_NXhHa8v7JSQQ84X4GaA">About Me</a></li>
       <li><a href="a-propos.html">My projects</a></li>
       <li><a href="https://www.instagram.com/raph.otos/">Contact</a></li>
        </ul>

        <ul>
          <p>Information</p>
          <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Sitemap</a></li>
          <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">About</a></li>
          <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Legal Notice</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
        <ul>
          <p> Useful Links</p>
          <li><a href="https://github.com/raphplt">Github</a></li>
          <li><a href="https://www.raphotos.fr">Website</a></li>
          <li><a href="mailto:plassa_r@etna-alternance.net">Mail</a></li>
          <li><a href="https://www.youtube.com/channel/UCEb_NXhHa8v7JSQQ84X4GaA">Youtube</a></li>
        </ul>
  </div>
  <p class="copyright"> Copyright © 2022 Raphaël Plassart. All rights reserved</p>
</div>
    <script>
let togg1 = document.getElementById("togg1");
let nav = document.getElementById("nav");

togg1.addEventListener("click", () => {
  if(getComputedStyle(nav).display != "none"){
    nav.style.display = "none";

  } else {
    nav.style.display = "block";
  }
})
    </script>

</body>   
</html>