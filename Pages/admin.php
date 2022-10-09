<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="/images/logo.png" alt="logo">
    <title>Portfolio</title>
</head>
<body>

<main>
    <h2> Create a project </h2>
<form method="post" action="controller.php">
      Title<input type="text" name="Title" placeholder="Entrez le nom du projet" />
      Description<input type="text" name="Description" placeholder="Entrez la description du projet" />
      Image Path<input type="text" name="Picture" placeholder="Entrez le chemin de l'image" />
      Image Path<input type="text" name="Date_created" placeholder="Entrez le chemin de l'image" />
      <input type="submit" value="Submit" />    
</form>
</main>

</body>
</html>