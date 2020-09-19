<?php

    session_start();
  date_default_timezone_set('America/New_York');
  include 'conn.php';
  include 'Messages.php';
?>


<!DOCTYPE html>
<html lang =  "en">
    <head>

<style>
table, th, td {
  border: 1px solid black;
}
table.center {
  margin-left: auto;
  margin-right: auto;
}
</style>


        <meta charset="utf-8">
        <meta name = "description" content = "CEN 4010 group 14 webpage">
        <meta name = "author" content = "Group 14">

        <title>Covid Cove</title>

         <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/carousel/">

        <!-- Bootstrap core CSS -->
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
         <link href="css/bootstrap.css" rel="stylesheet" integrity="sha384-0Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

         <!-- Custom styles for this template -->
        <link href="Milestone0/CSS/clean-blog.css"rel="stylesheet">

        <script src="https://kit.fontawesome.com/e0c7dda93e.js" crossorigin="anonymous"></script>



    </head>
    <body>
        <!--Navigation-->
         <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
              <a class="navbar-brand" href="index.php">Home </a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <?php

                        if (isset($_SESSION['userId'])){

                        echo ' <li class="nav-item">
                    <form action="includes/logout.inc.php" method="post">


                      <a href="#" onclick="this.parentNode.submit(); return false;"

                       style="color: #fff; padding: 10px 20px; font-size: 12px; font-family:Helvetica, Arial, sans-serif; font-weight: 800;letter-spacing: 1px;    text-transform: uppercase; "   name="logout-submit">Logout</a>
                    </form>
                  </li>';

                    }
                    else{
                        echo '<li class="nav-item">
                    <a href="log.php">Sign up or create account</a>
                  </li>';

                    }


                    ?>






                </ul>
              </div>
            </div>
          </nav>

        <!--page Header-->
          <section id = "home">
            <header class="masthead" style="background-image: url('images/covid wall.jpg')" style="background-color: #2afdf2">
                <div class="overlay"></div>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                      <div class="page-heading">
                        <h1>Covid Cove</h1>
                        <h3><span >Get all the info in one shop.</span></h3>
                      </div>
                    </div>
                  </div>
                </div>
              </header>
            </section>

        <main>


<!-- Forums Page Zain starting to change the styleing and look of the page-->
 <div class="container">

   <h3>COVID-19 live updates: Total number of cases</h3>
   <a class="btn btn-success" href="https://www.medicalnewstoday.com/articles/live-updates-coronavirus-covid-19#1" role="button">Go to website</a>




  <br>
  <br>
  <?php
  echo "<form method='POST' action='".setComments($conn)."'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'></input>
    <textarea name='message'> </textarea><br>
    <button type='submit' name='commentSubmit'>Comment</button>
  </form>";

  getComments($conn);
  ?>
  </div>



     </main>


        <!-- Footer -->
          <footer>
            <section id = "follow">
            <div class = "container">
                <div class = "row">
                    <div class = "col-lg-8 col-md-10 mx-auto">
                        <h2 style = "text-align: center"> Follow us:</h2>
                            <ul class="nav justify-content-center">
                                  <li class="nav-item">
                                    <a class="nav-link active"href="https://github.com/Winzacar/cen4010-s2020-g14" target="_blank"><i class="fab fa-github" style="font-size: 35pt"></i></a>
                                  </li>
                            </ul>



                    </div>
                </div>

            </div>




            <div class="container">
              <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                 <p style ="text-align: center">&copy; CEN4010 Group 14 2020- theme by <a href="https://getbootstrap.com/docs/4.4/examples/carousel/">Bootstrap</a>  </p>
                </div>
              </div>
            </div>
        </section>
          </footer>
                <!--java script -->
        <script src="Milestone0/JS/bootstrap.bundle.min.js"></script>
        <script src="Milestone0/JS/clean-blog.min.js"></script>
        <script src="Milestone0/JS/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>

</html>
