<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


    <title>Document</title>

    <style>


        body{
            margin: 0;
            padding: 0;
        }

        header{
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 90vw;
            margin-right: auto;
            margin-left: auto;
            padding-top: 20px;

        }

        header nav a{
            padding-right: 30px;
            text-decoration: none;
            color: black;

        }


        section{
            width: 100vw;
            height: 80vh;
            background-image: url("hom.jpg");
            background-size: cover;

        }

        h1{
            text-align: center;
            padding-top: 250px;
            color: white;
        }

        section div{
            text-align: center;
        }


        section div button{
            background-color: #eb574d;
            color:white;
            border:none;
            padding-left: 40px;
            padding-right: 40px;
            padding-top: 20px;
            padding-bottom:20px;
            font-size: 110%;
            border-radius: 5px;



        }

        section article{

            color:white;
            display: flex;
            flex-direction: column;
            color: #eb574d;
            padding-left: 20px;

        }

        section article i{
            padding-bottom: 20px;
            font-size: 150%;
        }


        h2{
            width: 10%;
            margin-left: 150px;
            font-size: 150%;
            float: left;
            padding-top: 50px;

        }

        h2::after {
            content: "";
            display: block;
            width: 60px;
            height: 5px;
            margin-top: 20px;
            background-color: red;
        }

        
        .resa-click{
            float: left;
            display: flex;
            justify-content: space-around;
            width: 70%;
            padding-top: 50px;


            
        }
        .resa{
            background: url("reservation.jpg") center;
            background-size: cover;
            width: 400px;
            height:400px;
            color:white;
            display: flex;
            align-items: center;
            text-align: center;


            font-size: 200%;

        }

        .click{
            background: url("livraison.jpg") center;
            background-size: cover;
            width: 400px;
            height:400px;
            color:white;
            font-size: 200%;
            display: flex;
            align-items: center;
            text-align: center;
        }


        .try{
            text-align: center;
            color:#eb574d;
            font-size: 150%;
            clear: both;
        }


        .bas{
            width: 100vw;
            display: flex;
            margin-top: 50px;
        }


        .left{
            width:50%;
            border-right:3px solid #F9E48A;;

        }

        .left p{
            text-align: right;
            width: 80%;
            padding-top: 250px;
            padding-left: 50px;
        }

        .left article{
            padding-top: 250px;
            padding-left: 90px;
            width: 80%;

        }

        .right{
            width: 50%;
            padding-left: 60px;
            padding-top: 60px;
        }




        .right button{
            background-color: #eb574d;
            color:white;
            width: 150px;
            margin-top: 30px;
            padding-top: 10px;
            padding-bottom: 10px;

        }


        .right p{
            padding-top: 250px;
        }


        footer{
            margin-top: 150px;
            background-color: #F9E48A;
            display: flex;
            justify-content: space-between;
        }

        footer a {
            padding-left: 50px;
            padding-top: 20px;
            padding-bottom: 20px;
            text-decoration: none;
            color:black;
        }

        footer article{
            padding-right: 50px;
            padding-top:20px;
            padding-bottom: 20px;
            color:#EB574D;
        }

        .circle{
           position: absolute;
            top: 1450px;
            left:665px;
            height: 600px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

    .circle div{
        width: 50px;
        height: 50px;
        border-radius: 50px;
        background-color: #F9E48A;
        text-align: center;
        color:white;
    }




    </style>

<body>
<header>
    <img src="new.svg" width="100px">

    <nav>
        <a href="" style="border-left: 3px solid #eb574d">Blog</a>
        <a href="">A propos</a>
        <a href="">Nous contacter</a>
        <a href="">Mon compte</a>

    </nav>
</header>


<section>

    <h1>H1</h1>
    <article><i class="fab fa-facebook-f"></i><i class="fab fa-instagram"></i></article>
    <div><button>Rejoignez nous</button></div>


</section>


<h2>Offre de lancement</h2>

<div class="resa-click">
    <div class="resa">Réservation en ligne et carte de fidélité numérique</div>
    <div class="click">Click and collect et livraisons à domicile et carte de fidélité</div>
</div>



<h2>Créer votre compte</h2>

<div class="try">3 mois d'essaies gratuit</div>
<div class="bas">
    <div class="left"><p>En quelques clics, vous créez votre site personnalisé : décrire votre restaurant paramétrez les jours et les horaires
            de réservation mettre les photos, définir les avantages client.</p>
    <article>Nous vous aidons et conseillons dans : définition du périmétre GPS de votre restaurant mise en place du Click and Collect et de la livraisons à domicile</article></div>
    <div class="right">Créer immédiatement votre restaurant</br>
        Ma table</br>
        <button>Créer maintenant</button>
        <p>Votre site internet personnalisé est</br> immédiatement disponible</p>

    </div>

    <div class="circle">
        <div>1</div>
        <div>2</div>
        <div>3</div>
        <div>4</div>
    </div>
</div>



<footer>
    <a href="">Conditions générales</a>
    <article><i class="fab fa-facebook-f" style="padding-right:10px "></i>
        <i class="fab fa-instagram"></i></article>



</footer>
</body>


</html>