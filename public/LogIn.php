<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"  content="width-device-width, initial-scale=1.0">
        <title>Espace Login</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body class="text-gray-700 font-mono ">
      <div class="w-screen h-screen flex flex-col justify-center ">
        <form  class="flex flex-col justify-center items-center" 
               method="POST" action="validationLogin.php" >
               <img src="img/admin.jpg" class="w-32">
               <div class="text-lg mb-4 justify-center text-center">
               <h2 ><strong>Bienvenu !</strong></h2>
               </div>
               <input type="text" name="login" required placeholder="Nom"
                      class="pl-2 mb-4 border-b-2 border-blue-200 
                       focus:outline-none">
               <input type="password" name="passw" required placeholder="Mot De Passe"
                      class="pl-2 mb-4 border-b-2 border-blue-200 
                      font-display focus:outline-none">
               <input type="submit" name="submit" value="Envoiyer"
               class="cursor-pointer py-2 px-10 bg-blue-300 hover:bg-blue-400 
               rounded-full text-white font-bold focus:outline-none">
        </form>
      </div>
        
    </body>
</html>