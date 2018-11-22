<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <link rel="stylesheet" href="style.contact.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">


    <title>Contact</title>
</head>
<body>
    <header>
        <div id="logo"><img src="Travail préparatoire/Images/logo-contact.png"></div>
        <div><p>CONTACT</p><input type="button" id="back" value="Retour"></div>
    </header>

    <div class="container2">
        <div class="block">
            <div id="portable"><img class="logo" src="Travail préparatoire/Images/logo-téléphone (1).png"></div>
            <div id="mail"><img class="logo" src="Travail préparatoire/Images/logo-mail (1).png"></div>
            <div id="adresse"><img class="logo" src="Travail préparatoire/Images/logo-adresse (1).png"></div>
        </div>
    </div>

    <div class="container">
        <div id="titleForm"><p>Contactez moi</p></div>
        <form>
            <input id="text" type="text" name="first_name" placeholder="Votre nom">
            <input id="email"type="email" name="email" placeholder="Votre email">
            <textarea id="message" name="comments" placeholder="Votre message" ></textarea>
            <button id="envoyer" name="envoyer" type="submit" class="submit">Envoyer</button>
        </form>
    </div>
    
    <script src="script.js"></script>
</body>
</html>