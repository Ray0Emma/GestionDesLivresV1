<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"  content="width-device-width, initial-scale=1.0">
        <title>S'inscrire</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body class="text-gray-700 font-mono" >
       <div class="w-screen h-screen flex flex-col justify-center "> 
        <form  class="flex flex-col justify-center items-center" 
               method="POST" action="auteurIndex.php" >
        <img src="img/girl.jpg" class="w-1/4">
          <div class="text-lg mb-4 justify-center text-center">
          <h2 ><strong>Bienvenu !</strong></h2> 
          </div>
         <input type="text"
                name="cin" 
                required placeholder="CIN"
                class="pl-2  border-b-2 border-indigo-900 
                font-display focus:outline-none">
         
         <input type="text" name="name" required placeholder="Nom et Prénom"
                class="mt-6 pl-2 border-b-2 border-indigo-900 
                font-display focus:outline-none">
         
         <input type="email" name="email" required placeholder="E-Mail"
                class="mt-6 pl-2 border-b-2 border-indigo-900 
                font-display focus:outline-none">
        
         <input type="date" name="dateN"   required 
                class="mt-6 mb-8 pl-2 border-b-2 border-indigo-900
                font-display focus:outline-none">
                
         <input class="cursor-pointer py-2 px-10 bg-indigo-800 
                 hover:bg-indigo-900 rounded-full text-white font-bold 
                 focus:outline-none"
                 type="submit" name="submit" value="Enregistrer">
         
        </form>
    </div>
        
        
    </body>
</html>