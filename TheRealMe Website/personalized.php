<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Real Me website</title>
  <link rel="stylesheet" href="./personalized.css" />
  <style>
    #button1 {
      background-color: rgb(216, 214, 214);
      font-weight: bolder;
    }

    #button1:hover {
      background-color: rgb(102, 131, 102);
    }
  </style>
  <script src="https://kit.fontawesome.com/8bfb9def12.js" crossorigin="anonymous">
  </script>
</head>

<body>
  <div class="header" id="heading" type="header">
    <div class="titlecontainer">
      <h1>The Real You</h1>
      <h3>Just Like Mothernature Intended </h3>
      <img height="90" width="70" src="https://tse3.mm.bing.net/th?id=OIP.G13ARi1jAS0K9NBjxJIWiwAAAA&pid=Api&P=0&w=112&h=172">
    </div>
    <div class="imagecontainer" id="logo" type="image">
      <img height="70%" width="100%" src="https://tse1.mm.bing.net/th?id=OIP.01bQlL7FMpc4aVcjOC29AQHaE8&pid=Api&P=0&w=271&h=181">
      <p></p>
    </div>

    <form action="signout" method="GET"></form>
    <div class="signoutcontainer">
      <a href="./index.html"><button type="submit" id="button1"> Sign Out </button> </a>
      <p></p>
    </div>
  </div>
  <header class="mainheader" id="mainheader"> <br />
    <h3>Begin Your Journey Today<h3>
  </header>


  <div class="main">
    <div class="container1">
      <p>
        Are you a sugar addict? Are you sick of endless diets and gym plans? Are you tired of the
        constant endless restrictions without the gains? Are you tired of being tired, then you have
        found yourself in the right place. What if I told you, you have finally found the solution to all
        your problems? A solution that allows you to eat all your favourite foods, as much of it as you want
        without ever counting calories again! By now you are probably thinking that this sounds too good to be true,
        exactly what I thought when I began my own journey. I am here to put your misery to an and and to rebuild
        your natural relationship to food, to your mind &body and to your soul. If you can keep an open mind, and your
        endless passion to do, feel and look better, then I can guarantee you, you will not be dissapointed.
      </p>
      Addiction is defined as a chronic relapsing disorder characterized by compulsive drug seeking, with continued
      use, despite harmful consequences and long-lasting changes in the brain. You may be wondering why im so interested in
      this word 'addiction', particulary in this context. This journey cannot start for you until you understand this meaning,
      and how so many of us have fallen victims to this word, unwaware and powerless to its spell.
      <p>
        Many if not all of us have been thought how to eat, what to eat and when to it. We severed our ties to our relationships
        with our own bodies, before we could even learn about them. It is strange to follow a set of rules, meant to regulate your
        body, when no one has taken the time to know its wants and needs. When we start our learning journey from planet Earth,
        we are thought to observe and to copy. How can you know what your body needs, do you even know how to listen for such ques.
        Many of us grow and liv off our given 'Food Guide Pyramid', consciously making sure we never stray too far. When our bodies are
        tired, sick we ask for outside help, never taking the time to recollect what changes have lead us here. Only you can trully know
        what your body needs to consume and to cut out.
      </p>
      <p>
        Here at The Real Me , we are here to help you heal the severed tie between you and your body, with the assistant of he who
        knows it all, Mothernature herself. Begin your journey here today, with an open mind, and a burning drive to do and be better.
        You do not need to search outside yourself, for the solution was within you all along. The you of your dreams has always existed,
        we are here to set them free.
      </p>
    </div>

    <div class="container2">
      <aside class="aside" id="aside" type="text">
        <h4>HEALTH PLANS <i class="fa-solid fa-utensils"></i></h4>
        <nav>
          <ul>
            <li> Recepes <a href="./recipes.php" target="_blank">select</a>
              <p></p>
            </li>
          </ul>
          <ul>
            <li> Meal Plans <a href="./mealplan.php" target="_blank">select</a>
              <p></p>
            </li>
          </ul>
          <ul>
            <li> Excercise <a href="./excercise.php" target="_blank">select</a>
              <p></p>
            </li>
          </ul>
          <ul>
            <li> Mental Health <a href="https://www.psychreg.org/lifestyle-affects-mental-health/" target="_blank">select</a>
          </ul>
        </nav>
      </aside>
    </div>

    <div class="container3">
      <aside class="aside2" id="aside2" type="text">
        <h4>Additional Tools <i class="fa-solid fa-magnifying-glass"></i> </h4>
        <nav>
          Nutrition, Define Raw-based <a href="https://thalassanutrition.com/raw-plant-based-diet/" target="_blank">
            <i class="fa-solid fa-magnifying-glass"></i> </a>
          <p></p>
          Healthline.com <a href="https://www.healthline.com/nutrition/raw-food-diet" target="_blank">
            <i class="fa-solid fa-magnifying-glass"></i> </a>
          <p></p>
          Benefits of a raw based diet <a href="https://bloomfit.net/10-benefits-of-eating-raw-plant-based-foods/" target="_blank">
            <i class="fa-solid fa-magnifying-glass"></i> </a>
          <p></p>
          Leveraging Raw plant-based foods <a href="https://www.youtube.com/watch?v=wboboZd3ovw" target="_blank">
            <i class="fa-solid fa-magnifying-glass"></i> </a>
        </nav>
      </aside>
    </div>
  </div>

  </br>

  <div class="newslettercontainer" id="content" type="text" style=" border: 3px double #023D1A; text-align: center; width: 700px; height: 80px; background-color:rgb(206, 204, 204); margin-left: 25%; margin-right: 25%; box-shadow: #023D1A;">
    <label action="./personalized2.php" method="GET"> Receive news & updates
      <input id="newsletter" type="email" name="newsletter" placeholder="@email.com" style="border-color: rgb(43, 109, 43);">
      <button type="submit" id="subscribe" style="color:rgb(37, 92, 37);">Yes</button>
    </label>
  </div>

  </br>

  <footer class="footer" id="footer" type="content">
    <div>
      <h5> About us</h5>
      <a href="class 6.html"> How it works <p></p> Testemonies <p></p> <a href="https://formswift.com/downloads/terms-of-service/terms-of-service.pdf" target="_blank">Terms & Services </a></a>
      <p></p>
    </div>
    <div>
      <h5>Connect with us </h5>
      <a href="https://www.facebook.com/"><img src="https://tse3.mm.bing.net/th?id=OIP.jN9MoBFyFgTTUqlqfUs3FQHaHa&pid=Api&P=0&w=169&h=169" height="30" /></a>
      <p></p>
      <a href="https://www.instagram.com/"><img src="https://tse1.mm.bing.net/th?id=OIP.2y2SJrFAmm6sfa_ljaeZ3gHaHa&pid=Api&P=0&w=158&h=158" height="30" /></a>
    </div>
    <div>
      <h5> Contact us </h5>
      <a href="contactus.html"> Contact <p></p> Support <p></p> Collaborations </a>
    </div>
  </footer>
  <script src="./personalized.js">
  </script>
</body>

</html>