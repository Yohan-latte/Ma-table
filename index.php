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


        .client{
            width: 50vw;
            height: 100vh;
            background: url("bg-home.jpg") center;
            background-size: cover;
            float: left;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color:white;
            font-size: 4rem;
        }

        .restaurant{
            width: 50vw;
            height: 100vh;
            background: url("bg-home2.jpg") center;
            background-size: cover;
            float: left;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color:white;
            font-size: 4rem;
        }


        .client span{
            font-size: 30%;
            margin-top: 30px;
        }

        .restaurant span{
            font-size: 30%;
            margin-top: 30px;

        }

        .logo {
            width: 100%;
            text-align: center;
            position: absolute;
            top:50px;
        }



        .logo span{
            background-color: #222222;
            color:white;
            border: 1px solid black;
            font-size: 150%;
            padding:15px  30px 15px 30px ;
        }




        h3{

            width: 10%;
            margin-left: 150px;
            font-size: 150%;
            float: left;

        }

        h3::after {
            content: "";
            display: block;
            width: 60px;
            height: 5px;
            margin-top: 20px;
            background-color: red;
        }


        section{
            width: 70%;
            display: flex;
            justify-content: space-between;
            float: left;
            margin-top: 30px;
            padding-bottom: 50px;
            margin-left: 30px;


        }

        .rs1{
            width: 300px;
            height: 500px;
            background: url("rs4.jpg")center;
            background-size: cover;
        }

        .rs2{
            width: 300px;
            height: 500px;
            background: url("rs2.jpg")center;
            background-size: cover;
        }

        .rs3{
            width: 300px;
            height: 500px;
            background: url("rs1.jpg")center;
            background-size: cover;
        }



        .rs1::after{
            content: "Nom restaurant";
            display: inline-block;
            width: 200px;
            background-color: #F1A28E;
            padding-top: 20px;
            padding-bottom: 20px;
            padding-left: 10px;
            margin-top: 450px;
            margin-left: 100px;
            color: white;

        }

        .rs2::after{
            content: "Nom restaurant";
            display: inline-block;
            width: 200px;
            background-color: #F1A28E;
            padding-top: 20px;
            padding-bottom: 20px;
            padding-left: 10px;
            margin-top: 450px;
            margin-left: 100px;
            color: white;

        }


        .rs3::after{
            content: "Nom restaurant";
            display: inline-block;
            width: 200px;
            background-color: #F1A28E;
            padding-top: 20px;
            padding-bottom: 20px;
            padding-left: 10px;
            margin-top: 450px;
            margin-left: 100px;
            color: white;

        }


        .avantages{
            clear: both;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            padding-top: 50px;
            display: flex;
            justify-content: space-around;
        }

        .avantages div{

            color: #EB574D;
            font-weight: bold;
            font-size: 1.5rem;
            width: 25%;
            text-align: center;
        }

        .avantages div img{
            width: 60px;

        }

        .lorem{
            font-size: 1rem;
            color:black;
            font-weight: normal;
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
    </style>




</head>


<body>
<div class="logo">
   <span>Logo</span>
</div>

<div class="client">
    Vous êtes un chef
    <span>(Ici c'est les restos)</span>
</div>

<div class="restaurant">
    Vous avez faim?
    <span>(Pour les affamés)</span>
</div>




<h3>Nos coups de coeur de la semaine</h3>

<section>
    <div class="rs1"></div>
    <div class="rs2"></div>
    <div class="rs3"></div>
</section>

<h3>Comment ca marche?</h3>



<div class="avantages">
    <div><img src="rapide.png"><p>Simple</p><p class="lorem">Lorem ipsum dolor sil amet. consectetur adipiscing elit. ln mattisjusto non sapien molestie, sil amet f </p></div>
    <div><img src="simple.png"><p>Rapide</p><p  class="lorem">Lorem ipsum dolor sil amet. consectetur adipiscing elit. ln mattisjusto non sapien molestie, sil amet f </p></div>
    <div><img src="avantages.png" style="width:70px"><p>Avantageux</p><p  class="lorem">Lorem ipsum dolor sil amet. consectetur adipiscing elit. ln mattisjusto non sapien molestie, sil amet f </p></div>
</div>


<footer>
    <a href="">Conditions générales</a>
    <article><i class="fab fa-facebook-f" style="padding-right:10px "></i>
    <i class="fab fa-instagram"></i></article>

</footer>

</body>
</html>

